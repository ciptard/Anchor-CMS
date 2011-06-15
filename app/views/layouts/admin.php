<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo URL_PATH; ?>stylesheets/admin.css" />
		<title>random &middot; random</title>
	</head>
  <body class="admin">
  	<div id="header">
  		<h2>random</h2>
  		<?php if(current_user() !== false) { ?><a id="logout" href="<?php echo URL_PATH; ?>admin/logout">Logout</a><?php } ?>
  	</div>
    <?php render('admin/_menu'); ?>
    <div id="content">
      <div id="left">
        <?php echo $content; ?>
      </div>
      <div id="right">
      	<h1>System Check</h1>
      </div>
    </div>
  </body>
</html>