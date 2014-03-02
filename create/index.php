<?php
//	index.php
require("../res/funcs.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Dynaforma | Beautiful Dynamic Forms</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="beautiful dynamic forms"/>
		<link rel="stylesheet" href="../css/main.css"/>
		<link rel="stylesheet" href="create.css"/>
		<script type="text/javascript" src="../js/main.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.color-2.1.2.min.js"></script>
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
				<div id="tools">
					<div id="bgcolor"><input type="button" value="Add a Question"/></div>
					<div id="bgcolor">Header-color:</div>
					<div id="bgcolor">Background-color:</div>
					<div id="bgcolor">Footer-color:</div>
				</div>
				<div id="form">
					<div id="form-header">
						<div id="form-title">My Form</div>
					</div>
					<div id="questions">
						<div class="question">
							<div class="delete" title="Delete this Question">Delete</div>
							<div class="q-title">Question 1</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-text">
									<input type="text" name="q1" placeholder="Answer here" disabled="true"/>
								</div>
							</div>
						</div>
						
						<div class="question">
							<div class="delete" title="Delete this Question">Delete</div>
							<div class="q-title">Question 2</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-textarea">
									<textarea disabled="true" name="q2">Answer here</textarea>
								</div>
							</div>
						</div>
						
						<div class="question">
							<div class="delete" title="Delete this Question">Delete</div>
							<div class="q-title">Question 3</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-checkboxes">
									<input type="checkbox" disabled="true"/><input class="input-boxes" type="text"/>
								</div>
								<input type="checkbox" disabled="true"/><input type="button" class="add-check" value="Add a new Option"/>
							</div>
						</div>
						
						<div class="question">
							<div class="delete" title="Delete this Question">Delete</div>
							<div class="q-title">Question 4</div>
							<div class="q-detail">The abstract for the question</div>
							<div class="q-options">
								<div class="q-optionbuttons">
									<input type="radio" disabled="true"/><input class="input-boxes" type="text"/>
									<!--<input type="radio" name="q4" disabled="true"/>
									<input type="radio" name="q4" disabled="true"/>-->
								</div>
								<input type="radio" disabled="true"/><input type="button" class="add-opt" value="Add a new Option"/>
							</div>
						</div>
						
						<div class="question-sample">
							<div class="q-title-sample"><a href="javascript:;">Add a New Question</a></div>
							<div id="new-q">
								<input type="button" value="Short text answer"/>
								<input type="button" value="Long text answer"/>
								<input type="button" value="Multiple choice (checkboxes)"/>
								<input type="button" value="Single choice (option buttons)"/>
							</div>
						</div>
					</div>
					<div id="form-footer">
						<div id="form-footer-text">
							<div id="powermsg">Powered by "The Smarter Techies"</div>
							<div>&copy; 2014 The Smarter Techies</div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>