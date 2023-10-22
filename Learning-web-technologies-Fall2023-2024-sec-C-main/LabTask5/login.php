<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<a href="home.php">Home</a>

<a href="register.php">Registration</a></legend>

<a href="logout.php">Logout</a>
<fieldset>
<legend>   <h1>Login</h1></legend>
    <form action="process_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</fieldset>
</body>
</html>
