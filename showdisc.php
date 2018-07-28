<style>
h1
{
	color:#004d80;

}

h4
{
	display: inline;
	font-size:1.3em;
	position: relative;
	left:4em;
	font-family:Andalus;
	
}

#sb
{	
	position: relative;
	top:80px;
	left:1000px;
}
#newPost{	margin:auto;
					
		}
#postBt{margin:auto;
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
#latestreply{	font-family:Georgia;
				font-style: bold;
				}
#author{	font-family:Andalus;
			font-size:1.5em;
			color: #737373;
			position:relative;
			left:2em;
}
#ucontent{	font-family:Georgia;
			
			font-size:1.3em;
			position: absolute;
			left:600px;
			top:187px;
			}
#com{	height: 40px;
		width:100px;
		color:white;
		background-color: #007a99;
		font-size:1.2em;
		position:relative;
		top:-1em;
		left:5em;}
</style>
<html>
<body>
<a href="index.php"><img src="hicon.png" id="hicon"></a><br><br>
<div id="sb">
<form action="ifuser1.php">
<input id='com' type="submit" value="Comment" />
</form>
</div>
<script type="text/javascript">
	function com()
	{
			var maindiv=document.createElement("form");
			maindiv.setAttribute("id","newPost");
			maindiv.setAttribute('action','reply.php');
			maindiv.setAttribute('method','POST');
			var txt=document.createElement("textarea");
			txt.setAttribute("rows","7");
			txt.setAttribute("cols","80");
			txt.setAttribute('name','reply');
			var post=document.createElement("input");
			post.setAttribute("type","submit");
			post.setAttribute("value","Post Discussion");
			post.setAttribute("id","postBt");
			maindiv.appendChild(txt);
			maindiv.appendChild(post);
			document.body.appendChild(maindiv);
	}
	</script>
<div id="top">
<?php
session_start();
echo "<body style='background-color:#e6fff2';>";
if(isset($_SESSION['userl']))
{
	if($_SESSION['userl']==true)
	{	$_SESSION['userl']=false;
		echo "<script>com()</script>";
	}
}
if(isset($_POST['d']))
{	

	$_SESSION['tname']=$_POST['d'];//setting it as a session variable because if user has logged in comment than comment button takes user back to showdisc page and $_POST[] is not set topic...content wont appear , therefore initially only we make it a session variable
}
if(isset($_SESSION['tname']))
{	
	$tbname="tab".$_SESSION['tname'];
	//echo $tbname;
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
	$sql="SELECT * FROM $tbname";
	$result = $conn->query($sql);
	$num=$result->num_rows;
	//echo $num;
	$row = $result->fetch_assoc();
	$t=$row['topic'];
	echo "<h1 id='latestreply'><center>".$t."</center></h1><hr>";
	$user=$row['userName'];
	$time=$row['post_time'];
	echo "<div id='author'>".$user."(".$time.")</div>";
	$c=$row['content'];
	echo "<br><p id='ucontent'>".$c."</p><br>";
	for($i=1;$i<$num;$i++)
	{$row = $result->fetch_assoc();
	$user=$row['userName'];
	$time=$row['post_time'];
	$c=$row['content'];
	echo "<hr><h4 >".$c."</h4><h3 style='position:relative;left:56em;color: #737373;'>".$user."(".$time.")</h3>";
	}
	echo "<hr>";
}
else
{
	header('Location: forumn.php');
}
?>
</div>

</body>
</html>