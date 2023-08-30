<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>List Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
       .error {color: #FF0000;}
        </style>
</head>

<body>


<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $birthErr = $genderErr = $emailErr = $phoneErr = $subjectErr = $imageErr = $cvErr = "";
$fname = $lname = $birthday = $gender = $email = $phone = $subject = $image = $pdf = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["lname"])) {
    $lnameErr = "";
  } else {
    $lname = test_input($_POST["lname"]);
  }
  
  if (empty($_POST["birthday"])) {
    $birthErr = "Birthday i srequired";
  } else {
    $birthday = test_input($_POST["birthday"]);
  }

  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["image"])) {
    $imageErr = "Image is required";
  } else {
    $image = test_input($_POST["image"]);
  }

  
  if (empty($_POST["pdf"])) {
    $cvErr = "";
  } else {
    $pdf = test_input($_POST["pdf"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <h1 style="text-align: center;margin: 50px 0;">Create Data</h1>
        <div class="wrapper wrapper--w680">
        
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="adddata.php"  method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name<span class="error">* <?php echo $fnameErr;?></span></label>
                                    <input class="input--style-4" type="text" name="first_name" required>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name<span class="error"><?php echo $lnameErr;?></span></label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday<span class="error">* <?php echo $birthErr;?></span></label>
                                    <div class="input-group-icon">
                                        <input  type="date" name="birthday" required>
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender<span class="error">*<?php echo $genderErr;?></span></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email<span class="error">*<?php echo $emailErr;?></label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number<span class="error">*<?php echo $phoneErr;?></label>
                                    <input class="input--style-4" type="text" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                </div>
                            </div>
                        </div>

        
                        <div class="input-group">
                            <label class="label">Subject<span class="error"><?php echo $subjectErr;?></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>BCA</option>
                                    <option>BBA</option>
                                    <option>BCOM</option>
                                    <option>MCA</option>
                                    <option>BSC</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
<div class="row">
    <div class="col-2">
    <div class="input-group">
    <label class="text-info">Image Upload:<span class="error">*<?php echo $imageErr;?></label><br>
            <input type="file" name="image" id="FilUploader" class="form-control" required><br>
</div>
</div>
<div class="col-2">
<div class="input-group">
            <label class="text-info">Upload cv:<span class="error"><?php echo $imageErr;?></label><br>
            <input type="file" name="pdf" id="FilUploader1" class="form-control"><br>
</div>
</div>
</div>


              
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $("#FilUploader").change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
            }
        });

        $("#FilUploader1").change(function () {
            var fileExtension = ['pdf','docx'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
            }
        });

       
    </script>
                        <div class="p-t-15">
                            <div class="row">
                                <div class="col-2">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button></div>
                            <div class="col-2"><input type="button"  class="btn btn-dark btn--radius-2" value="Back!" onclick="history.go(-1)"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->