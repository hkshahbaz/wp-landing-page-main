<?php

    // The sidebar
    // @package Wordpress
    // @sub package Spartans rur

    if(!is_active_sidebar('spartans-sidebar-1')){
        return;
    }
?>
<aside id="spartans-sidebar" class="widget-area" role="complementary">
<?php dynamic_sidebar('spartans-sidebar-1');
?>

</aside>