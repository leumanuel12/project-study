<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DTS WORKnote - Portal</title>
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
		<a href="#"><img src="images/worknote-name-logo.png" style="height:30px;"/></a>
		<p class="mainbar-links"><a href="register.php" class="registerlink" id="reg-sign-link">Register</a> | <a href="login.php" id="reg-sign-link">Sign-in</a></p>
		</div>
	</td>
</tr>
</table>
<div class="mainbarline2"></div>
<!-- MAIN HEADER END HERE -->

<div style="padding:10px;"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="hero-unit">
				<h3>
					Welcome to DTS WORK<em style="color:rgb(0,123,215);">note</em> !
				</h3>
				<p style="font-size:16px;">
					This web tool is created for CITE OJT's as their online logbook purposes.<br/>
					It has a monitoring system that enables the adviser to monitor the approved and pending daily worklogs of his students.
					And has an approval system available only for adviser's and supervisor's to avoid the manipulation of signatures.
				</p>
				<p>
					<a id="rdmore" class="btn btn-primary btn-small">view more &#187;</a>
<!--========================================================================================
							READ MORE JSCRIPT
=========================================================================================-->					
					<script>
					$(document).ready(function(){
						$('#readmore').hide();
					});
					$('#rdmore').click(function(){
						$('#rdmore').hide();
						$('#readmore').show('slow');
					});
					</script>
<!--====================================================================================-->
					<p id="readmore" style="font-size:16px;">
					We believe that using this tool will lessen the use of paper to create logbooks.
					This might be a little action but will be a very big help to preserve trees from cutting down in order to produce papers.

					</p>
				</p>
			</div>
		</div>
<!--
====================================================================================================
					OTHER CONTENTS AFTER INTRODUCTION
====================================================================================================
-->		
				<script>
				$(document).ready(function(){
					$('#viewthumb1').hide();
					$('#viewthumb2').hide();
					$('#viewthumb3').hide();
				$('#viewbutton1').click(function(){
						$('#viewthumb1').toggle('slow');
						$('#viewbutton1').hide();
				});
				$('#viewbutton2').click(function(){
						$('#viewthumb2').toggle('slow');
						$('#viewbutton2').hide();
				});
				$('#viewbutton3').click(function(){
						$('#viewthumb3').toggle('slow');
						$('#viewbutton3').hide();
				});
				});
				</script>

		<div class="row-fluid">
		<div class="span12" style="padding:3px;">
			<h4>Objectives</h4>
			<div style="background-image:url('images/backslash.png');background-repeat:repeat-x;"><br/></div><br/>
			<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="images/draw-logo.png" />
						<div class="caption">
							<p>
								<h5>To secure from manipulators of signatures.</h5>
							</p>
							<!--=====================================================
												MAIN TEXT
							======================================================-->
							<p>
								
							</p>
							<p>
								<button id="viewbutton1" class="btn btn-primary btn-small">read more &#187;</button>
							</p>
							<!--=====================================================
											SUB TEXT - VIEW MORE
							======================================================-->
							<p id="viewthumb1">
								more text here.
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="images/monitortool-logo.png" />
						<div class="caption">
							<p>
								<h5>Easier monitoring system.</h5>
							</p>
							<!--=====================================================
												MAIN TEXT
							======================================================-->
							<p>
								This feature is available only for Adviser's end only.
								This customed page enables the instructor/adviser to monitor the daily work logs of his students in the company.
								He may be able to locate directly the pending logs of his student and to approve them.
							</p>
							<p>
								<button id="viewbutton2" class="btn btn-primary btn-small">read more &#187;</button>
							</p>
							<!--=====================================================
											SUB TEXT - VIEW MORE
							======================================================-->
							<p id="viewthumb2">
								more text here.
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="images/worknote-main-logo.png" />
						<div class="caption">
							<p>
								<h5>To save more trees.</h5>
							</p>
							<!--=====================================================
												MAIN TEXT
							======================================================-->
							<p>
								We all know that the main raw material for producing of papers are the trees.
								These will undergo through a process in a production company.
								It will also need a lot more trees to cut down to sustain the quantity needed to produce papers depending on the demand.
							</p>
							<p>
								<button id="viewbutton3" class="btn btn-primary btn-small">read more &#187;</button>
							</p>
							<!--=====================================================
											SUB TEXT - READ MORE
							======================================================-->
							<p id="viewthumb3">
								But the problem is, lots of trees were not replace by a new one.
								Maybe there are some but most of them were not protected properly and maybe uprooted or destroyed.
								<br /><br />
								At times of bad weather, this could result to heavy flash floods and landslides because trees are not there anymore to sip the flood and support the ground.
								This project can be a little help to lessen the severe cutting down of trees to turn into papers.
							</p>
						</div>
					</div>
				</li>
			</ul>
			<blockquote>
					<p>
						" We do ordinary things, extraordinarily well "<br/><br/>
					</p> <small><cite>CITE</cite></small>
			</blockquote>
		</div>
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