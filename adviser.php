<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DTS WORKnote - Home</title>
<link href="images/worknote-logo.ico" rel="icon" type="image/x-icon"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/masterstyle.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<!-- MAIN HEADER -->
<table class="mainbar2">
<tr>
	<td>
		<div><img src="images/cite_logo.png" style="height:44px;width:36px;padding:3px;"/>
		<img src="images/worknote-name-logo.png" style="height:30px;"/>
<!--===========================================================================================
				ADVISER OPTIONS and PIPE-IN NAME
============================================================================================-->		
		<div class="btn-group" style="float:right;padding-top:10px;padding-right:5%;">
				 <button data-toggle="dropdown" class="btn dropdown-toggle btn-small"><span class="caret"></span></button>

				<ul class="dropdown-menu" style="margin-left:-135px;">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="adviser-profile.php">Profile</a>
					</li>
					<li>
						<a href="#">Account Settings</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="login.php">Logout</a>
					</li>
				</ul>
			</div>
		<p class="mainbar-links">Hi, Juan Dela Cruz</p> <!-- PIPE-IN NAME FROM DATABASE -->
<!--==========================================================================================-->		
		</div>
	</td>
</tr>
</table>
<div class="mainbarline2"></div>
<!-- MAIN HEADER END HERE -->

<div style="padding:10px;"></div>
<div class="container-fluid" style="width:950px;">
	<div class="row-fluid">
		<div class="span2" style="background:rgb(210,210,210);">
			<ul class="nav nav-list">
				<li class="nav-header">
					SYSTEM TOOLS
				</li>
				<li class="divider"></li>
				<li class="active">
					<a href="#">Monitoring tool</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">Entry Approval</a>
				</li>
			</ul>
		</div>
<!--============================================================================================
					GENERATE TABLE FROM DATABASE BY SECTIONS
=============================================================================================-->
		<div class="span2">
			<form action="adviser.php" method="POST">
				<input type="text" name="section" maxlength="2" placeholder="Input Section (ex: 1E)" required />
				<input class="btn btn-primary btn-small" type="submit" value="Pull" />
			</form>
		</div>		
		<div class="span8">
		<center>
			<table border="1" cellpadding="2px" style="text-align:center;">
				<tr>
					<th colspan="5">Monitoring Table</th>
				</tr>
				<tr>
					<td class="stats" >ID #</td><td class="stats" >Last Name</td><td class="stats" >First Name</td><td class="stats" >Company</td><td class="stats" ># of pending entries</td>
				</tr>
				<tr>
					<td class="stats" >22-202</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-203</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-204</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-205</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-206</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-207</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-208</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-209</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-210</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-211</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-212</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-213</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-214</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-215</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-216</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-217</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-218</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-219</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-220</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-221</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-222</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-223</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-224</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-225</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-226</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-227</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-228</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-229</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-230</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
				<tr>
					<td class="stats" >22-231</td><td class="stats" >Dela Cruz</td><td class="stats" >Juan</td><td class="stats" >ABCD Company</td><td class="stats" >4</td>
				</tr>
			</table>
		</center>
		</div>
<!--=========================================================================================-->	
	</div>
</div>
<div class="clearfooter"></div>
<footer id="footer2">
	Project Study by:<br/>
	Cantiveros, Mayol and Baclado
</footer>
<footer class="endfooter"></footer>
&nbsp;&copy; Center for Industrial Technology and Enterprise - 2015
</body>
</html>