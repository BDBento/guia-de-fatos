<?php 
//Register Custom Navigation Walker-------------------------------------------------------------------------------------
function register_navwalker(){
	require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function registrando_menu(){
    register_nav_menus(
        array(
            'menu_topo'     => 'menu topo',
            'menu_footer'   => 'menu footer'
        )
    );
}
add_action('after_setup_theme', 'registrando_menu',0);

function add_theme_scripts(){
   
    wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.js', array('jquery'),'3.6.0', true );
    
    wp_enqueue_script( 'bootstrap-1', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'fancyboxjs', get_template_directory_uri() . '/vendors/fancybox-master/dist/jquery.fancybox.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/assets/js/lightslider.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// add funtions parts
get_template_part( 'theme-settings/posts-functions');

function titulo($max) {
    $titulo = get_the_title(); /* ou você pode usar get_the_title() */
    $getlength = strlen($titulo);
    $thelength = $max;
    if($getlength > $max) {
        echo substr($titulo, 0, $thelength) . "...";
    } else {
        echo $titulo;
    }
}
// Theme Title Support
add_theme_support('title-tag');
// Theme Thumbnail Support and Sizes
add_theme_support('post-thumbnails');
// Theme Custom Logo Support
add_theme_support( 'custom-logo' );
// Theme Custom Header Support
add_theme_support( 'custom-header' );
// Theme Image Size 570
add_image_size( 'loop', 348, 261, true );
//set_post_thumbnail_size( 50, 50, true );
add_post_type_support( 'page', 'excerpt' ); 



// exept length
function wpdocs_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );





register_sidebar(array(
	'name' => __( 'Carrossel publicidade (1300x250px)' ),
	'id' => 'publicidade_1',
	'description' => __( 'publicidade (1300x250px)' ),
	'before_widget' => '<section class="container publicidade1">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'Guia mais publicidade (400X300px)' ),
	'id' => 'publicidade_2',
	'description' => __( 'publicidade (400X300px)' ),
	'before_widget' => '<section class="container publicidade2">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'Guia mais publicidade (1300x250px)' ),
	'id' => 'publicidade_3',
	'description' => __( 'publicidade (400X300px)' ),
	'before_widget' => '<section class="container publicidade3">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'Guia Economia publicidade 2 x (400X300px)' ),
	'id' => 'publicidade_4',
	'description' => __( '2 x publicidade (400X300px)' ),
	'before_widget' => '<section class="container publicidade4">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'Guia Economia publicidade (1300x250px)' ),
	'id' => 'publicidade_5',
	'description' => __( 'Guia Economia publicidade (1300x250px)' ),
	'before_widget' => '<div class="economia-personalizado">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'Guia politico publicidade 2 x (400X300px)' ),
	'id' => 'publicidade_6',
	'description' => __( '2 x publicidade (400X300px)' ),
	'before_widget' => '<section class="container publicidade6">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'sidebar categoria de posts' ),
	'id' => 'sidebar-categoria-de-posts',
	'description' => __( 'sidebar categoria de posts' ),
	'before_widget' => '<div class="sidebar-personalizado">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __( 'footer' ),
	'id' => 'area-footer',
	'description' => __( 'footer personalizado' ),
	'before_widget' => '<div class="footer-personalizado">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));


function wpbr_home_settings( $wp_customize ) {

    $wp_customize->add_setting( 'publicidade_1', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'publicidade_1', array(
		'label'      => 'publicidade_1',
		'section'    => 'home_settings',
		'settings'   => 'publicidade_1',
	) );

    $wp_customize->add_setting( 'publicidade_2', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'publicidade_2', array(
		'label'      => 'publicidade_2',
		'section'    => 'home_settings',
		'settings'   => 'publicidade_2',
	) );

    $wp_customize->add_setting( 'publicidade_3', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'publicidade_3', array(
		'label'      => 'publicidade_3',
		'section'    => 'home_settings',
		'settings'   => 'publicidade_3',
	) );

    $wp_customize->add_setting( 'publicidade_4', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'publicidade_4', array(
		'label'      => 'publicidade_4',
		'section'    => 'home_settings',
		'settings'   => 'publicidade_4',
	) );

	$wp_customize->add_setting( 'publicidade_5', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'publicidade_5', array(
		'label'      => 'publicidade_5',
		'section'    => 'home_settings',
		'settings'   => 'publicidade_5',
	) );

	$wp_customize->add_setting( 'publicidade_6', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'publicidade_6', array(
		'label'      => 'publicidade_6',
		'section'    => 'home_settings',
		'settings'   => 'publicidade_6',
	) );


	$wp_customize->add_setting( 'sidebar-categoria-de-posts', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'sidebar-categoria-de-posts', array(
		'label'      => 'sidebar-categoria-de-posts',
		'section'    => 'home_settings',
		'settings'   => 'sidebar-categoria-de-posts',
	) );


    $wp_customize->add_setting( 'footer', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'footer', array(
		'label'      => 'footer',
		'section'    => 'home_settings',
		'settings'   => 'footer-personalizado',
	) );
}
add_action( 'customize_register', 'wpbr_home_settings' );


function paginacao() {
    if( is_singular() )
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="paginacao"><ul  class="list-unstyled list-inline">' . "\n";
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="txt">%s</li>' . "\n", get_previous_posts_link() );
    /** Link para a primeira página, mais reticências se necessário */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)),'1');
        if ( ! in_array( 2, $links ) )
        echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
        echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="txt">%s</li>' . "\n", get_next_posts_link() );
    echo '</ul"></div>' . "\n";
}






add_action( 'after_setup_theme', 'theme_setup' ); 

function theme_setup() { 
     add_action( 'init', 'add_support_to_pages' );
     add_filter( 'excerpt_length', 'define_excerpt_length' );
     add_filter( 'excerpt_more', 'define_excerpt_more' );
} 

function add_support_to_pages() { 
     add_post_type_support( 'page', 'excerpt' ); 
}

function define_excerpt_length( $length ) {
     return 40;
}

function define_excerpt_more( $default_more ) {
    return ' o que você quiser';
}




function obterDadosDaAPI() {
?>
<script>
    // Obtém os dados da API
    fetch('https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL')
  .then(response => response.json())
  .then(data => {
    // Acessa a cotação do dólar em relação ao real
    let cotacaoDolar = data.USDBRL.high;
    // Acessa a cotação do euro em relação ao real
    let cotacaoEuro = data.EURBRL.high;
    console.log(`Cotação do euro: ${cotacaoEuro}`);
    // Acessa a cotação do bitcoin em relação ao real
    let cotacaoBitcoin = data.BTCBRL.high;
    console.log(`Cotação do bitcoin: ${cotacaoBitcoin}`);

    document.querySelector("#cotacao_dolar").innerHTML = `<p>Cotação do dólar:</p><p>R$${cotacaoDolar}</p>`;
    document.querySelector("#cotacao_euro").innerHTML = `<p>Cotação do euro:</p><p> R$${cotacaoEuro}</p>`;
    document.querySelector("#cotacao_bitcoin").innerHTML = `<p>Cotação do bitcoin:</p><p> R$${cotacaoBitcoin}</p>`;
  })
  .catch(error => console.log(error));
</script>
<?php
  }


