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
       
        <input type="date" id="date" name="date"> 
        <hr>
        <input type="submit" name="submit" value="Submit">
        
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["date"])) {
        $date = $_POST["date"];
        echo "<h2>Your Dob is, $date!</h2>";
    }
    ?>
    </fieldset>
</form>
</body>
</html>