<html>
<script>
</script>
</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akanksha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['fname']) and isset($_POST['pswd'])){
$mail=$_POST['fname'];
$password=$_POST['pswd'];}

$sql = "SELECT firstName, password, email FROM Users WHERE email='$mail' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		if($row["email"]==$mail && $row["password"]==$password)
		{	$_SESSION['userlogin']=$row["firstName"];
			header("Location: index.php");}
	}
} else {
   }?>
   <script>alert("---INVALID USERNAME / PASSWORD---");location.replace("login.php#log");</script>
	
<?php
$conn->close();
?>