<?php
include ("connection.php");

if(isset($_POST['submits'])){
    $newpass = $_POST['password'];

    $sql = mysqli_query($conn, "UPDATE user SET Password = '$newpass' WHERE username = 'admin'");

    if ($sql){
        
        
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>VISTA | LOGIN</title>
<!-- <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"> -->
<link rel="stylesheet" href="./login-style.css">
    <style>
        .error {
            border-color: red;
        }
    </style>
</head>
<body>
<section class="login" id="login">
<p>SUCCESS! You will be redirected to the login page in <span id="countdown">5</span> seconds.</p>
<script>
function redirectCountdown() {
let seconds = 5; // Adjust the initial countdown value
const countdownElement = document.getElementById("countdown");
const intervalId = setInterval(function() {
seconds--;
countdownElement.textContent = seconds;
if (seconds === 0) {
clearInterval(intervalId);
window.location.href = "http://localhost/vista/login-page.php"; // Redirect URL
}
}, 1000); // Update countdown every second
}

redirectCountdown(); // Start the countdown
        </script> <?php
        
    } else {
        echo '<script>
                alert("An error occured whereas the developer will most likely not debug it.")
            </script>';
    }
}
?>
</section>
</body>
</html>