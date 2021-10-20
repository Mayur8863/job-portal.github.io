<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   
    <title>Dashboard</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .sidebar {
            margin-top: 66px;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
            }

            /* Sidebar links */
            .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            }

            /* Active/current link */
            .sidebar a.active {
            background-color: #04AA6D;
            color: white;
            }

            /* Links on mouse-over */
            .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
            }

            /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
            div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
            }

            /* On screens that are less than 700px wide, make the sidebar into a topbar */
            @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                margin-top: 0px;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
            }

            /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
            @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
            }

            /* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  position: fixed;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #04AA6D;
}
.content1{
          text-align: center;
          justify-content: center;
       }

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 700px) {
  .navbar a {
    float: none;
    display: none;
  }
}
/* content  */
  #content1{
  
    padding-top: 80px;
    margin-left: 195px;
  }
    </style>
</head>
<body>
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="navbar">
          <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
          <a href="career.php"> Career</a>
          <a href="jobs.php">Candidates Applied</a>
          <a href="register.php"> Register</a>
          <a href="login.php"> Log In</a>
          <a href="logout.php"> Log OUT</a>
        </div>

        <!-- The sidebar -->
        <div class="sidebar">
          <a class="active" href="index.php">Home</a>
          <a href="career.php"> Career</a>
          <a href="login.php"> Log In</a>
          <a href="logout.php"> Log OUT</a>
          <a href="register.php"> Register</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
        </div>