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
           
             
<input type="checkbox" value="SSC" name="choice">
  <label>SSC</label>
<input type="checkbox" value="HSC" name="choice" >
  <label>HSC</label>
<input type="checkbox" value="BSc" name="choice">
  <label>BSc</label>
<input type="checkbox" value="MSc" name="choice">
<label>MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
  <?php  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["choice"])) {
        $choice = $_POST["choice"];
        echo "<h2>Your SSC is, $choice!</h2>";
    }
    ?>
    
</body>
</html>