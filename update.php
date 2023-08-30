
<?php
    require_once "conn.php";
    if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["birthday"]) && isset($_POST["gender"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["subject"])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $date = $_POST['birthday'];
        $gender = $_POST['gender'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
       
        if (isset($_FILES["image"])) {
            $image = basename($_FILES["image"]["name"]);
            $target_dir = "img/"; // Directory where images are stored
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Check if the file is an actual image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check === false) {
                echo "File is not an image.";
                exit;
            }
      
    
                // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        $sql = "UPDATE students SET 
        
            `first_name`= '$fname',
            `last_name`= '$lname', 
            `birthday`= '$date',
            `gender`= '$gender',
            `email`= '$mail',
            `phone`= '$phone',
            `subject`= '$subject',
            `image`= '$image'
             
              WHERE id= ".$_GET["id"];


       

        if(mysqli_query($conn, $sql)) {
            header("location: home.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>





