<?php
layout('admin');

class Admin_UsersController {
  function index() {
    require_login();
    $users = User::all();
    render(array('users' => $users));
  }
  
  function edit($user) {
    require_login();
    $user = User::find($user[1]);
    if (isset($_POST['user']) === true) {
      if ($user->update_attributes($_POST['user']) === true) {
        echo "<h1>User updated successfully</h1>";
        return;
      }
      echo "<h1>User failed to update</h1>";
    }
    render(array('user' => $user));
  }
  
  function create() {
    require_login();
    if (isset($_POST['user']) === true) {
      $user = new User($_POST['user']);
      if ($user->save() === true) {
        echo "<h1>User created successfully</h1>";
        return;
      }
      echo "<h1>User failed to create</h1>";
    }
    render();
  }
}