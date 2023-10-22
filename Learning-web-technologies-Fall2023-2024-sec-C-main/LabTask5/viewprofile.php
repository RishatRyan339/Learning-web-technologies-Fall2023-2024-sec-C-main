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

if (isset($_SESSION["dob"])) {
    $dob = $_SESSION["dob"];
    echo "<p>Date of Birth is: , $dob</p>";
  
}

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    echo "<p>Email: , $email</p>";
  
}

if (isset($_SESSION["dob"])) {
    $dob = $_SESSION["dob"];
    echo "<p>Date of Birth is: , $dob</p>";
  
}

   



?>

<p><a href="logout.php">Logout</a></p>

</div></td>
  


<table>
    <tr>
        <th>Account</th>
</tr>
<tr>
        <td><a href="dashboard.php">Dashboard</td> </tr>
<tr> <td><a href="viewprofile.php">View Profile</td> </tr>
<tr>  <td><a href="editprofile.php">Edit Profile</td> </tr>
<tr>   <td><a href="change.php">Change Profile Picture</td> </tr>
<tr> <td><a href="logout.php">Logout<td> </tr>


       
      
     
       
</tr>
</table>


<footer>
        <p>&copy; 2023 Your Website Name. All rights reserved.</p>
        <p>Contact: your@email.com</p>
    </footer>
</body>
</html>
