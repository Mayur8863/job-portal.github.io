<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['save'])) {
        // $company_name = stripslashes($_REQUEST['company_name']);
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone_no=$_REQUEST['phone_no'];
        $position=$_REQUEST['position'];
        $qualification=$_REQUEST['qualification'];
        // $sql = "INSERT INTO `users`( `name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
        $sql = "INSERT INTO `students`(`name`, `email`, `phone_no`, `position`, `qualification`) VALUES ('$name','$email','$phone_no','$position','$qualification')";
        $result   = mysqli_query($conn, $sql);
        if ($result) {
            echo "
                  <!-- <h3>Details successfully.</h3><br/> -->
                  ";
        } else {
            echo "";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        /* content  */
        .content::before {
            content: '';
            background: url('img/1.png') center/cover no-repeat;
            position: absolute;
            z-index: -1;
            height: 800px;
            margin: auto;
            width: 100%;
        }

        .card {
            width: 500px;
            margin: 0px 300px;
            margin-top: 30px;
            padding: 12px 0px;
            background-color: #c2c2db;
        }

        .card-body {
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career.php"> Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"> Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"> Log out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php"> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="content">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
                    include('db.php');
                    $sql="SELECT `CompanyName`, `Position`,`JobDescription`, `CTC` FROM `jobs`";
                    $result=mysqli_query($conn,$sql);
                    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    // $i=0;
                    if($result-> num_rows > 0)
                    {
                        while($rows = $result->fetch_assoc()){
                            echo ' 
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                        <h5 class="card-title">'.$rows['Position'].'</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">'.$rows['CompanyName'].'</h6>
                                        <p class="card-text">'.$rows['JobDescription'].'</p>
                                        <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    APPLY
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apply</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                  <label for="exampleInputName" class="form-label">Name</label>
                                                  <input type="text" class="form-control" id="exampleInputName" name="name">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword1" class="form-label">Phone NO.</label>
                                                  <input type="phone_no" class="form-control" id="exampleInputPassword1" name="phone_no">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword1" class="form-label">Position</label>
                                                  <input type="text" class="form-control" id="exampleInputPassword1" name="position">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword2" class="form-label">Qualification</label>
                                                  <input type="text" class="form-control" id="exampleInputPassword2" name="qualification">
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="save">Submit</button>
                                            </form>      
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name = "save">Save changes</button>
                                        </div> -->
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            else{
                echo"";
            }
            ?>    
                                                       
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>