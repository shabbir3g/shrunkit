<?php
/**
 * shrunkit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shrunkit
 */

if ( ! function_exists( 'shrunkit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shrunkit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on shrunkit, use a find and replace
		 * to change 'shrunkit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shrunkit', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="navbar-nav">';
			echo '<li class="current-menu-item"><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

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

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'Sale', 'shrunkit' ),
				'singular_name'      => __( 'Sale', 'shrunkit' ),
				'menu_name'          => __( 'Sale', 'shrunkit' ),
				'name_admin_bar'     => __( 'Sale', 'shrunkit' ),
				'add_new'            => __( 'Add Sale', 'shrunkit' ),
				'add_new_item'       => __( 'Add New Sale', 'shrunkit' ),
				'new_item'           => __( 'New Sale', 'shrunkit' ),
				'edit_item'          => __( 'Edit Sale', 'shrunkit' ),
				'view_item'          => __( 'View Sale', 'shrunkit' ),
				'all_items'          => __( 'All Sales', 'shrunkit' ),
				'search_items'       => __( 'Search Sale', 'shrunkit' ),
				'parent_item_colon'  => __( 'Parent Sale:', 'shrunkit' ),
				'not_found'          => __( 'No Sale found.', 'shrunkit' ),
				'not_found_in_trash' => __( 'No Sale found in Trash.', 'shrunkit' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'shrunkit' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'sale' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-cart',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

			register_post_type( 'sale', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'shrunkit' ),
				'singular_name'     => _x( 'News Category', 'shrunkit' ),
				'search_items'      => __( 'Search Category', 'shrunkit' ),
				'all_items'         => __( 'All Categories', 'shrunkit' ),
				'parent_item'       => __( 'Parent Category', 'shrunkit' ),
				'parent_item_colon' => __( 'Parent Category:', 'shrunkit' ),
				'edit_item'         => __( 'Edit Category', 'shrunkit' ),
				'update_item'       => __( 'Update Category', 'shrunkit' ),
				'add_new_item'      => __( 'Add New Category', 'shrunkit' ),
				'new_item_name'     => __( 'New Category Name', 'shrunkit' ),
				'menu_name'         => __( 'Category', 'shrunkit' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'newscategory', array( 'news' ), $args );

		 
	
	}
endif;
add_action( 'after_setup_theme', 'shrunkit_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shrunkit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'shrunkit' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add Blog widgets here.', 'shrunkit' ),
		'before_widget' => '<div class="related-news"> ',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'shrunkit_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */


function shrunkit_fonts_url() {



		$fonts = array(
		'Pacifico&display=swap',
		'Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap',
		'Headland+One&display=swap',
		);
		
		
		
		$shrunkitfonts = add_query_arg(array(
			'family'	=> urlencode(implode('|',$fonts)),
			'subset'	=> urlencode('latin'),
			
			
		),'http://fonts.googleapis.com/css');
		
		
		return $shrunkitfonts;




}








function shrunkit_scripts() {
	


	wp_enqueue_style( 'shrunkit-fonts', shrunkit_fonts_url(), array(), null );


	wp_enqueue_style( 'shrunkit-fontawesome', get_template_directory_uri().'/css/fontawesome.min.css' );
	wp_enqueue_style( 'shrunkit-carousel', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'shrunkit-default', get_template_directory_uri().'/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'shrunkit-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'shrunkit-bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'shrunkit-bootstrap-reboot', get_template_directory_uri().'/css/bootstrap-reboot.min.css' );
	wp_enqueue_style( 'shrunkit-main', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'shrunkit-style', get_stylesheet_uri() );
	wp_enqueue_style( 'shrunkit-responsive', get_template_directory_uri().'/css/responsive.css' );
	

	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'davide-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-bootstrap.bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
	


}
add_action( 'wp_enqueue_scripts', 'shrunkit_scripts' );


/**
 * Redux include
 */
require get_template_directory() . '/inc/opt/ReduxCore/framework.php';
require get_template_directory() . '/inc/opt/sample/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';




// woocommerce development 

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end',10);
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close',5);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);



add_action('woocommerce_before_main_content',function(){ ?>


<section class="news-area"> 
			<div class="container">
				<h4 class="pacifico-title">Our Best</h4>
				<div class="gallery-title"> 
					<div class="product-title"> 
						<h2>Product <span>Gallery</span></h2>
					</div>
				</div>
				
<?php }, 12);

add_action('woocommerce_after_main_content',function(){ ?>
			</div>
	</section>
<?php }, 12);




add_action('woocommerce_before_shop_loop_item_title',function(){ ?>


	<div class="single-product"> 
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<div class="image-button"> 

			<a href="#">Sold</a>
				<?php 


			global $product;


			echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
				sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>Order Now</a>',
					esc_url( $product->add_to_cart_url() ),
					esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
					esc_attr( isset( $args['class'] ) ? $args['class'] : '' ),
					isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
					esc_html( $product->add_to_cart_text() )
				),
			$product, $args );


				 ?>
				<!-- <a href="#">Sold</a> -->
				
			</div>
		</div>


<?php }, 9);


add_action('woocommerce_after_shop_loop_item',function(){ ?>



<div class="bottom-product"> 
		<div class="product-name shrunkit-left"> 
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>

		<?php // global $product; echo $product->get_price_html(); ?>

		<ul class="rating shrunkit-right"> 
			<li><i class="fas fa-star"></i></li>
			<li><i class="fas fa-star"></i></li>
			<li><i class="fas fa-star"></i></li>
			<li><i class="fas fa-star-half-alt"></i></li>
			<li><i class="far fa-star"></i></li>
		</ul>
	</div>


<?php }, 10);






