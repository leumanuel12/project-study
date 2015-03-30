<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DTS WORKnote - Student Login</title>
<link href="images/worknote-logo.ico" rel="icon" type="image/x-icon"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="css/masterstyle.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<!-- MAIN HEADER -->
<table class="mainbar2">
<tr>
	<td>
		<div><img src="images/cite_logo.png" style="height:44px;width:36px;padding:3px;"/>
		<a href="index.php"><img src="images/worknote-name-logo.png" style="height:30px;"/></a>
		<p class="mainbar-links"><a href="register.php" class="registerlink" id="reg-sign-link">Register</a> | <a href="#" id="reg-sign-link">Sign-in</a></p>
		</div>
	</td>
</tr>
</table>
<div class="mainbarline2"></div>
<!-- MAIN HEADER END HERE -->

<div class="container-fluid">
	<div class="row-fluid" style="padding-top:100px;font-family:arial;">
		<div class="span12">
			<center>
				<table style="border-radius:3px;background:rgb(5,192,122);">
					<tr>
						<td>
							<div>		<!-- FORM ACTION MUST REDIRECT ON WHERE HE BELONGS (e.g student.php, adviser.php, supervisor.php) -->
								<form class="form-horizontal" method="POST" action="login.php" style="padding:20px;color:#fff;font-family:arial;font-size:15px;">
								<br>
									<input name="uname" placeholder="Username" type="text" maxlength="20" size="40" required /><br/><br/>
									<input name="upass" placeholder="Password" type="password" maxlength="20" size="40" required /><br/><br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;
									<input class="btn" type="submit" style="position:relative;" value="Login">
								</form>
							</div>
						</td>
					</tr>
				</table>
			<div>Not registered yet? <a href="register.php">click here</a></div>
			</center>
		</div>

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
