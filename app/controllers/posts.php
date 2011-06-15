<?php
class PostsController {
  function index() {
    $posts = Post::all(array('order' => 'id DESC'));
    render(array('posts' => $posts));
  }
  
  function show($post) {
    if (isset($post[1]) === true) {
      $post = Post::find($post[1]);
    } else {
      $post = Post::find_by_slug($post[0]);
    }
    
    if ($post === false) { throw_404(); }
    render(array('post' => $post));
  }
  
  function latest() {
    header('Location: ' . URL_PATH . Post::find(array('select' => 'slug', 'limit' => 1, 'order' => 'id DESC'))->slug);
  }
  
  function random() {
      header('Location: ' . URL_PATH . Post::find(array('select' => 'slug', 'limit' => 1, 'order' => 'RAND()'))->slug);
  }
}