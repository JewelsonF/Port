<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
		<title>ZOsite</title>
		<link rel="stylesheet" href="css/foundation.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style_.css" />
		<script src="js/custom.modernizr.js"></script>
	</head>
	<body>
	</body>
	<!--bgd section starts-->
	<div class="building">
	</div>
	<div id="background"></div>
<div id="midground"></div>
<div id="foreground"></div>
	<!--bgd section ends-->
		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/jquery.backgroundPosition.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$('#midground').css({backgroundPosition: '0px 0px'});
				$('#foreground').css({backgroundPosition: '0px 0px'});
				$('#background').css({backgroundPosition: '0px 0px'});
				$('#midground').animate({
					backgroundPosition:"(-10000px -2000px)"
				}, 240000, 'linear');
				$('#foreground').animate({
					backgroundPosition:"(-10000px -2000px)"
				}, 120000, 'linear');
				$('#background').animate({
					backgroundPosition:"(-10000px -2000px)"
				}, 480000, 'linear');
			});
		</script>
	</body>
	
</html>