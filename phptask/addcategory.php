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
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add category</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>

    

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Add new Category</h3>
                <hr>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="libs/action.php" method="POST" onsubmit="return setCategoryValidationResponse()">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="title" name="title">
                        <span id="title-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" cols="30" rows="3" name="content" id="content"></textarea>
                        <span id="content-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="url">URL:</label>
                        <input type="text" class="form-control" placeholder="Enter url" id="url" name="url">
                        <span id="url-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="metatitle">Meta Title:</label>
                        <input type="text" class="form-control" placeholder="Enter metatitle" id="metatitle" name="metatitle">
                        <span id="metatitle-error" class="error">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="pcategory">Parent  Category:</label>
                        <select class="form-control" name="pcategory" id="pcategory">
                            <option value=""></option>
                            <?php foreach ($category as $cat): ?>
                                 <option value="<?=$cat['id']?>"><?=$cat['title']?></option>
                            <?php endforeach ?>
                        </select>
                        <span id="pcategory-error" class="error">
                        </span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="addcategory">SUBMIT</button>
                    
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