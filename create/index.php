<?php
//	index.php
require("../res/funcs.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Dynaforma</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="beautiful dynamic forms"/>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.color-2.1.2.min.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>
		<link rel="stylesheet" href="../css/main.css"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="menu">
					<div class="header-menu-item">Home<br/>&nbsp;</div>
					<div class="header-menu-item">Create<br/>Form</div>
					<div class="header-menu-item">Edit<br/>Form</div>
					<div class="header-menu-item">Contact<br/>Us</div>
					<div id="logo">
						<div>DynaForma</div>
						<div class="sub">Beautiful Dynamic Forms</div>
					</div>
				</div>
			</div>
			<div id="content">
				<div id="form">
					<div id="form-header">
						<div id="form-title">My Form</div>
					</div>
					<div id="questions">
						<div class="question">
							<div class="q-title">Question 1</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-text">
									<input type="text" name="q1" placeholder="Answer here" disabled="true"/>
								</div>
							</div>
						</div>
						
						<div class="question">
							<div class="q-title">Question 2</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-textarea">
									<textarea disabled="true" name="q2">Answer here</textarea>
								</div>
							</div>
						</div>
						
						<div class="question">
							<div class="q-title">Question 3</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-checkboxes">
									<input type="checkbox" name="q3" disabled="true"/>
								</div>
							</div>
						</div>
						
						<div class="question">
							<div class="q-title">Question 4</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-optionbuttons">
									<input type="radio" name="q4" disabled="true"/>
									<!--<input type="radio" name="q4" disabled="true"/>
									<input type="radio" name="q4" disabled="true"/>-->
								</div>
							</div>
						</div>
					</div>
					<div id="form-footer">
						<div id="form-footer-text"></div>
					</div>
				</div>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>