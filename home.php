<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reqister form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <style>
            .one{
                padding-top:20px;
            }
            </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2 one">
            <a href="login.php" tite="add" class="btn btn-success" data-toggle="tooltip" title="Add"><i style="font-size:24px" class="fa">&#xf067;</i></a>
            &nbsp&nbsp<a href="logout.php" tite="Logout" class="btn btn-danger">Logout</a></div></div>
</div>
    <section style="margin: 50px 0;">
    <div class="container">
            <table class="table table-primary text-center">
                <thead>
                  <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Image</th>
                    <th scope="col" colspan="3">Action<br>
                   <span class="glyphicon">&#x270f;</span>&nbsp
                   <i class="fa fa-trash-o" style="font-size:30px;color:black"></i>$nbsp
                   <i class="fa fa-eye" style="font-size:30px;color:blue"></i></th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM students ORDER BY id DESC";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
             
                                $id = $row['id'];
                                $Fname = $row['first_name'];     
                                $Dob = $row['birthday'];
                                $Gender = $row['gender'];
                                $Email = $row['email'];
                                $Image = $row['image'];
            

                    ?>
                    <?php 
                    
                    ?>
                    

                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $Fname; ?></td>    
                        <td><?php echo $Dob; ?></td>
                        <td><?php echo $Gender; ?></td>
                        <td><?php echo $Email; ?></td>
                        <td><img width="20%" height="18%" src="img/<?php echo $Image ?>"/></td>
                      
            
                        <td><a href="edit.php?id=<?php echo $id; ?>" data-toggle="tooltip" title="Edit"> <span class="glyphicon">&#x270f;</span></a></td>
                        <td><a href="deletedata.php?id=<?php echo $id; ?>"  onclick="myFunction()" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:30px;color:black"></i></a>

                        <script>
                        function myFunction() {
                        alert("Are sure you want to delete!");
                        }
                        </script></td>
                         <td><a href="view.php?id=<?php echo $id; ?>" data-toggle="tooltip" title="View"><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a></td>
                    </tr>
                    <?php
                            } 
                        } 


                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>

</html>


