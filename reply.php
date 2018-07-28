<?php
session_start();
$useremail=$_SESSION['userlogin'];
			
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
			$tbname="tab".$_SESSION['tname'];
			$content=$_POST['reply'];
			 $sql1 ="INSERT INTO ".$tbname." (userName,topic,content,post_time) 
VALUES ('$useremail','','$content',date('d/m/Y'))";
			if (mysqli_query($conn, $sql1)) {
   			header('Location:showdisc.php#a');
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
?>