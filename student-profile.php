<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DTS WORKnote - Profile</title>
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
				STUDENT OPTIONS and PIPE-IN NAME
============================================================================================-->		
		<div class="btn-group" style="float:right;padding-top:10px;padding-right:5%;">
				 <button data-toggle="dropdown" class="btn dropdown-toggle btn-small"><span class="caret"></span></button>

				<ul class="dropdown-menu" style="margin-left:-135px;">
					<li>
						<a href="student.php">Home</a>
					</li>
					<li class="active">
						<a href="#">Profile</a>
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
<div class="container-fluid" style="width:600px;">
	<div class="row-fluid">
		<div class="span12">
		
		<table style="position:relative;">
		<tr>
			<td><h4>Personal Information</h4></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
			<td>Section</td>
			<td><input type="text" name="section" maxlength="2" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
			
		</tr>
		<tr>
			<td>Middle Initial</td>
			<td><input type="text" name="mname" maxlength="1" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
			<td>CITE ID#</td>
			<td><input type="text" name="idnum" maxlength="6" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" maxlength="3" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
			<td>Birthdate</td>
			<td><input type="text" name="birthdate" value="" /></td> <!-- PIPE-IN INSIDE VALUE -->
		</tr>
		<tr>
			<td>Company Assigned</td>
			<td><input type="text" name="company" value="" /></td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		<tr>
			<td><h4>Account</h4></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="" /></td> <!-- PIPE IN USER INSIDE VALUE -->
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" maxlength="15" value="you cannot see me :P" required/></td>
		</tr>
		</table>
		</div>
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