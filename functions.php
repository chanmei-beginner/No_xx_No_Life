<?php
function mytheme_setup() {
add_theme_support( 'wp-block-styles' );
	
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 
		'style', 
		'script' 
	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
		register_nav_menus( array(
		'primary' => 'ナビゲーション'
	) );
	}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_enqueue() {
	wp_enqueue_style( 
		'mytheme-style', 
		get_stylesheet_uri(),
		array(),
		filemtime( get_theme_file_path( 'style.css' ) )
	);
	
	wp_enqueue_style( 
    'responsive-style',
    get_template_directory_uri() . '/responsive.css' ,
    array(),
	 filemtime( get_theme_file_path( 'responsive.css' ) )
   );
	
	wp_enqueue_style( 
		'myfonts', 
		'https://fonts.googleapis.com/css?family=Indie+Flower&display=swap', 
		array(), 
		null 
	);
  wp_enqueue_style( 
		'dashicons' 
	);
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

function mytheme_widgets() {

	// ウィジェットエリアを登録
	register_sidebar( array(
		'id' => 'sidebar-1',
		'name' => 'フッターメニュー',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>'
	) );

}
add_action( 'widgets_init', 'mytheme_widgets' );

function mytheme_ie() {
	global $is_IE;
	if ($is_IE) {

		// css-var-polyfill.jsを読み込み
		wp_enqueue_script( 
			'mytheme-css-var-polyfill', 
			get_theme_file_uri( 'ie/css-var-polyfill.js' ),
			array(),
			null,
			true
		);

		// ofi.min.jsを読み込み
		wp_enqueue_script( 
			'mytheme-ofi', 
			get_theme_file_uri( 'ie/ofi.min.js' ),
			array(),
			null,
			true
		);
		
		wp_add_inline_script( 
			'mytheme-ofi',
			'jQuery(function($){ objectFitImages() });'
		);

		wp_add_inline_style( 
			'mytheme-style',
			'img {font-family: "object-fit: cover";}'
		);

		// mainに対応
		wp_add_inline_style( 
			'mytheme-style',
			'main {display: block;}'
		);

	}
}
add_action( 'wp_enqueue_scripts', 'mytheme_ie' );

register_block_style(
	'core/image',
	array(
		'name' => 'mycard',
		'label' => 'カード型',
		'inline_style' => 
			'.is-style-mycard {
				padding: 10px;
				border: solid 1px gray;
				box-shadow: 5px 5px 5px gray;
			}'
	)
);

function fb_search_filter($query) {
  if ( !$query -> is_admin && $query -> is_search) {
    $query -> set('post__not_in', array(394, 401,410) );
  }
  return $query;
}
add_filter( 'pre_get_posts', 'fb_search_filter' );


function twpp_change_excerpt_length( $length ) {
	return 50; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );



function add_class_the_tags($html){
	$postid = get_the_ID();
	$html = str_replace('<a','<a class="contents-tag"',$html);
	return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);