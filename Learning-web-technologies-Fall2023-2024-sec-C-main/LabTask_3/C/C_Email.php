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
        <legend><b><p>Email</p></b></legend>
     
    <?php
    $email = ''; 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
           $email = $_POST["email"];
    }
    ?>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <hr>
        <input type="submit" name="submit" value="Submit">
        
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
        // If the form is submitted and the "name" field is set, display the name
        echo "<h2>Hello, $email!</h2>";
    }
    ?>
    </fieldset>
</form>

</body>
</html>