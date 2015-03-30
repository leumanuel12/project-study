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
				STUDENT OPTIONS and PIPE-IN NAME
============================================================================================-->		
		<div class="btn-group" style="float:right;padding-top:10px;padding-right:5%;">
				 <button data-toggle="dropdown" class="btn dropdown-toggle btn-small"><span class="caret"></span></button>

				<ul class="dropdown-menu" style="margin-left:-135px;">
					<li class="active">
						<a href="#">Home</a>
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
<div class="container-fluid" style="width:950px;">
	<div class="row-fluid">
		<div class="span2" style="background:rgb(210,210,210);">
			<ul class="nav nav-list">
				<li class="nav-header">
					SYSTEM TOOLS
				</li>
				<li class="divider"></li>
				<li class="active">
					<a href="#">Work logs</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="entrytool.php">Entry tool</a>
				</li>
			</ul>
		</div>
		<div class="span7">
			<center>
				<table class="table table-bordered" style="background:rgb(210,210,210);" border="1">
					<tr>
						<th colspan="4">
							<center>Weekly Entry Status</center>
						</th>
					</tr>
					<tr>
						<td><div id="hstats">Date</div></td>
						<td><div id="hstats">Supervisor Approval</div></td>
						<td><div id="hstats">Adviser Approval</div></td>
						<td><div id="hstats">Status</div></td>
					</tr>
<!--=========================================================================================
					TABLES HERE WILL BE GENERATED FROM DATABASE
						TABLES BELOW ARE EXAMPLES ONLY
==========================================================================================-->
					<tr>
						<td><div id="stats">12/01/20</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Done</div></td>
					</tr>
					<tr>
						<td><div id="stats">12/02/20</div></td>
						<td><div id="stats">No</div></td>
						<td><div id="stats">No</div></td>
						<td><div id="stats">Pending</div></td>
					</tr>
					<tr>
						<td><div id="stats">12/03/20</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Done</div></td>
					</tr>
					<tr>
						<td><div id="stats">12/04/20</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Done</div></td>
					</tr>
					<tr>
						<td><div id="stats">12/05/20</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Done</div></td>
					</tr>
					<tr>
						<td><div id="stats">12/06/20</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">No</div></td>
						<td><div id="stats">Pending</div></td>
					</tr>
					<tr>
						<td><div id="stats">12/07/20</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Yes</div></td>
						<td><div id="stats">Done</div></td>
					</tr>
				</table>
			</center>
		</div>
		<div class="span3">
			<table class="table table-bordered" border="1">
				<tr>
					<th><center>Past pending entries</center></th>
				</tr>
				<tr>
					<td><div id="stats">11/25/20</div></td>
				</tr>
				<tr>
					<td><div id="stats">11/26/20</div></td>
				</tr>
				<tr>
					<td><div id="stats">11/27/20</div></td>
				</tr>
				<tr>
					<td><div id="stats">11/28/20</div></td>
				</tr>
				<tr>
					<td><div id="stats">11/29/20</div></td>
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