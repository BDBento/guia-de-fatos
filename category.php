<?php
    // Cabecalho
    get_header();?>
    <section class="lista-categorias">
        <div class="container lista-categorias-box">

            <div class="row">
                <div class="col-12">
                    <h1 class="categorias-pg-titulo"><?php single_cat_title(); ?></h1>
                </div>
                <?php // Loop Archives
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <div class="lista-categorias-post col-12 col-md-6 col-lg-3">
                                <?php // Template Looping
                                    get_template_part( 'template-parts/loop/post');
                                ?>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
                <div class="col-12">
                    <?php // Paginação
                        paginacao();
                    ?>
                </div>
              

                <?php get_template_part( 'template-parts/home/publi_1'); ?>
                
            </div>
        </div>
      
    </section>
    <?php
    // Template Rodape
    get_footer();
