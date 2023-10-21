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
            <?php  
        $selectedOption= ''; 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selectedOption"])) {
      
        $selectedOption = $_POST["selectedOption"];
    }
    ?>
            <select id="selectedOption" name="selectedOption" value=" <?php echo $selectedOption; ?>">
            <option value="A+" <?php if ($selectedOption === 'A+') echo 'selected'; ?>>A+</option>
            <option value="B+" <?php if ($selectedOption === 'B+') echo 'selected'; ?>>B+</option>
            <option value="O+" <?php if ($selectedOption === 'O+') echo 'selected'; ?>>O+</option>
            <option value="AB+" <?php if ($selectedOption === 'AB+') echo 'selected'; ?>>AB+</option>
            <option value="A-" <?php if ($selectedOption=== 'A-') echo 'selected'; ?>>A-</option>
            <option value="B-" <?php if ($selectedOption === 'B-') echo 'selected'; ?>>B-</option>
            <option value="O-" <?php if ($selectedOption === 'O-') echo 'selected'; ?>>O-</option>
            <option value="AB-" <?php if ($selectedOption === 'AB-') echo 'selected'; ?>>AB-</option>


              </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
          <?php    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selectedOption"])) {
        $selectedOption = $_POST["selectedOption"];
        echo "<h2>Your Blood Group is, $selectedOption!</h2>";
    }
    ?>
   
    
        </fieldset>
    </form>
</body>
</html>