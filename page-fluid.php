<?php
/**
* Template Name: Página fluid
*
* @package WordPress
* @author bbento
* @since First Version
*/

    // Cabecalho
    get_header();?>
    <section id="page-fluid">
        <div class="container-fluid">

            <div class="row">
            <?php // Loop Archives
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <div class="col-12">
                                <h1 class="green" id="page-title">
                                    <?php the_title();?>
                                </h1>
                                <?php // Template Looping
                                    the_content( );
                                ?>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <?php
    // Template Rodape
   
    get_footer();
