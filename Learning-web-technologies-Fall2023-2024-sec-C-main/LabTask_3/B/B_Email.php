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
        <legend><b><p>NAME</p></b></legend>
       
        <input type="email" id="email" name="email">
        <hr>
        <input type="submit" name="submit" value="Submit">
        
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
        $email = $_POST["email"];
        echo "<h2>Your Email is, $email!</h2>";
    }
    ?>
    </fieldset>
</form>

</body>
</html>