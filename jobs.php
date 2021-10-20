<?php include 'header.php' ?>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['job'])) {
        // $company_name = stripslashes($_REQUEST['company_name']);
        $company_name=$_REQUEST['company_name'];
        $position=$_REQUEST['position'];
        $job_desc=$_REQUEST['job_desc'];
        $ctc=$_REQUEST['ctc'];
        // $sql = "INSERT INTO `users`( `name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
        $sql = "INSERT INTO `jobs`(`CompanyName`, `Position`, `JobDescription`, `CTC`) VALUES ('$company_name','$position','$job_desc','$ctc')";
        $result   = mysqli_query($conn, $sql);
        if ($result) {
            // echo "<div class='content1'>
            //       <h3>Details successfully.</h3><br/>
            //       ";
        } else {
            echo "";
        }
    }
?>
<div class="content" id="content1">
<table class="table" >
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Position</th>
                <th scope="col">Qualification</th>
              </tr>
            </thead>
            
              <?php
                    // $sql="Select cname,position,CTC from jobs";
                    $sql="SELECT `name`, `email`, `phone_no`, `position`, `qualification` FROM `students`";
                    $result=mysqli_query($conn,$sql);
                    $i=0;
                    if($result-> num_rows > 0)
                    {
                        while($rows = $result->fetch_assoc()){
                            echo"<tbody>
                                <tr>
                                <td>".++$i."</td>
                                 <td>".$rows['name']."</td>
                                 <td>".$rows['email']."</td>
                                 <td>".$rows['phone_no']."</td>
                                 <td>".$rows['position']."</td>
                                 <td>".$rows['qualification']."</td
                                 </tr>";
                        }
                    }
              ?>
            </tbody>
          </table>
      </div>
</div>
