<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["date"])) {
        $date = $_POST["date"];
        echo "<h1>The Chosen Date is, $date!</h1>";
    } else {
        echo "<h1>No email address submitted.</h1>";
    }
    ?>

</body>
</html>
