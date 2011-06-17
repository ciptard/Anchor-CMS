<?php
class Post extends ActiveRecord\Model {
  public function set_css($file) {
    if (empty($file) === false) { $this->assign_attribute('css', file_get_contents($file)); }
  }
  
  public function set_js($file) {
    if (empty($file) === false) { $this->assign_attribute('ss', file_get_contents($file)); }
  }
}