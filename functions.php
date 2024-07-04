<?php 


function add_styles(){
    wp_enqueue_style( "font-awesome",get_template_directory_uri() . "/css/all.min.css");
    wp_enqueue_style( "bootstrap",get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style( "main",get_template_directory_uri() . "/css/main.css", array(),true, "all" );

}

function add_script(){
    wp_enqueue_script('jquery-core',false,array(),false,true);
    wp_enqueue_script('jquery-migrate',false,array(),false,true);
    wp_enqueue_script( "bootstrap", get_template_directory_uri() . "/js/bootstrap.bundle.min.js", array(), "1.0", true);
    wp_enqueue_script( "slick", get_template_directory_uri() . "/js/slick.min.js", array(), false, true);
    wp_enqueue_script( "main", get_template_directory_uri() . "/js/main.js", array(), "1.0", true);


}


add_action( "wp_enqueue_scripts", "add_styles" );
add_action( "wp_enqueue_scripts", "add_script" );



// Start Navbar
require_once("navwalker.php");
register_nav_menu("elzeroTheme", "Navigation Bar");
function add_navbar() {
    wp_nav_menu(array(
        'theme_location' => 'elzeroTheme',
        'container' => 'nav',
        'container_class' => 'ms-auto',
        'menu_class' => 'navbar-nav ms-auto mb-2 mb-md-0',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
}

// End Navbar


add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );

function generate_heading($title,$pragraph,$class="title-one"){
    $output = '';
    $output .= "<div class='title-box'>";
    $output .= "<h2 class='$class'>$title</h2>";
    $output .= "<p>$pragraph</p>";
    $output .= "</div>";
    return $output;
}



?>