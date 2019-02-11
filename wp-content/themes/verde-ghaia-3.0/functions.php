<?php
/**
 * risco-legal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package risco-legal
 */

if ( ! function_exists( 'risco_legal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function risco_legal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on risco-legal, use a find and replace
		 * to change 'risco-legal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'risco-legal', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'risco-legal' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'risco_legal_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'risco_legal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function risco_legal_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'risco_legal_content_width', 640 );
}
add_action( 'after_setup_theme', 'risco_legal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function risco_legal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'risco-legal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'risco-legal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'risco_legal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function risco_legal_scripts() {
	wp_enqueue_style( 'risco-legal-style', get_stylesheet_uri() );

	wp_enqueue_script( 'risco-legal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'risco-legal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'risco_legal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function add_theme_styles_scripts() {
 
	wp_enqueue_style( 'bootstrap3', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', 'all');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '', 'all');

	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '', 'all');

	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '', 'all');

	wp_enqueue_style( 'vg-styles', get_template_directory_uri() . '/assets/css/vg-styles.css', array(), '', 'all');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jQuery-v3.3.1.js', array (), '', true);

	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '', true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'add_theme_styles_scripts' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/* pagination */
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'><b>Páginas " . $paged . " de " . $numpages . "</b></span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

// Registers the new post type and taxonomy

function wpt_event_posttype() {
	register_post_type( 'biblioteca',
		array(
			'labels' => array(
				'name' => __( 'Biblioteca' ),
				'singular_name' => __( 'Ebook' ),
				'add_new' => __( 'Add Novo Ebook' ),
				'add_new_item' => __( 'Add Novo Ebook' ),
				'edit_item' => __( 'Editar Ebook' ),
				'new_item' => __( 'Add Novo Ebook' ),
				'view_item' => __( 'Ver' ),
				'search_items' => __( 'Buscar Ebook' ),
				'not_found' => __( 'No ebooks found' ),
				'not_found_in_trash' => __( 'No ebooks found in trash' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'capability_type' => 'post',
			'rewrite' => array("slug" => "biblioteca"), // Permalinks format
            'menu_position' => 5,
            'has_archive' => true,
		)
	);
}

add_action( 'init', 'wpt_event_posttype' );


add_action( 'init', 'create_book_taxonomies' );

// create taxonomies,  for the post type "biblioteca"
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Tipos', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Tipo', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Buscar Tipo', 'textdomain' ),
		'all_items'         => __( 'Todos os Tipos', 'textdomain' ),
        'parent_item'       => __( 'Tipo Parente', 'textdomain' ),
		'parent_item_colon' => __( 'Tipo Parente:', 'textdomain' ),		
		'edit_item'         => __( 'Editar Tipo', 'textdomain' ),
		'update_item'       => __( 'Atualizar Tipo', 'textdomain' ),
		'add_new_item'      => __( 'Add Novo Tipo', 'textdomain' ),
		'new_item_name'     => __( 'Novo Novo do Tipo', 'textdomain' ),
		'menu_name'         => __( 'Tipo', 'textdomain' ),
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
        'query_var' => true,
        'has_archive' => true,
		'rewrite' => array( 'slug' => 'biblioteca' , 'with_front' => false ),
	);

	register_taxonomy( 'tipo', array( 'biblioteca'), $args );
}

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt() {
	global $post;
	$text = get_sub_field('desc_curso'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 15; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

function create_grupo_hierarchical_taxonomy() {
 
    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI
     
      $labels = array(
        'name' => _x( 'Grupo', 'taxonomy general name' ),
        'singular_name' => _x( 'Grupo', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Grupo' ),
        'all_items' => __( 'Todos Grupos' ),
        'parent_item' => __( 'Grupo Parente' ),
        'parent_item_colon' => __( 'Grupo Parente:' ),
        'edit_item' => __( 'Editar Grupo' ), 
        'update_item' => __( 'Atualizar Grupo' ),
        'add_new_item' => __( 'Add Novo Grupo' ),
        'new_item_name' => __( 'New Topic Name' ),
        'menu_name' => __( 'Grupos' ),
      );    
     
    // Now register the taxonomy
     
      register_taxonomy('grupos',array('post'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'grupo' ),
      ));
     
    }
add_action( 'init', 'create_grupo_hierarchical_taxonomy', 0 );

function create_colunista_taxonomy() {
 
    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI
     
      $labels = array(
        'name' => _x( 'Colunista', 'taxonomy general name' ),
        'singular_name' => _x( 'Colunista', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Colunista' ),
        'all_items' => __( 'Todos Colunistaa' ),
        'parent_item' => __( 'Colunista Parente' ),
        'parent_item_colon' => __( 'Colunista Parente:' ),
        'edit_item' => __( 'Editar Colunista' ), 
        'update_item' => __( 'Atualizar Colunista' ),
        'add_new_item' => __( 'Add Novo Colunista' ),
        'new_item_name' => __( 'New Topic Name' ),
        'menu_name' => __( 'Colunistas' ),
      );    
     
    // Now register the taxonomy
     
      register_taxonomy('colunista',array('post'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'colunista' ),
        'show_admin_column' => false,
      ));
     
    }
add_action( 'init', 'create_colunista_taxonomy', 0 );