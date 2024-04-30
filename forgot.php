<?php
include("connection.php");
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
    <section class='login' id='login'>
        <div class='head'>
            <h1 class='company'>asta la VISTA</h1>
        </div>
        <p class='msg'>Ad Astra Abyssosque!</p>
        <div class='form'>
            <form name="form" method="POST">
                <label for="question1">How to use fire extinguisher?</label><br>
                <input type="text" placeholder='Answer' class='text' id='question1' name='question1' onkeyup="isValid(this.value)" required>
                <br><br>

                <label for="question2">Roses are:</label><br>
                <input type="text" placeholder='Answer' class='text' id='question2' name='question2' onkeyup="isValid(this.value)" required>
                <br><br>
                
                <label for="question3">Yes no?</label><br>
                <input type="text" placeholder='Answer' class='text' id='question3' name='question3' onkeyup="isValid(this.value)" required>
                <br><br>

                <label for="question3">Username</label><br>
                <input type="text" placeholder='Answer' class='text' id='username' name='username' onkeyup="isValid(this.value)" required>
                <br><br>

                <!-- <a href="#" class='btn-login' id='do-login'>Login</a> -->
                <input type="submit" class="btn-login" id="do-login" value="Check" name="submit"/><br><br>
            </form>
            <script>
            function isvalid(inputElement){
                const correctAnswers = {
                    question1: "PASS",
                    question2: "red",
                    question3: "yes"
                };

                const inputName = inputElement.name;

                const userInput = inputElement.value.trim();

                if (userInput === correctAnswers[inputName]){
                    inputElement.classList.remove("error");
                } else {
                    inputElement.classList.add("error");
                    alert("wrong");
                }

                // if (q1.trim() === "death"){
                //     q1.textContent = "Please enter the correct answer.";
                // }

                // const errorMessage = document.getElementById("error-message");
                // if (answer.trim() === "death") {
                //     errorMessage.textContent = "Please enter an answer.";
                //     return false; // Prevent form submission if answer is empty
                //      document.querySelector("button[type='submit']").disabled = true;
                //    document.querySelector("button[type='password']").disabled = true;
                // } else {
                //     errorMessage.textContent = ""; // Clear any previous error message
                //     return true;  // Allow form submission if answer is not empty
                //      document.querySelector("button[type='submit']").disabled = false;
                //      document.querySelector("button[type='password']").disabled = false;
                // }
            } </script>
            <?php
                if(isset($_POST["submit"])){
                    $q1 = $_POST['question1'];
                    $q2 = $_POST['question2'];
                    $q3 = $_POST['question3'];
                    $user = $_POST['username'];

                    if ($q1=="PASS" && $q2 == "blue" && $q3=="or" && $user == "admin"){
                        ?><script>
                            const inputElement = document.getElementById("question1");
                            inputElement.value = "PASS";
                            const inputElement1 = document.getElementById("question2");
                            inputElement1.value = "blue";
                            const inputElement2 = document.getElementById("question3");
                            inputElement2.value = "or";
                            const inputElement3 = document.getElementById("username");
                            inputElement3.value = "admin";
                        </script>

                        <p class="msg">Create New Password</p>

                        <form name="form" action="changepw.php" method="POST">
                            <input type="password" placeholder='••••••••••••••' class='password' name='password' required>
                            <input type="submit" class="btn-login" id="do-login" value="Submit" name="submits"/>
                        </form>

                        <?php
                    }else{
                        ?><script>alert ("Incorrect")</script><?php
                    }
                }
            ?>
        </div>
    </section>   
</body>
</html>