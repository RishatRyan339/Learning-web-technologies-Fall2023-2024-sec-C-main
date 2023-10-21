<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <fieldset>
        <legend><b><p>DATE OF BIRTH</p></b></legend>
      <?php  
        $dob= ''; 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dob"])) {
      
        $dob = $_POST["dob"];
    }
    ?>
        <input type="date" id="date" name="dob" value="<?php echo $dob; ?>"> 
        <hr>
        <input type="submit" name="submit" value="Submit">
        
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dob"])) {
        $dob = $_POST["dob"];
        echo "<h2>Your Dob is, $dob!</h2>";
    }
    ?>
    </fieldset>
</form>
</body>
</html>