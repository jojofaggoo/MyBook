<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My PHP Website</title>
</head>
<body>
<h1>Welcome to the Cloud!</h1>
<form action = "" method ="post">
Your name:
<br>
<input type="text" name = "name" size="30" maxlength = "30">
<br>
<input type="submit" name = "submit" value="Submit">
<input type="submit" name = "view" value = "View All">
</form>
<?php
//replace the user and password with your credentials
/*
hostname=jfservercloudbook.mysql.database.azure.com
port=3306
username=faguelj1
password={your-password}
*/
$host = "jfservercloudbook.mysql.database.azure.com";
$user = "faguelj1";
$password = "Unity916";
$database = "visitordb";
// connect to the database
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $user, $password, $database);
if (isset($_POST['submit']))
{
$yourName=$_POST['name'];
//sql statement
$query = INSERT INTO visitor (visitorName) VALUES ('$yourName');
if(mysqli_query($conn, $query))
echo "<P>HI, $yourName, welcome to my cloud.</p>";
else
echo "<p>Hi, $yourName, please try again. </p>";
}
//if the View all button is clicked
if (isset($_POST['view']))
{
$display = "<h2>All Visitors </h2>";
while($row=mysqli_fetch_assoc($result)){
$display .="Name: ".$row["visitorName"]."<br>";
$display .="Date Time: " .$row["visitTime"]."<br>";
}}
echo $display;
}
//close connection 
mysqli_close($conn);
//https://jfcreatedatabase-fqb5ddbqeuh9e6ej.scm.centralus-01.azurewebsites.net/wwwroot/index.php
?>
</body>
</html>


