<?php
class UsersController {
  function login() {
    global $request;
    if (strpos($request, 'admin') > -1) { layout('admin'); }
    if (current_user() !== false ||
         (isset($_POST['username']) && isset($_POST['password']) && User::login($_POST['username'], $_POST['password']) === true)) {
      header('Location: ' . URL_PATH . 'admin/');
    }
    render();
  }
  
  function logout() {
    session_destroy();
    header('Location: ' . URL_PATH);
  }
}