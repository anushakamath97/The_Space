<html>
<style type="text/css">
	#heading{	box-shadow:0px 5px 20px #ccccff;
				background-color:#00a3cc;	
				width:100%;}
	#heading1{		padding-top:20px;
				margin:0;	
				font-family:Cambria;
				font-size:40px;
					}
	#all
	{
		position: relative;
		top:50px;
	}
	#rows{
		position:relative;
		background-color: #e6faff;
		font-family:Andalus;
		opacity:0.8;
	}
	#sbm
	{
		position: absolute;
		top:115px;
		left:5.4em;
		height: 40px;
		width:80px;
		color:white;
		background-color: #007a99;
		font-size:1.2em;
	}
	#hicon
		{
			border-radius:50%;
			position:absolute;
			top:15px;
			right:25px;
			height:50px;
			width:50px;
		}
	#thead{	background-color:#00a3cc;
					color:white;
					font-size:2em;
					font-family:Constantia;}
		#trow:hover{	background-color:#00a3cc;}
</style>
<?php
			session_start();
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "akanksha";
		echo "<div id='heading'><h1 id='heading1'><center>ALL DISCUSSSIONS</center></h1></div><br><br><br><br><br><br>";
		echo "<a href='index.php'><img src='hicon.png' id='hicon'></a>";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
		} 
		if(isset($_SESSION['user']))
		{
			if($_SESSION['user']==true)
				{	$_SESSION['user']=false;
					echo "<script>newDisc()</script>";

				}
		}
		$sql = "SELECT noOfDisc FROM Users";
		$result = $conn->query($sql);
		
		$row = $result->fetch_assoc();
		
		$noOfDisc=$row['noOfDisc'];
		echo "<table style='width:100%;'><tr id='thead'><th>SELECT</th><th>TOPIC</th><th>AUTHOR</th><th>POSTED DATE</th><tr>";
		for($i=1;$i<$noOfDisc;$i++)
		{	$rqt="SELECT topic,userName,post_time FROM tab".$i;
			$result=$conn->query($rqt);
			$frow=$result->fetch_assoc();
			$tname=$frow['topic'];
			$uname=$frow['userName'];
			$time=$frow['post_time'];
			echo "<tr id='trow'><td id='rows'><center><form action=showdisc.php method=post><input type=radio name=d value=$i style='height:1.2em;width:1.2em;'></center></td><td id='rows'><center><b style='font-size:2em;'>".$tname."</center></b></td><td id='rows'><center><i style='color:grey;font-size:1.4em;'>".$uname."</center></td><td id='rows'><center>".$time."</i></center></td>";}
			echo "</table><input type=submit value=VIEW id=sbm></form>";
		$conn->close();
		?>
		</html>
		