<?php
layout('admin');

class Admin_PostsController {
  function index() {
    require_login();
    $posts = Post::all(array('order' => 'id'));
    render(array('posts' => $posts));
  }
  
  function edit($post) {
    require_login();
    $post = Post::find($post[1]);
    if (isset($_POST['post']) === true) {
      if ($post->update_attributes($_POST['post']) === true) {
        echo "<h1>Post updated successfully</h1>";
        return;
      }
      echo "<h1>Post failed to update</h1>";
    }
    render(array('post' => $post));
  }
  
  function create() {
    require_login();
    if (isset($_POST['post']) === true) {
      $post = new Post($_POST['post']);
      if ($post->save() === true) {
        echo "<h1>Post created successfully</h1>";
        return;
      }
      echo "<h1>Post failed to create</h1>";
    }
    render();
  }
}