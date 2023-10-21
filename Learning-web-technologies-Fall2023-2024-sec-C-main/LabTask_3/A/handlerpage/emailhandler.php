<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
        $email = $_POST["email"];
        echo "<h1>Hello, $email!</h1>";
    } else {
        echo "<h1>No email address submitted.</h1>";
    }
    ?>

</body>
</html>
