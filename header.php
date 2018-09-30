<?php
// This is the header page that will show up at the top 
// of every page that you call the get_header() php function.

// --- Set a static front page ---
// Set a static front page by going to your Wordpress admin page (after you created a 'Home' Page)
// and go to Settings > Reading > change Your Homepage Displays to a static page.
// Then set the Homepage to your created page.
// Doing this will allow you to have 'Home' in your navigation menu and actually
// navigate to the front-page

// --- Create a navigation menu with your pages ---
// Go to your Wordpress admin page (need at least one page created)
// and go to Appearance > Menus .
// Create a menu and name it 'Primary' and make sure the 'Display location' is checked 'Primary'
// Now your menu will show up at the top of the screen using the Bootstrap_Navwalker
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">
    <title>In The Beginning</title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light" role="navigation">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <h1>1:1</h1><p>In The Beginning</p>
        </a>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarToggle',
                'menu_class'        => 'nav navbar-nav ml-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>   
    </nav>
    <div>