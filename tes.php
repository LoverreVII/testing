<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>

	
	<div class="navbar navbar-default">
		<div class="navbar-header">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
					$(this).toggleClass('open');
					$('b', this).toggleClass("caret caret-up");                
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
					$(this).toggleClass('open');
					$('b', this).toggleClass("caret caret-up");                
				});
		});
	</script>
</body>
</html>