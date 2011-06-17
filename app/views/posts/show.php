<?php if (empty($post->css) === false) { echo '<link rel="stylesheet" href="' . URL_PATH . $post->slug . '.css" />'; } ?>
<div id="frame">
	<ul>
		<li><strong>Post ID:</strong> <?php echo $post->id; ?></li>
		<li><strong>Post Title:</strong> <?php echo $post->title; ?></li>
	</ul>
</div>

<article id="article">
<?php
//	Then get the HTML, given to us in the admin panel
	echo $post->content;
?>
</article>
<?php if (empty($post->js) === false) { echo '<script src="' . URL_PATH . $post->slug . '.js"></script>'; } ?>