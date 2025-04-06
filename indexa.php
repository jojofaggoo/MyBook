<?php
//replace the user and password with your credentials
$host = "jfsecondserverfordropbox7.mysql.database.azure.com";
$user = "ljfague1";
$password = "Unity916";
$db = "visitordb";
// connect to the database
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $user, $password, $db);
$display = "<p>No visitors found.</p>";
// Initialize the display variable

if (isset($_POST['submit'])) {
$yourName = $_POST['name'];
//sql statement
$query = "INSERT INTO visitor (visitorName) VALUES ('$yourName')";
if (mysqli_query($conn, $query)) {
echo "<p>Hi, $yourName, welcome to my cloud.</p>";
} else {
echo "<p>Hi, $yourName, please try again. </p>";
}
}

//if the View all button is clicked
if (isset($_POST['view'])) {
$query = "SELECT * FROM visitor";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
$display = "<h2>All Visitors </h2>";
while ($row = mysqli_fetch_assoc($result)) {
$display .= "Name: " . $row["visitorName"] . "<br>";
$display .= "Date Time: " . $row["visitTime"] . "<br>";
}
} else {
$display .= "<p>No visitors found.</p>"; // Add a message if no visitors are found
}
}

echo $display;
//close connection 
mysqli_close($conn);
?>

