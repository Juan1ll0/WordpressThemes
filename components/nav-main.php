<?php
 wp_nav_menu( array(
    'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
    'menu_class' => 'nav', //Adding the class for dropdowns
    'container' => 'nav',
    'container_id' => 'navwrap', //Add CSS ID to the containter that wraps the menu.
    'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
    )
);
?>
