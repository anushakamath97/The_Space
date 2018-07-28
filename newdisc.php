<?php
		session_start();
		$useremail=$_SESSION['userlogin'];
			
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "akanksha";
				
			echo "<body style='background-color:#e6fff2';>";
			// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "SELECT noOfDisc FROM Users";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
				// output data of each row
				$row = $result->fetch_assoc();
				$disc=$row['noOfDisc']+1;

			// sql to create table
			$tablename="tab".$disc;
			$sql = "CREATE TABLE ".$tablename."( userName VARCHAR(50) NOT NULL,topic VARCHAR(30),content VARCHAR(10000),post_time TIMESTAMP
				)";

	if (mysqli_query($conn, $sql)) 
		{
	$content=$_POST['content'];
	$topic=$_POST['topic'];
    $sql1 ="INSERT INTO ".$tablename." (userName,topic,content,post_time) 
VALUES ('$useremail','$topic','$content',date('d/m/Y'))";
	if (mysqli_query($conn, $sql1)) 
		{
			$sql2 = "UPDATE Users SET noOfDisc=$disc";
		mysqli_query($conn, $sql2);
	}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
	<head>
	<style>
		body
{
	background-color:#e6fff2;
}
		#heading{	box-shadow:0px 5px 20px #ccccff;
					background-color:#00a3cc;
					position:fixed;
					top:0px;
					width:100%;}
		#newdiscussion{	position:relative;
						top:6em;
						font-size:1em;
						font-family:Comic Sans MS;}
		#backlink{	text-decoration:none;
					font-size:3em;
					position:absolute;
					bottom:1em;
					right:1em;
					color:#00a3cc;
				}
		#hicon
		{
			border-radius:50%;
			position:absolute;
			top:1em;
			right:1em;
			height:50px;
			width:50px;
		}
		
	</style>
	</head>
	</head>
	<body>
		<div id="heading">
	<h1>&nbspDiscussion Forum</h1></div>
	<a href="index.php"><img src="hicon.png" id="hicon"></a>
	<a href="forumn.php" id="backlink">Back</a>
	</body>
	</div>
	<?php
		echo "<div id='newdiscussion'><center><h1>".$_POST['topic']."</h1></center><p style='font-size:1.5em;'>".$_POST['content']."</p></div>";
	?>
	<a href="forumn.php" id="backlink">Back</a>
</html>