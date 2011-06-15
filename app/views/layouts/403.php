	<ul id="list">
		<h2>Error 403</h2>
		<p>Sadly, you are not allowed to access this page. Please try signing in first.</p>
	</ul>
<?php
require_once BASE_PATH . 'app/controllers/users.php';
UsersController::login();