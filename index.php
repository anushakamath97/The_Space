<!DOCTYPE html>
<?php
		error_reporting(0);
		?>
	<html>
	<head>
		<style type="text/css">
			#signup{	position:fixed;
						top: 2em;
						right:10px;
						//text-align: center;
						}
			a.sign{	color: #ffff4d;
				padding: 10px;
				margin:auto;
				display:inline;
				text-decoration: none;
				font-size:25px;
				font-family:Comic Sans MS;}
			#main{	color:#ffff66;
				font-size: 50px;
				font-family:Gulim;
				position:absolute;
				left:-30px;
				top:50px;
				padding-left:10px;
				width:28em;
				text-shadow: 0 0 15px 20px #333300;
				text-stroke-width:1px;
				text-stroke-color:#333300;
				}
			.options{	position:absolute;
						top:300px;
						padding-left:10px;}
			video{	margin:0;
					padding:0;
					
					top:-1em;
					width:100%;
					left:0px;}
			ul{	list-style:none;
				color:#ffffcc;}
			a{	position:relative;
				top:-20px;}
			#ontouch{	opacity:0;
						font-size:25px;
						font-family:Comic Sans MS;
						color: #ffffcc;}
			#ontouch:hover{	opacity:1;
							font-size:25px;}
			.next{	color:#ffff4d;
					font-family:Comic Sans MS;
					font-size:30px;
					position:absolute;
					bottom:50px;
					left:550px;}
			.ontouch{	position:relative;
						top:50px;
						left:-20px;}
			.ontouch:hover{	transform:scale(2);}
				a{	text-decoration: none;}
				h1{	position: relative;
					top:600px;
					color: white;
					text-align: center;}
			div[class^="menu"]{	position:relative;
								background-color: rgba(217,217,217,0.4);
								padding: 5px;
								border-radius: 25px;
								width: fill;
								height: 650px;
								top:680px;}
			a:link {	text-decoration: none;
						color:white;}
			a:visited{	text-decoration: none;
						color:white;}
			.kss{	position: relative;
			float: center;
			border-radius: 50%;
			border:solid rgba(0,149,129,255) 0.3em;
			min-width: 200px;
			transition: all .8s ;}
			.kss:hover{		transform: scale(1.2) rotateY(360deg);}
			div.km{	position: relative;
					-webkit-animation: mov 4s infinite !important;
					color:rgba(128,223,0,255);}
			@-webkit-keyframes mov{	0% {	left: 20px;}
									100% {    left: 110px;}
									}
			a.w3-btn-floating{	position:relative;
								float:left;
								top:147px;
								cursor: pointer;}
			a.w3-btn-floating1{	position:relative;
								left:435px;
								cursor:pointer;}
			div.ks{	-webkit-animation: sca 3s; 
					text-shadow: 0.07em 0.07em rgba(0,30,107,255); color:rgba(128,223,0,255);}
			@-webkit-keyframes sca{	from{  	opacity: 0;
											transform: scale(0.9,0.9);}
									to{	opacity: 1;
										transform: scale(1,1);}
									}
			.bc{	animation:chng 10s infinite;
					animation-timing-function:linear;
					position:fixed;
					width:90em;
					height:60em;
					margin:0;
					top:-3em;
					left:-1em;
					padding:0;
					}
			@keyframes chng{	from{	background:url('backg.jpg');}
								50%{	background:url('back2.jpg');}
								to{	background:url('back1.jpg');}}
			.options{	position:absolute;
						top:300px;
						padding-left:10px;}
			.options1{	position:absolute;
						top:380px;
						padding-left:10px;}
			.options2{	position:absolute;
						top:460px;
						padding-left:10px;}
			.options a img,.options1 a img,.options2 a img{
				position: relative;
				width:30px;
				height: 28px;
				border-radius: 50%
			}
			.options a img:hover,.options1 a img:hover,.options2 a img:hover{
				-webkit-animation: sca 2s;
			}
			@-webkit-keyframes sca{
  				from{
  						opacity: 0.5;
  							transform: scale(1,1);
  					}
 				 to
  					{
  						opacity: 1;
  						transform: scale(1.2,1.2);
  					}
  					}
  			div.options a div.icon,div.options1 a div.icon,div.options2 a div.icon
  			{	position: relative;
  				opacity: 0;
  			}
			div.options a div.icon:hover,div.options1 a div.icon:hover,div.options2 a div.icon:hover
  			{
  				opacity: 1;
  				color:#6666cc;
  				font-style: oblique;
  				text-shadow: 
  			}
			#logo,#logo1{	background:none;
					color:#ccffff;
					font-size:2em;
					font-family:Monotype Corsiva;}
		</style>
	</head>
	<body><div class='bc' style="background:url('backg.jpg');"></div>
			<h1 id="main" style="position:relative;">THE SPACE</h1>
			<div id="signup">
			<a class='sign' href="login.php">Sign Up</a>
			<a class='sign' href="login.php#log">Login</a>
			</div>
			<script type="text/javascript">

				ct=0;
				function userlogged(username)
				{	maindiv=document.getElementById('signup');
					while(maindiv.firstChild)
						maindiv.removeChild(maindiv.firstChild);
					userdiv=document.createElement('input');
					userdiv.setAttribute("type","button");
					userdiv.setAttribute("id","logo")
					userdiv.setAttribute("onclick","logout(this)");
					userdiv.setAttribute("value",username);
					userdiv.setAttribute("style","align:center;border:none;");
					maindiv.appendChild(userdiv);
					
				}
				function logout(e)
				{	
					if(ct==0)
					{
					lm=document.createElement('div');
					lf=document.createElement('form');
					lf.setAttribute("action","logout.php");
					l=document.createElement("input");
					l.setAttribute("type","submit");
					l.setAttribute("value","Logout");

					//l.setAttribute("onclick","orig()");
					l.setAttribute("id","logo1")
					l.setAttribute("style","align:center;border:none;display:block;");
					lf.appendChild(l);
					lm.appendChild(lf);
					maindiv.appendChild(lm);
					ct++;
					}
					document.addEventListener("click",hmenu,false);
				}
				function hmenu(e)
				{	
					if(e.target.id!="logo")//not logo1 here because initially when fn is executed if is executed and event of click happens so hmenu is called and removechild gets executed and logout is removed
					{	if(e.target.id!='logo1')
						{lm.removeChild(lm.firstChild);
						ct=0;
						
						}						
					}
				}
			</script>
			<?php
	session_start();
	if(isset($_SESSION['userlogin']))
	{	$username=$_SESSION['userlogin'];
	echo "<script type='text/javascript'>userlogged('$username');</script>";
	}
	?>

			<div class='options'>
			<a href="www.facebook.com"><img src="fb.png"><div class="icon">FACEBOOK</div></a>
			</div>
			<div class='options1'>
			<a href="www.twitter.com"><img src="twitter.png"><div class="icon">TWITTER</div></a>
			</div>
			<div class='options2'>
			<a href="a.html"><img src="about.jpg"><div class="icon">ABOUT US</div></a>
			</div>
			<div class='next'><a href="#menu_top">SCROLL DOWN
				<img src='down.png' style="position:relative;top:50px;right:150px;"/></a>
			</div><br/><br/><br/><br/>
			<h1 id="menu_top" align="center" style="font-size:35px;color:#66ccff;">MENU</h1>
<div  class="menu"><br><br><font color=white size=7 style="font-family:Verdana;"><center></a><div class="ks">
SOLAR SYSTEM</div></a><br><br><a class="w3-btn-floating" onclick="plusDivs(-1)">&#10094;</a><a href="solar_system.html">
<img class="kss" src="ss.jpg"></a><a class="w3-btn-floating1"  onclick="plusDivs(+1)">&#10095;</a><br><br><font size="6"><div class="km">COME FLOAT IN SPACE AND EXPLORE OUR SOLAR SYTEM........</div>
			</div>
<div  class="menu"><br><br><font color=white size=7 style="font-family:Verdana;"><center></a><div class="ks">UPDATES ON SPACE ACTIVITY</div></a><br><br><a class="w3-btn-floating" onclick="plusDivs(-1)">&#10094;</a><a href="info.html"><img class="kss" src="kn.jpg"></a><a class="w3-btn-floating1" onclick="plusDivs(+1)">&#10095;</a><br><br><font size="6"><div class="km">DID YOU KNOW........</div>
</div>
<div  class="menu"><br><br><font color=white size=7 style="font-family:Verdana;"><center></a><div class="ks">FORUM</div></a><br><a class="w3-btn-floating" onclick="plusDivs(-1)">&#10094;</a><a href="forumn.php"><img class="kss" src="for.jpg"></a><a class="w3-btn-floating1" onclick="plusDivs(+1)">&#10095;</a><br><br><font size="6"><div class="km">HAVING A GOOD DISCUSSION IS LIKE HAVING GOOD RICHES....</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("menu");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
</script>
</h1>
	</body>
	<?php
		error_reporting(0);
		?>
	</html>