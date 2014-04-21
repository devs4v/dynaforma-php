<?php
$GLOBALS['docroot'] = "/dynaforma-php/";

function comheaders(){
	?>
<meta charset="UTF-8"/>
<meta name="author" content="Shivam Chaturvedi"/>
<meta name="description" content="Create Beautiful Customizable Dynamic Forms within seconds"/>
<meta name="keywords" content="beautiful, dynamic, forms, surveys"/>
<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['docroot'];?>css/bootstrap.css"/>
<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $GLOBALS['docroot']?>css/main.css"/>		
<?php } ?>

<?php
function navbar(){?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo $GLOBALS['docroot']?>">DynaForma</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="active"><a href="<?php echo $GLOBALS['docroot']?>">Home</a></li>
					<li><a href="<?php echo $GLOBALS['docroot']?>dashboard/">Create</a></li>
					<li><a href="<?php echo $GLOBALS['docroot']?>about/">About Us</a></li>              
				</ul>
				<a class="btn btn-primary pull-right" href="<?php echo $GLOBALS['docroot']?>signin/">Sign In</a>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<?php } ?>