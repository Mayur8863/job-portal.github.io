<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Register</title>
    <style>
      *,body{
        margin: 0px;
        padding: 0px;
      }
      form
      {
        width: 40em;
        margin: auto;
        position: relative;
        top: 80px;
        /* padding-top: 20px; */
        margin-left: 245px;
        box-shadow: 12px 14px 9px grey;
      }
      .content::before{
           content: '';
           background: url('img/1.png') center/cover no-repeat ;
           position: absolute;
           z-index: -1;
           height: 800px;
           margin: auto;
           width: 100%;
       }
    </style>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        $name = stripslashes($_REQUEST['name']);
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $number=$_REQUEST['phone_no'];
        $sql = "INSERT INTO `users`( `name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
        $result   = mysqli_query($conn, $sql);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
  <div class="content">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone NO.</label>
    <input type="phone_no" class="form-control" id="exampleInputPassword1" name="phone_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" value="Register" class="btn btn-primary" name="submit">Submit</button>
  <div class="mb-3">
      <span>Already Registerd?</span>
    <a href="login.php">Log in</a>
  </div>
</form>
  </div>
  <?php
    }
?>
</body>
</html>