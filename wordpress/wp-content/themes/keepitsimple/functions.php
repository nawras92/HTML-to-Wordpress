<?php

function keepitsimple_register_sidebars(){
  $sidebar1 = array(
             "name" => "Main Sidebar",
             "id"   => "sidebar1",
             "before_widget" => "<div>",
             "after_widget" => "</div>",
             "before_title" => "<h3>",
             "after_title" => "</h3>"
  );

  $sidebar2 = array(
             "name" => "Sidebar 2",
             "id"   => "sidebar2",
             "before_widget" => "<li>",
             "after_widget" => "</li>",
             "before_title" => "<h4>",
             "after_title" => "</h4>"
  );

  $sidebar3 = array(
             "name" => "Sidebar 3",
             "id"   => "sidebar3",
             "before_widget" => "<li>",
             "after_widget" => "</li>",
             "before_title" => "<h4>",
             "after_title" => "</h4>"
  );

     register_sidebar($sidebar1);
     register_sidebar($sidebar2);
     register_sidebar($sidebar3);

}
   add_action('widgets_init','keepitsimple_register_sidebars');
