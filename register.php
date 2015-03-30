<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DTS WORKnote - Registration</title>
<link href="images/worknote-logo.ico" rel="icon" type="image/x-icon"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/masterstyle.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- hintbox script below -->

<script type="text/javascript">

/***********************************************
* Show Hint script- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/
		
var horizontal_offset="9px" //horizontal offset of hint box from anchor link

/////No further editting needed

var vertical_offset="0" //horizontal offset of hint box from anchor link. No need to change.
var ie=document.all
var ns6=document.getElementById&&!document.all

function getposOffset(what, offsettype){
var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentEl=what.offsetParent;
while (parentEl!=null){
totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
parentEl=parentEl.offsetParent;
}
return totaloffset;
}

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge){
var edgeoffset=(whichedge=="rightedge")? parseInt(horizontal_offset)*-1 : parseInt(vertical_offset)*-1
if (whichedge=="rightedge"){
var windowedge=ie && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-30 : window.pageXOffset+window.innerWidth-40
dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure+obj.offsetWidth+parseInt(horizontal_offset)
}
else{
var windowedge=ie && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure-obj.offsetHeight
}
return edgeoffset
}

function showhint(menucontents, obj, e, tipwidth){
if ((ie||ns6) && document.getElementById("hintbox")){
dropmenuobj=document.getElementById("hintbox")
dropmenuobj.innerHTML=menucontents
dropmenuobj.style.left=dropmenuobj.style.top=-500
if (tipwidth!=""){
dropmenuobj.widthobj=dropmenuobj.style
dropmenuobj.widthobj.width=tipwidth
}
dropmenuobj.x=getposOffset(obj, "left")
dropmenuobj.y=getposOffset(obj, "top")
dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+obj.offsetWidth+"px"
dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+"px"
dropmenuobj.style.visibility="visible"
obj.onmouseout=hidetip
}
}

function hidetip(e){
dropmenuobj.style.visibility="hidden"
dropmenuobj.style.left="-500px"
}

function createhintbox(){
var divblock=document.createElement("div")
divblock.setAttribute("id", "hintbox")
document.body.appendChild(divblock)
}

if (window.addEventListener)
window.addEventListener("load", createhintbox, false)
else if (window.attachEvent)
window.attachEvent("onload", createhintbox)
else if (document.getElementById)
window.onload=createhintbox
</script>
<style type="text/css">
#hintbox{ /*CSS for pop up hint box */
position:absolute;
top: 0;
background-color: rgb(5,192,122);
width: 150px; /*Default width of hint.*/ 
padding: 3px;
border:1px solid black;
font:normal 11px Arial;
line-height:18px;
z-index:100;
border-right: 3px solid black;
border-bottom: 3px solid black;
visibility: hidden;
}

.hintanchor{ /*CSS for link that shows hint onmouseover*/
font-weight: bold;
color: navy;
margin: 3px 8px;
}
</style>

</head>
<body>

<!-- MAIN HEADER -->
<table class="mainbar2">
<tr>
	<td>
		<div><img src="images/cite_logo.png" style="height:44px;width:36px;padding:3px;"/>
		<a href="index.php"><img src="images/worknote-name-logo.png" style="height:30px;"/></a>
		<p class="mainbar-links"><a href="#" class="registerlink" id="reg-sign-link">Register</a> | <a href="login.php" id="reg-sign-link">Sign-in</a></p>
		</div>
	</td>
</tr>
</table>
<div class="mainbarline2"></div>
<!-- MAIN HEADER END HERE -->

<br>
<div class="container-fluid" style="width:950px;">
	<div class="row-fluid">
	<div class="span12">
		<ul class="breadcrumb">
			<li>
				Register as a :
			</li>
			<li class="active">
				<a id="studf" href="#">Student</a> <span class="divider">/</span>
			</li>
			<li>
				<a id="supervf" href="#">Supervisor</a> <span class="divider">/</span>
			</li>
			<li>
				<a id="advif" href="#">Adviser</a>
			</li>
		</ul>
	</div>
	<center>
	<div class="span12">	
		<div class="" style="font-size:13px;padding:10px;background:rgb(210,210,210);">
<!--
==================================================================
					ERROR/SUCCESS MESSAGES
==================================================================
-->

		<!--

		code: echo message here if succesful or something error upon register..
		
		<p id="msgsuccess" class="errormess-success">Success ! click <a href="login.php">here</a> to login.</p>
		<p id="msgfail" class="errormess-fail">Error : Password you entered does'nt match. Please try again.</p>
		
		-->

<!--
==================================================================
				HIDING/SHOWING FORMS
==================================================================
-->

<script>
$(document).ready(function(){
	$('.supervform').hide();
	$('.adviform').hide();
});
$('#studf').click(function(){
	$('.studform').show('slow');
	$('.supervform').hide();
	$('.adviform').hide();
});
$('#supervf').click(function(){
	$('.supervform').show('slow');
	$('.studform').hide();
	$('.adviform').hide();
});
$('#advif').click(function(){
	$('.adviform').show('slow');
	$('.studform').hide();
	$('.supervform').hide();
});
</script>


<!--
==================================================================
						STUDENT FORM
==================================================================
-->
<div class="studform">
		<form action="register.php" method="POST">
		<table style="position:relative;">
		<tr>
			<td colspan="4" style="text-align:center;"><h3>Student Form</h3></td>
		</tr>
		<tr>
			<td><h4>Personal Information</h4></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" required/></td>
			<td>Section</td>
			<td><input type="text" name="section" maxlength="2" required/></td>
			
		</tr>
		<tr>
			<td>Middle Initial</td>
			<td><input type="text" name="mname" maxlength="1" required/></td>
			<td>CITE ID#</td>
			<td><input type="text" name="idnum" maxlength="6" required/></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname" required/></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" maxlength="3" required/></td>
			<td>Birthdate</td>
			<td><input type="text" name="birthdate" required/></td>
		</tr>
		<tr>
			<td>Company Assigned</td>
			<td>
			<!-- dynamic list of company should be coded as much as possible -->
				<select>
					<option selected>select company</option>
					<option>ABCD Company</option>
					<option>EFGH Company</option>
					<option>IJKL Company</option>
					<option>MNOP Company</option>
					<option>QRST Company</option>
					<option>UVWX Company</option>
					<option>YYZZ Company</option>
					<option>ABCD Company</option>
					<option>EFGH Company</option>
					<option>IJKL Company</option>
					<option>MNOP Company</option>
					<option>QRST Company</option>
					<option>UVWX Company</option>
					<option>YYZZ Company</option>
					<option>ABCD Company</option>
					<option>EFGH Company</option>
					<option>IJKL Company</option>
					<option>MNOP Company</option>
					<option>QRST Company</option>
					<option>UVWX Company</option>
					<option>YYZZ Company</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		<tr>
			<td><h4>Account</h4></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Username can contain both alphabet and numbers. Length should not exceed to 15 characters.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Password must only contain numeric and alphabet characters. Password length must be 15 only.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td>Re-type Password</td>
			<td><input type="password" name="repass" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Password should match on what you inputted before.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><input class="btn btn-primary btn-medium" type="submit" value="Register"/><br/><br/></td>
		</tr>
		</table>
		</form>
</div>		
<!--
==================================================================
						SUPERVISOR FORM
==================================================================
-->
<div class="supervform">
		<form action="register.php" method="POST">
		<table style="position:relative;">
		<tr>
			<td colspan="4" style="text-align:center;"><h3>Supervisor Form</h3></td>
		</tr>
		<tr>
			<td><h4>Identification</h4></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" required/></td>
			<td>Last Name</td>
			<td><input type="text" name="lname" required/></td>
		</tr>
		<tr>
			<td>Middle Initial</td>
			<td><input type="text" name="mname" maxlength="1" required/></td>
		</tr>
		<tr>
			<td>Your Company</td>
			<td>
			<!-- dynamic list of company should be coded as much as possible -->
				<select>
					<option selected>select company</option>
					<option>ABCD Company</option>
					<option>EFGH Company</option>
					<option>IJKL Company</option>
					<option>MNOP Company</option>
					<option>QRST Company</option>
					<option>UVWX Company</option>
					<option>YYZZ Company</option>
					<option>ABCD Company</option>
					<option>EFGH Company</option>
					<option>IJKL Company</option>
					<option>MNOP Company</option>
					<option>QRST Company</option>
					<option>UVWX Company</option>
					<option>YYZZ Company</option>
					<option>ABCD Company</option>
					<option>EFGH Company</option>
					<option>IJKL Company</option>
					<option>MNOP Company</option>
					<option>QRST Company</option>
					<option>UVWX Company</option>
					<option>YYZZ Company</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		<tr>
			<td><h4>Account</h4></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Username can contain both alphabet and numbers. Length should not exceed to 15 characters.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Password must only contain numeric and alphabet characters. Password length must be 15 only.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td>Re-type Password</td>
			<td><input type="password" name="repass" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Password should match on what you inputted before.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><input class="btn btn-primary btn-medium" type="submit" value="Register"/><br/><br/></td>
		</tr>
		</table>
		</form>
</div>		
<!--
==================================================================
						ADVISER FORM
==================================================================
-->
<div class="adviform">
		<form action="register.php" method="POST">
		<table style="position:relative;">
		<tr>
			<td colspan="4" style="text-align:center;"><h3>Adviser Form</h3></td>
		</tr>
		<tr>
			<td><h4>Identification</h4></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" required/></td>
			<td>Last Name</td>
			<td><input type="text" name="lname" required/></td>
		</tr>
		<tr>
			<td>Middle Initial</td>
			<td><input type="text" name="mname" maxlength="1" required/></td>
		</tr>
		<tr>
			<td colspan="4"><hr></td>
		</tr>
		<tr>
			<td><h4>Account</h4></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Username can contain both alphabet and numbers. Length should not exceed to 15 characters.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Password must only contain numeric and alphabet characters. Password length must be 15 only.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td>Re-type Password</td>
			<td><input type="password" name="repass" maxlength="15" required/>
			<a href="#" class="hintanchor" onMouseover="showhint('Password should match on what you inputted before.', this, event, '150px')">[?]</a></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><input class="btn btn-primary btn-medium" type="submit" value="Register"/><br/><br/></td>
		</tr>
		</table>
		</form>
</div>


		</div>
	</div>
</div>
</div>
</center>
<div class="clearfooter"></div>
<footer id="footer2">
	Project Study by:<br/>
	Cantiveros, Mayol and Baclado
</footer>
<footer class="endfooter"></footer>
&nbsp;&copy; Center for Industrial Technology and Enterprise - 2015
</body>
</html>

