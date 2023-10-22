<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
<a href="home.php">Home</a>



<a href="login.php">Login</a>
<fieldset>
    <legend><h1>Registration</h1></legend>
    
    <form action="process_registration.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <fieldset>
        <legend>
        <label for="gender">Gender:</legend></label>
        <input type="radio" id="male" name="gender" value="male"> Male
        <input type="radio" id="female" name="gender" value="female"> Female
        <input type="radio" id="other" name="gender" value="other"> Other

<legend></fieldset>
<legend><fieldset>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        </legend></fieldset>

        <input type="submit" value="Register">   <input type="reset" value="Reset">
    
    </form>
    </fieldset>
</body>
</html>
