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
           
           
             <input type="radio" value="Male" name="choice">
  <label>Male</label>
  <input type="radio"value="Female" name="choice">
  <label>Female</label>
  <input type="radio" value="Other" name="choice">
  <label>Other</label>
            <hr>
            <input type="submit" name="submit" value="Submit">

         
            <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["choice"])) {
        $choice = $_POST["choice"];
        echo "<h2>Your Gender is, $choice!</h2>";
    }
    ?>
    
        </fieldset>
    </form>
</body>
</html>