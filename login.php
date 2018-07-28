<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		
	</form>
</body>
</html><!DOCTYPE html>
<html>

<head>
<style>
.name{	display:inline;}
label{color:#3EE0B2;}
.customize{
	background-color: #3EE0B2;
	color: #fff;
	font-family:Century;
	font-size:1em;
	position:relative;
	left:10em;
	   }
	   label,a,center{color:#3EE0B2;
		text-decoration:none;}
#fix{background:black;color:#3EE0B2;font-size:2em;position:fixed; left:515px;}
#fix:hover{transform:rotate(180deg) rotate(-180deg) ;
	transition:all(5s);}
#sign{	width:20em;
	padding-left:15%;
	padding-right:15%;
	padding-bottom:0.5em;
	position:relative;
	left:20%;
	font-size:1.2em;
	background-color:rgba(153,153,153,0.8);
	box-shadow:10px 10px 10px 0 rgba(0, 0, 0, 0.2), 15px 15px 20px 0 rgba(0, 0, 0, 0.19);
	}
	#log{	width:20em;
			height:20em;
			padding-left:5%;
			padding-right:5%;
			position:absolute;
			left:30%;
			top:40em;
			font-size:1.2em;
			background-color:rgba(153,153,153,0.8);
			box-shadow:10px 10px 10px 0 rgba(0, 0, 0, 0.2), 15px 15px 20px 0 rgba(0, 0, 0, 0.19);}
	.box{	border-radius:0.3em;
			width:15em;
			height:2em;
			}
	.shead{	text-shadow:0 0 10px black;}
	label,a,center{color:#3EE0B2;
		text-decoration:none;}
	</style>
</head>

<body style="background-color:#000066;font-family:Comic Sans MS;height: 80em;">
<div id="sign"><h1 class='shead' style="color:#3EE0B2;position:relative;left:30px;">SIGN UP NOW!!!</h1>
<form action="signup.php" method="post">
<div class="name">
<label> First Name * :<input type="text" class="box" required name="fname" style="position:relative;left:2.5em;"/></label><br><br>
<label> Last Name :<input type="text" class="box" name="lname" style="position:relative;left:4em;"/></label>
</div><br><br>
<label>Password * :<input type="password" class="box" required name="pswd" style="position:relative;left:3.8em;"/></label><br/><br/>
<label>Age :<select class="box" name="age" style="position:relative;left:8.6em;"><option>select your age</option><option>5-15</option><option>15-25</option><option>25-45</option><option>45-55</option><option>55-75</option><option>75 & above</option></select></label><br><br>
<label>Email :<input class="box" type="email" name="email" style="position:relative;left:7.7em;"/></label>
<br/><br/>
<label>Gender:<div style="display:inline;position:relative;left:4em;">
<input  name="gender" type="radio" value="male"/> Male <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
<input  name="gender" type="radio" value="female"/> Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
</label><br/><br/>
<label>Birth Date:</label>
								<select style="border-radius:0.3em;" name="birth_month">
<option value="-1">Month</option>
<option value="01" >January - 01</option>
<option value="02" >February - 02</option>
<option value="03" >March - 03</option>
<option value="04" >April - 04</option>
<option value="05" >May - 05</option>
<option value="06" >June - 06</option>
<option value="07" >July - 07</option>
<option value="08" >August - 08</option>
<option value="09" >September - 09</option>
<option value="10" >October - 10</option>
<option value="11" >November - 11</option>
<option value="12" >December - 12</option>
								</select>&nbsp;				
								<select style="border-radius:0.3em;" name="birth_day">
									<option value="-1">Day</option>
<option value="01">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
									
								</select>&nbsp;
								<select style="border-radius:0.3em;" name="birth_year">
<option value="-1">Year</option>
<option value="2016" >2016</option>
<option value="2015" >2015</option>
<option value="2014" >2014</option>
<option value="2013" >2013</option>
<option value="2012" >2012</option>
<option value="2011" >2011</option>
<option value="2010" >2010</option>
<option value="2009" >2009</option>
<option value="2008" >2008</option>
<option value="2007" >2007</option>
<option value="2006" >2006</option>
<option value="2005" >2005</option>
<option value="2004" >2004</option>
<option value="2003" >2003</option>
<option value="2002" >2002</option>
<option value="2001" >2001</option>
<option value="2000" >2000</option>
<option value="1999" >1999</option>
<option value="1998" >1998</option>
<option value="1997" >1997</option>
<option value="1996" >1996</option>
<option value="1995" >1995</option>
<option value="1994" >1994</option>
<option value="1993" >1993</option>
<option value="1992" >1992</option>
<option value="1991" >1991</option>
<option value="1990" >1990</option>
<option value="1989" >1989</option>
<option value="1988" >1988</option>
<option value="1987" >1987</option>
<option value="1986" >1986</option>
<option value="1985" >1985</option>
<option value="1984" >1984</option>
<option value="1983" >1983</option>
<option value="1982" >1982</option>
<option value="1981" >1981</option>
<option value="1980" >1980</option>
<option value="1979" >1979</option>
<option value="1978" >1978</option>
<option value="1977" >1977</option>
<option value="1976" >1976</option>
<option value="1975" >1975</option>
</select>
<br><br>
<input class="customize" type="submit" value="Create Account"/></div>
<br><br><br>
</form>
<form action="singin.php" method="post">
<div id="log">
<h1 class="shead"style="color:#3EE0B2;position:relative;left:110px;">LOGIN</h1>
<center>Don't have an account??<br/>Scroll up!</center><br/>
<label align=center> Email-Id * :<input class="box" type="text" name="fname" required style="position:relative;left:2em;"/></label><br><br>
<label>Password * :<input class="box" type="password" name="pswd" required style="position:relative;left:3em;"/></label><br><br>
<input type="submit" class="customize" value="Log In"/></div>
</form>

</body>
</html>