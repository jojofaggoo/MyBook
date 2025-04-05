<!DOCTYPE html><html>
<head>
<meta charset="utf-8">
<title>Create MySQL on Azure</title>
</head>
<body>
<?php 
//replace the user and password with your credentials
$host = "jfsecondserverfordropbox7.mysql.database.azure.net";
$user = "ljfague1";
$password = "Unity916";
$db = "visitordb";
// connect to the database
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $user, $password, $db,3306); 
$query = "CREATE TABLE visitor
(
visitorid INTEGER AUTO_INCREMENT,
visitorName VARCHAR(100) NOT NULL,
visitTime TIMESTAMP DEFAULT NOW(),
PRIMARY KEY(visitorid)
)";
if(mysqli_query($conn, $query)){
echo "<p>Table Created.</p>");
//close connection
mysqli_close($conn);
}
?>
</body>
</html>
