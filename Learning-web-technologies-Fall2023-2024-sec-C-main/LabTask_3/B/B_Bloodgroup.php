<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <fieldset>
            <legend><b><p>Degree</p></b></legend>
           
            <select id="bloodgrp" name="selectedOption">
                <option value="A+">A+</option>
                <option value="A-">A-</option> 
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>


              </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
          <?php  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selectedOption"])) {
        $selectedOption = $_POST["selectedOption"];
        echo "<h2>Your Gender is, $selectedOption!</h2>";
    }
    ?>
    
        </fieldset>
    </form>
</body>
</html>