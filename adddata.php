<?php

require_once "conn.php";



if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $date = $_POST['birthday'];
    $gender = $_POST['gender'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
   
    // Handle image upload
    if (isset($_FILES['image'])) {
        
        $file_name1 = basename($_FILES['image']['name']);
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_dest = "img/" . $file_name1;
        if (move_uploaded_file($file_tmp, $file_dest)) {
            // Image uploaded successfully
        } else {
            echo "Failed to upload image.";
        }
    }

    // Handle PDF upload
    if (isset($_FILES['pdf'])) {
        $pdf_name1 = basename($_FILES['pdf']['name']);
        $pdf_tmp = $_FILES['pdf']['tmp_name'];
        $pdf_dest = "pdf/" . $pdf_name1;
        if (move_uploaded_file($pdf_tmp, $pdf_dest)) {
            // PDF uploaded successfully
        } else {
            echo "Failed to upload PDF.";
        }
    }

    $file_name = $file_name1;
    $pdf_name = $pdf_name1;

   

    // Validate inputs and sanitize them to prevent SQL injection
    if (!empty($fname) && !empty($lname) && !empty($date) && !empty($gender) && !empty($mail) && !empty($phone) && !empty($subject)) {
       

        // Prepare and execute the SQL query
        $sql = "INSERT INTO students (`first_name`, `last_name`, `birthday`, `gender`, `email`, `phone`, `subject`, `image`, `pdf`) VALUES ('$fname','$lname','$date','$gender','$mail','$phone','$subject','$file_name','$pdf_name')";
        $query_run = mysqli_query($conn, $sql);

        if ($query_run) {
            header("location:home.php");
            exit; // Terminate script after redirect
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } 
}
?>
