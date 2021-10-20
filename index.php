<?php
include("auth_session.php");
?>
<?php include 'header.php' ?>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['job'])) {
        $company_name=$_REQUEST['company_name'];
        $position=$_REQUEST['position'];
        $job_desc=$_REQUEST['job_desc'];
        $ctc=$_REQUEST['ctc'];
        $sql = "INSERT INTO `jobs`(`CompanyName`, `Position`, `JobDescription`, `CTC`) VALUES ('$company_name','$position','$job_desc','$ctc')";
        $result   = mysqli_query($conn, $sql);
        if ($result) {
        } else {
            echo "";
        }
    }
?>
        <!-- Page content -->
      <div class="content" id="content1">
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Post Job
          </button>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputCompanyName" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="exampleInputCompanyName" name="company_name">
              </div>
              <div class="mb-3">
                <label for="exampleInputPosition" class="form-label">Position</label>
                <input type="text" class="form-control" id="exampleInputPosition" name="position">
              </div>
              <div class="mb-3">
                <label for="exampleInputJobDescription" class="form-label">Job Description</label>
                <input type="text" class="form-control" id="exampleInputJobDescription" name="job_desc">
              </div>
              <div class="mb-3">
                <label for="exampleInputCTC" class="form-label">CTC</label>
                <input type="text" class="form-control" id="exampleInputCTC" name="ctc">
              </div>
              <button type="submit" class="btn btn-primary" name="job">Submit</button>
            </form>
          </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
              </tr>
            </thead>
            
            <?php
                    include('db.php');
                    $sql="SELECT `CompanyName`, `Position`, `CTC` FROM `jobs`";
                    $result=mysqli_query($conn,$sql);
                    $i=0;
                    if($result-> num_rows > 0)
                    {
                        while($rows = $result->fetch_assoc()){
                            echo"
                            <tbody>
                            <tr>
                                <td>".++$i."</td>
                                 <td>".$rows['CompanyName']."</td>
                                 <td>".$rows['Position']."</td>
                                 <td>".$rows['CTC']."</td>
                                 </tr>";
                        }
                    }
                    else{
                      echo"";
                    }
              ?>
            </tbody>
          </table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
