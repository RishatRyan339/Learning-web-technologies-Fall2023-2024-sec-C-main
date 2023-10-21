<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["name"])) {
        $name = $_POST["name"];
        echo "<h1>Hello, $name!</h1>";
    } else {
        echo "<h1>No name submitted.</h1>";
    }
    ?>

</body>
</html>
