<?php function time_ago($a) { }; ?>
<h1>Users <a href="<?php echo URL_PATH; ?>admin/users/new">+ Add A User</a></h1>
<ul id="list">
<?php
foreach ($users as $user) {
	echo '<li><a href="' . URL_PATH . 'admin/users/edit/' . $user->id . '" title="' . $user->username . '">' . $user->username . '<img src="' . URL_PATH . 'assets/img/edit_link.png" alt="Edit this user" /></a></li>';
}
?>
</ul>