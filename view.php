<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    </head>
<body>
<div class="container">
    <h2 align="center">View Page</h2>
<div class="row">
    <div class="col-11"></div>
    <div class="col-1">
<input type="button"  class="btn btn--radius-2 btn-dark" value="Back!" onclick="history.go(-1)">
</div>
</div>
    <div class="row">
        <div class="col-sm-12">
  <table class='table table-secondary'>
      <thead>
          <tr>
              
                    <th scope="col">Field</th>
                    <th scope="col">Value</th>
                    
          </tr>

      </thead>
</div>
</div>
</div>
      <?php
        require_once "conn.php";
         $query = "SELECT * FROM `students` WHERE id= ".$_GET['id'];
           $result = $conn->query($query);
 
         while ($row = mysqli_fetch_array($result)) {
             ?>
             <tr>
                <td>Id</td>
                 <td><?php echo $row['id'] ?></td>
                 </tr>
<tr>
    <td>Name</td>
                 <td><?php echo $row['first_name'] ?></td>
                 </tr>
<tr>
                 <td>Lname</td>
                 <td><?php echo $row['last_name'] ?></td> 
                 </tr>
<tr>
                <td>DOB</td>
                 <td><?php echo $row['birthday'] ?></td>
                 </tr>
<tr>
                <td>Gender</td>
                 <td><?php echo $row['gender'] ?></td>
                </tr>
<tr>
                <td>Email</td>
                 <td><?php echo $row["email"] ?></td>
                </tr>
<tr>
                <td>Phoneno</td>
                 <td><?php echo $row['phone'] ?></td>
                </tr>
<tr>
                <td>Department</td>
                 <td><?php echo $row['subject']?></td>
                
             </tr>
             <tr>
             <td>Image</td>
             <td><img width="10%" height="10%" src="img/<?php echo $row['image'] ?>"/></td>
         </tr>
        <?php
         }
      ?>
  </table>

  <a href="home.php" tite="add" class="btn btn-primary">Back</a>
</body>
</html>

