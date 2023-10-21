<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selectedOption"])) {
        $selectedOption = $_POST["selectedOption"];
        echo "<h1>You selected: $selectedOption</h1>";
    } else {
        echo "<h1>No option selected.</h1>";
    }
    ?>

</body>
</html>
