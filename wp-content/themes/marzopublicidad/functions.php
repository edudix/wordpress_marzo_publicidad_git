<?php
// Remove emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// Remove wp_head generators
remove_action('wp_head', 'wp_generator');
// Remove manifest
remove_action( 'wp_head', 'wlwmanifest_link');
// Remove prefetch
remove_action( 'wp_head', 'wp_resource_hints', 2 );
//Remove api
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
//Remove RSD
remove_action('wp_head', 'rsd_link');

function add_custom_types_to_tax( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

        // Get all your post types
        $post_types = get_post_types();

        $query->set( 'post_type', $post_types );
        return $query;
    }
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );

//Register our sidebars and widgetized areas.
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_title'   => '</h2>',
        ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//Remove embed.js
function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');

function my_theme_scripts() {
    //wp_enqueue_script( 'main', get_template_directory_uri() . 'assets/js/main.js', array( 'jquery' ), 'latest', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// User menus
function register_my_menu() {
	register_nav_menu('main-menu',__( 'Main menu' ));
}
add_action( 'init', 'register_my_menu' );

// Internationalization
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('marzopublicidad', get_template_directory() . '/langs');
}

// Add post thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'full_width', 960);
add_image_size('medium_width', 430);
add_image_size('small_width', 320);
add_image_size( 'smallest_width', 100);

/*
* Creating a function to create our CPT
*/

function custom_post_type_proyectos() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Proyectos', 'Post Type General Name', 'marzopublicidad' ),
        'singular_name'       => _x( 'Proyecto', 'Post Type Singular Name', 'marzopublicidad' ),
        'menu_name'           => __( 'Proyectos', 'marzopublicidad' ),
        'parent_item_colon'   => __( 'Proyecto padre', 'marzopublicidad' ),
        'all_items'           => __( 'Todos los Proyectos', 'marzopublicidad' ),
        'view_item'           => __( 'Ver proyecto', 'marzopublicidad' ),
        'add_new_item'        => __( 'Añadir nuevo proyecto', 'marzopublicidad' ),
        'add_new'             => __( 'Añadir nuevo', 'marzopublicidad' ),
        'edit_item'           => __( 'Editar proyecto', 'marzopublicidad' ),
        'update_item'         => __( 'Actualizar proyecto', 'marzopublicidad' ),
        'search_items'        => __( 'Buscar proyecto', 'marzopublicidad' ),
        'not_found'           => __( 'No encontrado', 'marzopublicidad' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'marzopublicidad' ),
        );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'proyectos', 'marzopublicidad' ),
        'description'         => __( 'proyectos creados por Marzo Publicidad', 'marzopublicidad' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'proyectos' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'taxonomies'          => array( 'category' ),
        'capability_type'     => 'page',
        );

    // Registering your Custom Post Type
    register_post_type( 'proyectos', $args );

}
add_action( 'init', 'custom_post_type_proyectos', 0 );
function custom_post_type_servicios() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Servicios', 'Post Type General Name', 'marzopublicidad' ),
        'singular_name'       => _x( 'Servicio', 'Post Type Singular Name', 'marzopublicidad' ),
        'menu_name'           => __( 'Servicios', 'marzopublicidad' ),
        'parent_item_colon'   => __( 'Servicio padre', 'marzopublicidad' ),
        'all_items'           => __( 'Todos los Servicios', 'marzopublicidad' ),
        'view_item'           => __( 'Ver servicio', 'marzopublicidad' ),
        'add_new_item'        => __( 'Añadir nuevo servicio', 'marzopublicidad' ),
        'add_new'             => __( 'Añadir nuevo', 'marzopublicidad' ),
        'edit_item'           => __( 'Editar servicio', 'marzopublicidad' ),
        'update_item'         => __( 'Actualizar servicio', 'marzopublicidad' ),
        'search_items'        => __( 'Buscar servicio', 'marzopublicidad' ),
        'not_found'           => __( 'No encontrado', 'marzopublicidad' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'marzopublicidad' ),
        );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'servicios', 'marzopublicidad' ),
        'description'         => __( 'servicios creados por Marzo Publicidad', 'marzopublicidad' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'servicios' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
        );

    // Registering your Custom Post Type
    register_post_type( 'servicios', $args );

}
add_action( 'init', 'custom_post_type_servicios', 0 );
