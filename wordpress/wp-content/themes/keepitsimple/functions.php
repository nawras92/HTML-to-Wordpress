<?php

// Register KeepItSimple Widgets
function keepitsimple_register_sidebars(){
  $sidebar = array(
             "name" => "Main Sidebar",
             "id"   => "sidebar",
             "before_widget" => "<div class='widget'>",
             "after_widget" => "</div>",
             "before_title" => "<h3>",
             "after_title" => "</h3>"
  );

     register_sidebar($sidebar);


}
   add_action('widgets_init','keepitsimple_register_sidebars');
