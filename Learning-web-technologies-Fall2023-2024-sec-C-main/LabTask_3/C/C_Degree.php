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
            <legend><b><p>Degree</p></b></legend>
            <?php  
        $choice= ''; 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["choice"])) {
      
        $choice = $_POST["choice"];
    }
    ?>
             
<input type="checkbox" value="SSC" name="choice" <?php if ($choice === 'SSC') echo 'checked'; ?>>
  <label>SSC</label>
<input type="checkbox" value="HSC" name="choice" <?php if ($choice === 'HSC') echo 'checked'; ?>>
  <label>HSC</label>
<input type="checkbox" value="BSc" name="choice"<?php if ($choice === 'BSc') echo 'checked'; ?>>
  <label>BSc</label>
<input type="checkbox" value="MSc" name="choice"<?php if ($choice === 'MSc') echo 'checked'; ?>>
<label>MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["choice"])) {
      
        echo "<h2>Hello, $choice!</h2>";
    }
    ?>
    
</body>
</html>