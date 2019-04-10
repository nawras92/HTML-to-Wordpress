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

$footer1 = array(
                "name" => "footer 1",
                "id"   => "footer1",
                "before_widget" => "<div>",
                "after_widget" => "</div>",
                "before_title" => "<h3>",
                "after_title" => "</h3>"
     );

     register_sidebar($footer1);


     $footer2 = array(
                     "name" => "footer 2",
                     "id"   => "footer2",
                     "before_widget" => "<div>",
                     "after_widget" => "</div>",
                     "before_title" => "<h3>",
                     "after_title" => "</h3>"
          );

    register_sidebar($footer2);


    $footer3 = array(
                         "name" => "footer 3",
                         "id"   => "footer3",
                         "before_widget" => "<div>",
                         "after_widget" => "</div>",
                         "before_title" => "<h3>",
                         "after_title" => "</h3>"
              );

    register_sidebar($footer3);



}
   add_action('widgets_init','keepitsimple_register_sidebars');
