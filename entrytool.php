<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DTS WORKnote - Student Entries</title>
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
					<li>
						<a href="student-profile.php">Profile</a>
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
<div class="container-fluid">
	<div class="row-fluid" style="width:1024px;">
		<div class="span2" style="background:rgb(210,210,210);">
			<ul class="nav nav-list">
				<li class="nav-header">
					SYSTEM TOOLS
				</li>
				<li class="divider"></li>
				<li>
					<a href="student.php">Work logs</a>
				</li>
				<li class="divider"></li>
				<li class="active">
					<a href="#">Entry tool</a>
				</li>
			</ul>
		</div>
		<div class="span7">

<!--=======================================================================
		TEMPORARY ONLY.. SHOW ONLY HOW SHOULD IT LOOKS LIKE..
========================================================================-->
<div style="padding:10px;background:rgb(210,210,210);">
			<form action="entrytool.php" method="POST">
			<table>
			<tr>
				<td colspan="2">Date: <input type="text" name="date" style="width:100px;" maxlength="10" placeholder="mm/dd/yy" required/></td>
			</tr>
			<tr>
				<td>1st hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>2nd hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>3rd hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>4th hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>5th hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>6th hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>7th hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td>8th hr :</td>
				<td><input type="text" style="width:500px;" maxlength="150" required/></td>
			</tr>
			<tr>
				<td colspan="2">Actual time-in : <input type="text" name="actimein" style="width:50px;" maxlength="5" placeholder="hr:min"/>
				Actual time-out : <input type="text" style="width:50px;" name="actimeout" maxlength="5" placeholder="hr:min"/></td>
			</tr>
			<tr>
				<td colspan="2">Official time-in : <input type="text" name="ofltimein" style="width:50px;" maxlength="5" placeholder="hr:min"/>
				Official time-out : <input type="text" name="ofltimeout" style="width:50px;" maxlength="5" placeholder="hr:min"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary btn-small" style="float:right;" type="submit" value="submit entry" /></td>
			</tr>
			</table>
			</form>
</div>
		</div>
<!--=======================================================================
						.. END HERE..
=========================================================================-->
		<div class="span3">
			<table class="table table-bordered" border="1">
				<th>Created Entries</th>
				<tr>
					<td>01/11/15</td>
				</tr>
				<tr>
					<td>01/10/15</td>
				</tr>
				<tr>
					<td>01/09/15</td>
				</tr>
				<tr>
					<td>01/08/15</td>
				</tr>
				<tr>
					<td>01/07/15</td>
				</tr>
				<tr>
					<td>01/06/15</td>
				</tr>
				<tr>
					<td>01/05/15</td>
				</tr>
				<tr>
					<td>01/04/15</td>
				</tr>
				<tr>
					<td>01/03/15</td>
				</tr>
				<tr>
					<td>01/02/15</td>
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