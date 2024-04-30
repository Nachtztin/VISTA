<?php
include("connection.php");
session_start();

  if (isset($_SESSION['error_pass'])){
    ?><script>
      alert ("<?php echo $_SESSION['error_pass']; ?>");
    </script><?php
    unset($_SESSION['error_pass']);
  }
  if (isset($_SESSION['error_user'])){
    ?><script>
      alert ("<?php echo $_SESSION['error_user']; ?>");
    </script><?php
    unset($_SESSION['error_user']);
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VISTA | LOGIN</title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"> -->
  <link rel="stylesheet" href="./login-style.css">

</head>
<body>
  <!-- partial:index.partial.html -->
  <section class='login' id='login'>
    <div class='head'>
      <h1 class='company'>VISTA</h1>
    </div>
    <p class='msg'>Ad Astra Abyssosque!</p>
    <div class='form'>
      <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <input type="text" placeholder='Username' class='text' id='username' name='username' required><br>
        <input type="password" placeholder='••••••••••••••' class='password' name='password' required><br>

        <!-- <a href="#" class='btn-login' id='do-login'>Login</a> -->
        <input type="submit" class="btn-login" id="do-login" value="Login" name="submit"/>
        <a href="forgot.php" class='forgot'>Forgot?</a>

      </form>
    </div>

    <script>
      function isvalid(){
        var user = document.form.username.value;
        var pass = document.form.password.value;

        // if(user.length=="" && pass.length==""){
        //   alert("Username and password field empty.");
        //   return false
        // } else {
        //   if(user.length==""){
        //   alert("Username field empty.");
        //   return false
        //   }

        //   if(pass.length==""){
        //   alert("Username field empty.");
        //   return false
        //   }
        // }


        // if(user.length== 0 && pass.length== 0){
        //   alert("Username and password fields cannot be empty.");
        //   return false;
        // }

        // var xhr = new XMLHttpRequest();
        // xhr.open("POST", "verify_login.php", true);
        // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // xhr.onreadystatechange = function() {
        //   if (xhr.readyState == 4 && xhr.status == 200) {
        //     var response = xhr.responseText;
        //     if(response == "success"){
        //       // Login successful
        //       return true;
        //     } else {
        //       // Login failed
        //       alert("Incorrect username or password.");
        //       return false;
        //     }
        //   }
        // };
        // xhr.send("username=" + encodeURIComponent(user) + "&password=" + encodeURIComponent(pass));
        // return false; // Prevent form submission until AJAX response is received
      }
    </script>
  </section>

  <!-- <footer>
    <p>Basta footer <span class='heart'>&hearts;</span></p>
  </footer>
    <script  src="./script.js"></script> -->

</body>
</html>
