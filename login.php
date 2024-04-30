<?php
    include("connection.php");
    session_start();
    // if(isset($_POST['submit'])){
    //     $user = $_POST['username'];
    //     $pass = $_POST['password'];
        
    //     $sql = "select * from user where username = '$user' and password = '$pass'";
    //     $result = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //     $count = mysqli_num_rows($result);

    //     if($count==1){
            
    //         header("Location:vista.php?username=" . urlencode($user));
    //     } else {
    //         echo '<script>
    //                 window.location.href = "login-page.php";
    //                 alert("Login failed. Invalid username or password!")
    //             </script>';
    //     }
    // }

    if(isset($_POST['submit'])){
      $username= $_POST['username'];
      $password= $_POST['password'];
      
      $query = mysqli_query($conn, "select * from user where username = '$username'");
      $no = mysqli_num_rows($query);
        
      if($no>0){
        $data = mysqli_fetch_assoc($query);
        $dbPassword = $data['password'] ?? null;
        
        $myArray = [];
        $data = "key_name";  // Assuming $data contains a string key
        $myArray[$data] = "$password";

        $queryp = mysqli_query($conn, "SELECT * FROM user WHERE password = '$password'");
        if(mysqli_num_rows($queryp)==1){
          header("Location:vista.php?username=" . urlencode($username));
        } else {
          $_SESSION['error_pass'] = 'Incorrect password!';
          header("Location: login-page.php");
          exit();
        }

        // if(isset($data['password']) && $data['password'] == $password){ // isset($data['password']) always sets to bool(false)
        // // if($data['password'] == $password){ // Causes undefined array key "password"
        // // if ($dbPassword == $password) { // $dbPassword always is NULL
        //     header("Location:vista.php?username=" . urlencode($user));
        // } else {
        //     echo "Wrong password";
        // }
        
      } else {
        $_SESSION['error_user'] = 'Incorrect username!';
        header("Location: login-page.php");
        exit();
      }
    }