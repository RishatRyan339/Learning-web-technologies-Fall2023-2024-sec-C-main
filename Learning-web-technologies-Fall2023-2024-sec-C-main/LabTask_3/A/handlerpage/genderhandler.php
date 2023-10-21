<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["choice"])) {
        $choice = $_POST["choice"];
        echo "<h1>The Degree is, $choice!</h1>";
    } else {
        echo "<h1>Wrong</h1>";
    }

   

    ?>

</body>
</html>
