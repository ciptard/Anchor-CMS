<?php
session_start();
$current_user = null;

function current_user() {
  global $current_user;
  if ($current_user == null) {
    if (isset($_SESSION['login']) === true) {
      $current_user = User::find_by_username_or_email($_SESSION['login'], $_SESSION['login']);
      if ($current_user == null) { $current_user = false; }
      return $current_user;
    } else { return $current_user = false; }
  }
}

function is_logged_in() {
  return (current_user() === false);
}

function require_login() {
  if (current_user() === false) {
    throw_403();
  }
}

class User extends ActiveRecord\Model {
  public function login($login, $password) {
    $user = User::find_by_username_or_email($login, $login);
    if ($user == null) { return false; }
    
    preg_match('/\$.{2}\$(\d{2})\$/', $user->password, $work_factor);
    
    require BASE_PATH . 'lib/phpass/PasswordHash.php';
    $hasher = new PasswordHash($work_factor[1], FALSE);
    
    if ($hasher->CheckPassword($password, $user->password)) {
      if ($work_factor[1] != PASSWORD_WORK_FACTOR) {
        $hasher = new PasswordHash(PASSWORD_WORK_FACTOR, FALSE);
        $user->update_attributes(array('password' => $hasher->HashPassword($password)));
      }
      session_destroy();
      session_start();
      $_SESSION['login'] = $login;
      return true;
    }
    return false;
  }
  
  public function logout() {
    session_destroy();
    session_start();
    $current_user = false;
  }
}
?>