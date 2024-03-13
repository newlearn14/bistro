<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/login-style.css">
    <title>register</title>
</head>

<body>

    <div class="container">
        <div class="box">


            <!-------------------- Register --------------------------->

            <div class="box-login" id="register">

                <div class="top-header">
                    <h3>Sign Up, Now</h3>
                    <small>We are happy to have you with us.</small>
                </div>
                <form method="post">
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="regUser" name="uname" required>
                            <label for="regUser">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input-box" id="regEmail" name="email" required>
                            <label for="regEmail">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="regPassword" name="password" required>
                            <label for="regPassword">Password</label>
                            <div class="eye-area">
                                <div class="eye-box" onclick="myRegPassword()">
                                    <i class="fa-regular fa-eye" id="eye-2"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck-2" class="check">
                            <label for="formCheck-2"> Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="input-submit" name="submit" value="Sign Up">
                        </div>

                        <div class="forgot">
                            <p> you have account <span><u><a style="color: blue; " href="login.php">Sign In</a></u></span></p>

                        </div>


                    </div>
                </form>
            </div>

            <!------------------------ Switch -------------------------->

        </div>
    </div>
    <script>
        function myRegPassword() {

            var d = document.getElementById('regPassword');
            var b = document.getElementById("eye-2");
            var c = document.getElementById("eye-slash-2");

            if (d.type === "password") {
                d.type = "text"
                b.style.opacity = "0";
                c.style.opacity = "1";

            } else {
                d.type = "password"
                b.style.opacity = "1";
                c.style.opacity = "0";

            }

        }
    </script>
</body>

</html>


<?php
include 'conntect.php';
if (isset($_POST['book now'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber '];

    $sql = "INSERT INTO `user`( `uname`, `email`,  `phonenumber`) 
  VALUES ('$uname','$email','$phonenumber')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<div class="alert alert-success" role="alert"> This is a success </div>';
        header('location:login.php');
    } else {
        die(mysqli_error($con));
    }
}

?>