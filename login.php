<?php
   include("db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE email= '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: index.php");
      }else {
        //  $error = "Your Login Name or Password is invalid";
        echo "<div class='content1'>
                  <h3>Invalid Id or Password</h3><br/>
                  <p class='link' >Click here to <a href='login.php' >Log In</a> again.</p>
                  </div>";
      }
   }
?>
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
        width: 35em;
        margin: auto;
        position: relative;
        top: 200px;
        /* padding-top: 200px; */
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
       .content1{
          text-align: center;
          justify-content: center;
       }
    </style>
</head>
<body>
<!-- <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['name'])) {
      // $name = stripslashes($_POST['name']);
      // $name=$_POST['name'];
      $email=$_POST['email'];
        $password=$_POST['password'];
      $query ="SELECT id FROM users WHERE email='$email' AND password='$password'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?> -->
  <div class="content">
  <form method="post">
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" >
  </div>
  <button name="submit" type="submit" value="Login" class="btn btn-primary">Submit</button>
  <div class="mb-3">
      <span>New User?</span>
    <a href="register.php">Register</a>
  </div>
</form>
  </div>
</body>
</html>