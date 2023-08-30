<?php
session_start();
if (isset($_POST["submit"])) {
    include('conn.php');
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM login WHERE Username='$username' and Password='$password'");
    
    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error_message = "Invalid UserName or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="log/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(log/images/bg.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form action="" method="post" class="signin-form">
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger"><?php echo $error_message; ?></div>
                        <?php } ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Login</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #fff">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                   
 
                </div>
            </div>
        </div>
    </div>
</section>
<script src="log/js/jquery.min.js"></script>
<script src="log/js/popper.js"></script>
<script src="log/js/bootstrap.min.js"></script>
<script src="log/js/main.js"></script>
</body>
</html>
