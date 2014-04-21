<?php
//	index.php
require("res/funcs.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>DynaForma | Welcome</title>
		<?php comheaders(); ?>
	</head>
	<body>
		<?php navbar();?>
		<div class="container">
			<div class="hero-unit">
				<h1 class="pull-right brand">DynaForma</h1>
				<p style="clear:both;text-align: right;margin-top: 20px;">Create Beautiful Dynamic forms</p>
			</div>

			<div class="row" style="text-align: center;"><a href="<?php echo $docroot;?>create/" class="btn btn-primary large" style="font-size: 32px;padding: 10px;">Create your form now!</a></div>

			<div class="row">
				<div class="span4">
					<img src="http://placehold.it/300x300"/>
				</div>
				<div class="span8 v-center">
					<div>
						<h1>Simple and Fast!</h1>
						<p>Get up and started in a matter of seconds!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="span8 v-center">
					<div>
						<h1>Fully customizable</h1>
						<p>Fully customize every feature of your forms to your needs</p>
					</div>
				</div>
				<div class="span4">
					<img src="http://placehold.it/300x300"/>
				</div>
			</div>

    	</div> <!-- /container -->
		<footer>
			
		</footer>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>