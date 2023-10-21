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
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
        $name = $_POST["name"];
        echo "<h2>Hello, $name!</h2>";
    }
    ?>
        <input type="text" id="name" name="name">
        <hr>
        <input type="submit" name="submit" value="Submit">
        

    </fieldset>
</form>

</body>
</html>