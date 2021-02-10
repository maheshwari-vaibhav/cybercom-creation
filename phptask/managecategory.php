<?php session_start();

    if (!isset($_SESSION['email'])) {
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Category</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>

    <div class="container mt-3">
    	<div class="row">
    		<div class="col-12">
    			<a href="dashboard.php" class="btn btn-sm btn-success">Manage Post</a>
    			<a href="#" class="btn btn-sm btn-primary">My Profile</a>
    			<a href="libs/action.php?action=logout" class="btn btn-sm btn-danger">Logout</a>

    		</div>
    	</div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Blog Category</h3>
                <hr>
                <a href="addcategory.php" class="btn btn-success">Add Category</a>
            </div>
            <?php if (isset($_SESSION['successmessage']) && !empty($_SESSION['successmessage'])): ?>
                <?php if (isset($_SESSION['successtime']) && $_SESSION['successtime'] > time()): ?>
                    <div class="col-12">
                        <span class="success"><?php echo $_SESSION['successmessage'];?></span>
                    </div>
                  <?php endif ?>  

            <?php endif ?>
            <div class="col-12">
                <span id="msg" class="successmsg"></span>
            </div>
            
        </div>
        <div class="row mt-3">
            <div class="col-12" id="category">
                
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

<script type="text/javascript">
$(document).ready(function(){  
    load_category()
    function load_category()
    {
        $.ajax({
            url:"libs/action.php",
            method:"POST",
            data:{loadcategory:'category'},
            success:function(data)
            {
                $('#category').html(data);
            }
        });
    }

    $(document).on('click', '.delete', function () {
        var id = $(this).attr('id');
        $.ajax({
            url:"libs/action.php",
            method:'POST',
            data:{deletecategory:'delete',id:id},
            success:function(data)
            {
                if (data) {
                    load_category();
                    $('#msg').html("Record Deleted Successfully !!");
                    $("#msg").fadeIn(4000).fadeOut(4000);
                }
            }
        });
    });
});
</script>
</html>