<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akanksha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
extract($_POST);
$dob=$birth_day.'/'.$birth_month.'/'.$birth_year;
$sql ="INSERT INTO Users (firstName,lastName,password,age,email,gender,dob) 
VALUES ('$fname','$lname','$pswd','$age','$email','$gender','$dob')";

if (mysqli_query($conn, $sql)) {
     header('Location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>