<?php
layout('admin');

class AdminController {
  function settings() {
    require_login();
    if (isset($_POST['sitename']) === true) {
      $update = file_put_contents(BASE_PATH . 'config/settings.php', '<?php
      
      /******************************************************
       *
       *		General settings
       *
       ******************************************************
       *
       *		Anchor saves your site\'s settings in this
       *		file, so you can edit them here, or in the
       *		admin panel.
       */
       
      //	Site name                  What\'s your blog called?
      	$sitename = \'' . htmlentities($_POST['sitename'], ENT_QUOTES) .'\';
      
      //	Current theme        The name of the theme\'s folder
      	$theme = \'' . $_POST['theme'] .'\';
      	
      //	Clean URLs	   Can your server support mod_rewrite?
      	$clean_urls = ' . (isset($_POST['clean_urls']) ? 'true' : 'false') . ';
      	
      //	Calling home      Do you want to check for updates?
      	$callhome = ' . (isset($_POST['callhome']) ? 'true' : 'false') . ';
      
      ?>');
    }
    include BASE_PATH . 'config/settings.php';
    render(array('sitename' => $sitename, 'theme' => $theme, 'clean_urls' => $clean_urls, 'callhome' => $callhome));
  }
}