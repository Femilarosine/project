
<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){
        //  print_r($_POST);
         // print_r($_FILES['file']);
        //   exit();
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $date = $_POST['birthday'];
        $genders = $_POST['gender'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];


        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            
            if(empty($errors)==true) {
               move_uploaded_file($file_tmp,"img/".$file_name);
            }else{
               echo ($errors);
            }
         }
      
      
      $temp = explode(".", $_FILES["pdf"]["name"]);
      $extension = end($temp);
      if (($_FILES["pdf"]["type"] == "application/pdf")
      || ($_FILES["pdf"]["type"] == "application/doc")
      && ($_FILES["pdf"]["size"] < 200000)
      && in_array($extension, $allowedExts))
        {
        if ($_FILES["pdf"]["error"] > 0)
          {
          echo "Return Code: " . $_FILES["pdf"]["error"] . "<br>";
          }
        else
          {
          echo "Upload: " . $_FILES["pdf"]["name"] . "<br>";
          echo "Type: " . $_FILES["pdf"]["type"] . "<br>";
          echo "Size: " . ($_FILES["pdf"]["size"] / 1024) . " kB<br>";
          echo "Temp file: " . $_FILES["pdf"]["tmp_name"] . "<br>";
      
          if (file_exists("img/" . $_FILES["pdf"]["name"]))
            {
            echo $_FILES["pdf"]["name"] . " already exists. ";
            }
          else
            {
            move_uploaded_file($_FILES["pdf"]["tmp_name"],
            "img/" . $_FILES["pdf"]["name"]);
        echo "Stored in: " . "img/" . $_FILES["pdf"]["name"];
            }
          }
        }
   

        if($fname != "" && $lname != "" && $date != "" && $genders != "" && $mail != "" && $phone !="" && $subject !="" && $file_name !="" && $temp !=""){
               move_uploaded_file($file_tmp,"img/".$file_name);
            $sql = "INSERT INTO students (`first_name`, `last_name`, `birthday`, `gender`, `email`, `phone`, `subject`,`image`,`pdf`) VALUES ('$fname','$lname','$date','$genders','$mail','$phone','$subject','$file_name','$temp')";
            $query_run = mysqli_query($conn, $sql);
            if ($query_run) {
                header("location: home.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Age and DOB cannot be empty!";
        }
    }

?>
