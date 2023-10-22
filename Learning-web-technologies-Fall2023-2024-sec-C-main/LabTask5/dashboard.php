<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    


<body>
    <table>
        <tr>
            <td><img src="a.jpg" height="80px" width="80px"></img>   
   
   </td>
   <td> &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
<td>&#160;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td>&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<td> <div class="top">

<?php
session_start();


if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "<p>Logged in as, $username!</p>";
  
} else {
    header("Location: login.php");
    exit();
}


?>

<p><a href="logout.php">Logout</a></p>

</div></td>
  


<table>
    <tr>
        <th>Account</th>
</tr>
<tr>
        <td><a href="#">Dashboard</td> </tr>
<tr> <td><a href="viewprofile.php">View Profile</td> </tr>
<tr>  <td><a href="editprofile.php">Edit Profile</td> </tr>
<tr>   <td><a href="change.php">Change Profile Picture</td> </tr>
<tr> <td><a href="logout.php">Logout<td> </tr>


       
    <center> <?php   echo "<h1>Welcome $username!</h1>";
      ?> </center>
   
       
</tr>
</table>


<br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br>

<footer><center>
        <p>Copyright @ 2017</p>
       <center>
    </footer>
</body>
</html>
