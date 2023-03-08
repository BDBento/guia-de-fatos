<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            // Se for FrontPage or Home
            if(is_home() || is_front_page()){
                echo get_bloginfo('name') . ' - ' . get_bloginfo('description');
            } else {
                 wp_title( ' - ', true, 'right' ); echo  bloginfo('name');
            }
        ?>
    </title>
    <?php wp_head(); ?>
    <link id="bootstrap" rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/bootstrap.min.css';?>" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link id="lightslider" rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/lightslider.css';?>" type="text/css" media="all">
    <link id="stylo-pg" rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/main.css';?>" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
  

    <?php
	    if ( is_single() ) {
		    echo "<meta property='og:title' content='" . get_the_title() . "'>\n";
		    echo "<meta property='og:description' content='" . get_the_excerpt() . "'>\n";
		    echo "<meta property='og:image' content='" . get_the_post_thumbnail_url() . "'>\n";
            echo "<meta property='og:image:width' content='960' /> \n";
            echo "<meta property='og:image:height' content='960' />\n";
		    echo "<meta property='og:type' content='article'>\n";
		    echo "<meta property='og:url' content='" . get_permalink() . "'>\n";	
	    }
    ?>


</head>
<body <?php body_class(); ?> >
    <div id="page" class="site">
        <header>


                    <div class="busca">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input
                                class="search-field"
                                type="text"
                                id="buscarPortal"
                                placeholder="<?php echo esc_attr_x( 'Pesquisar …', 'placeholder' ) ?>"
                                value="<?php echo get_search_query() ?>" name="s"
                                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
                            />
                            <button class="btn-pesquisar">&#128269;</button>
                        </form>
                    </div>


            <section class="top-bar1">
                    <a href="#" class="logo-topo">
                        <div class="logo-meio"><?php the_custom_logo();?></div>  <!--adicionado para personalizaçao-->
                    </a>
            </section>


                    

            <section class="barra-menu">
                

                <nav class="menu-principal main-menu">
        <div class="container">
            <div class="row">
                <div class="col-4 d-md-none">
                    <button id="menuBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i> MENU
                    </button>
                </div>
                <div class="col-12" id="menu_topo1">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu_topo',
                                'container'       => null,
                                'menu_class'      => 'nav justify-content-between',
                                'depth'           => 4, // 1 = no dropdowns, 2 = with dropdowns. 
                                'container'       => 'li',      
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbarTogglerDemo01',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            )
                        );
                    ?>

                    </div>

                </div>
            </div>
        </div>
    </nav>




            </section>
        </header>
     
