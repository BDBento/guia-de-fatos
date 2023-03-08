<?php obterDadosDaAPI(); ?>

<section class="container economia">
    
    <div class="economia-bloco">

        <div class="economia-titulo">
            <a href="<?php echo get_template_directory_uri().'/../../../category/economia/'; ?>"><h3>Guia Economia</h3></a>
        </div>

        <div class="economia-noticias">
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            "category_name"		 => 'economia'
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <a class="economia-post" href="<?php the_permalink();?>">
                <div class="economia-post-div">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="economia-txt">
                    <h3><strong><?php the_title();?></strong><span> - <?php the_time('d F Y');?> </span></h3>
                    <p class=""><?php the_excerpt(20); ?></p>
                </div> 
            </a>
                
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <a href="<?php echo get_template_directory_uri().'/../../../category/economia/'; ?>"><h4 class="economia-verMais">VER MAIS</h4></a>

        </div>
    </div>
    <div>
        <div class="economia-widget">
            <h3>Economia Hoje</h3>
            <div class="indicadores-financeiros-interno">
                <div id="cotacao_dolar"></div>
                <div id="cotacao_euro"></div>
                <div id="cotacao_bitcoin"></div>
            </div>
        </div>   

        <div class="economia-propaganda">
            <?php get_template_part( 'template-parts/home/publi_4'); ?>
        </div>
    </div>

    
</section>

        <div class="container publi_5">
            <?php get_template_part( 'template-parts/home/publi_5'); ?>
        </div>