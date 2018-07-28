<!DOCTYPE html>
<html>
	<head>
		<style>
		#heading{	box-shadow:0px 5px 20px #ccccff;
					background-color:#00a3cc;
					position:fixed;
					width:100%;}
		h1{			padding-top:20px;
					margin:0;
					font-family:Cambria;
					font-size:50px;
					}
		#options{	position:relative;
					/*top:10px;*/
					font-family:Calibri;
					font-size:30px;}
		#search{	position:relative;
					top:8em;
				}
		#searchBt{	position:relative;
					top:4.3em;
					left:35%;}
		div.opt{	display:inline;
					margin:20px;
					position:relative;
					left:32em;
					padding:5px;}
		a.alldisc{	text-decoration:none;
			}
		#new{	position:absolute;
				top:4.8em;
				left:0.8em;
				border:solid black 1px;
				background-color:#ffe6ff;
				font-size:0.8em;
				cursor:pointer;}
		#newPost{	margin:auto;
					position:relative;
					
					
					left:-5em;}
		#postBt{		position:absolute;
					top:7em;
					left:60em;
					font-size:1.2em;
					color:white;
					border:solid black 1px;
					background-color:#408000;}
		#title{	font-size: 2em;
				font-style: bold;
				position:relative;
				top:-5em;
				left:12.3em;
				}
		#sbm
		{
		position: absolute;
		top:15em;
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
			position:relative;
			top:15px;
			float: right;
			height:50px;
			width:50px;
		}
		#rows{
		position:relative;
		background-color: #e6faff;
		opacity:0.8;
		font-family:Andalus;
	}
	#tbhead{	font-size:2em;
				color:white;
				background-color:#0099ff;
				font-family:Constantia;
				}
	#trow:hover{	background-color:#0099ff;}
	</style>
	</head>
	<body>
	<div id="heading">
	<h1>&nbsp Discussion Forum</h1>
	</div>
	<a href="index.php"><img src="hicon.png" id="hicon"></a>
	
	<!--<center><div id="search"><input type="text" placeholder="Enter the topic" style="width:40em;height:2em;font-size:20px;"></input></div>
	<input type="button" value="Search" style="width:4em;height:2em;font-size:20px;" id="searchBt"></input></center>-->
	<div id="options"><br><br><br>
		<div class="opt"><a class="alldisc" href='alldisc.php'>Check out other topics</a></div><br><br><br>
		<form action="ifuser.php">
		<input type="submit" value="+ New Question" onclick="newDisc()" id="new"/>
		</form>
	</div>
	<script>
		function newDisc()
		{			
			var maindiv=document.createElement("form");
			maindiv.setAttribute("id","newPost");
			maindiv.setAttribute('action','newdisc(1).php');
			maindiv.setAttribute('method','POST');
			var title=document.createElement('input');
			title.setAttribute('type','text');
			title.setAttribute('placeholder','Enter the topic');
			title.setAttribute('name','topic');
			title.setAttribute('id','title');
			var txt=document.createElement("textarea");
			txt.setAttribute("rows","8");
			txt.setAttribute("cols","100");
			txt.setAttribute('name','content');
			var post=document.createElement("input");
			post.setAttribute("type","submit");
			post.setAttribute("value","Post Discussion");
			post.setAttribute("id","postBt");
			maindiv.appendChild(title);
			maindiv.appendChild(txt);
			maindiv.appendChild(post);
			var topDisc=document.getElementById("top");
			document.body.appendChild(maindiv);
			document.body.insertBefore(maindiv,topDisc);}
	</script>
	<div id="top">
	<center><h1 id="lat">Latest Discussions</h3></center>
		<?php
			error_reporting(0);
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
		
		echo "<form action=showdisc.php method=post><br><input type=submit value=VIEW id='sbm'>";
		$noOfDisc=$row['noOfDisc'];
		echo "<br><br><table style='width:100%;'><tr id='tbhead'><th>SELECT</th><th>TOPIC</th><th>AUTHOR</th><th>POSTED DATE</th><tr>";
		for($i=$noOfDisc;$i>=$noOfDisc-4;$i--)
		{	$rqt="SELECT topic,userName,post_time FROM tab".$i;
			$result=$conn->query($rqt);
			$frow=$result->fetch_assoc();
			$tname=$frow['topic'];
			$uname=$frow['userName'];
			$time=$frow['post_time'];
			echo "<tr id='trow' ><td id='rows'><center><input type=radio name=d value=$i style='height:1.2em;width:1.2em;'></center></td><td id='rows'><center><b style='font-size:2em;'>".$tname."</b></center></td><td id='rows'><center><i style='color:grey;font-size:1.4em;'>".$uname."</center></td><td id='rows'><center>".$time."</i></center></td>";
		}
			
		$conn->close();
		?>
	
	</div>
	</body>
</html>