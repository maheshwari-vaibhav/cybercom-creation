<?php session_start();

    if (!isset($_SESSION['email'])) {
        header('location:index.php');
    }

?>


<?php if (isset($_SESSION['errormsg'])) {
    echo $_SESSION['errormsg'];
} ?>
<?php 
    require_once 'libs/db.inc.php';
    $db = new Database;
    $category = $db->fetchData('category');

     if (isset($_GET['id']) && !empty($_GET['id'])) {
        $data = $db->fetchDataId('blog_post',$_GET['id']);
        $categorydata = $db->fetchPostCategoryId('post_category',$_GET['id']);
        $cdata = json_decode($categorydata['cid']);
        if (!$data) {
            die("No record found!!"); 
        } 
    } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Blog Post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>

    

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Update Blog Post</h3>
                <hr>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="libs/action.php" method="POST" onsubmit="return setBlogValidationResponse()" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= isset($_SESSION['id'])? $_SESSION['id']:$data['id'] ?>">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="title" name="title" value="<?= isset($_SESSION['title'])? $_SESSION['title']:$data['title'] ?>">
                        <span id="title-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" cols="30" rows="3" name="content" id="content">
                            <?= isset($_SESSION['content'])? $_SESSION['content']:$data['content'] ?>
                        </textarea>
                        <span id="content-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="url">URL:</label>
                        <input type="text" class="form-control" placeholder="Enter url" id="url" name="url" value="<?= isset($_SESSION['url'])? $_SESSION['url']:$data['url'] ?>">
                        <span id="url-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="publish">PublishAt:</label>
                        <input type="datetime-local" class="form-control" placeholder="Enter publish" id="publish" name="publish" value="<?= isset($_SESSION['datetime'])? $_SESSION['datetime']:date('Y-m-d\TH:i', strtotime($data['publishAt'])) ?>" >
                        <span id="publish-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="pcategory">Category:</label>
                        <select class="form-control" name="category[]" id="category" multiple>
                            <option value="" disabled>Please select category</option>
                            <?php foreach ($category as $cat): ?>
                                  <?php if (in_array($cat['id'], $cdata)): ?>
                                    <option value="<?=$cat['id']?>" selected><?=$cat['title']?></option>  
                                <?php else: ?>
                                    <option value="<?=$cat['id']?>"><?=$cat['title']?></option> 
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                        <span id="category-error" class="error">
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="img">Image:</label>
                        <input type="file"  placeholder="select Image" id="img" name="img">
                        <span id="img-error" class="error">
                        </span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="updateblog">SUBMIT</button>
                    
                </form>
            </div> 
        </div>
        

        
    </div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Latest fonawesome icon JavaScript -->
<script src="https://kit.fontawesome.com/ea4f69ef80.js" crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</html>