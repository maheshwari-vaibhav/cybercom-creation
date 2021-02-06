<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Webapp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contacts.php"><i class="fas fa-address-book"></i> Contacts</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Read Contacts</h3>
                <hr>
                <a href="create.php" class="btn btn-success">Create Contact</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>CreatedAt</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>John</td>
                        <td>John</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>

                        </td>

                      </tr>
                    </tbody>
                  </table>
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
</html>