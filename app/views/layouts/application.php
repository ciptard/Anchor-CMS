<!--

	Be a champ - use HTML5!

  -->
 
<!DOCTYPE html>
<html lang="en-gb">
<head>
	<!-- Page's title -->
	<title>Random &middot; Title</title>

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo URL_PATH; ?>assets/css/application.css" />

	<!-- Scripts -->
	<script src="<?php echo URL_PATH; ?>assets/css/application.js"></script>
	
	<meta name="description" content="This is a default Anchor CMS theme.'; ?>">

</head>
<body class="home">
  <div id="wrap">
  	<h1 id="logo">
  		<a href="<?php echo URL_PATH; ?>" title="Random">Random</a>
  	</h1>
    <?php echo $content; ?>
  </div>
<!--

	Who knows, maybe you want some analytics code in here, or a Twitter button?
	Either way, it's free for you to put what you want in here.

  -->
</body>
</html>