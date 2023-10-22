<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
 
    setcookie("username", $username, time() + 3600, "/");
    setcookie("password", $password, time() + 3600, "/");
    setcookie("email", $email, time() + 3600, "/");
    setcookie("gender", $gender, time() + 3600, "/");
    setcookie("dob", $dob, time() + 3600, "/");



   


    header("Location: login.php");
    exit();
}
?>
