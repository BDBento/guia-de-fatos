<section class="container guiaPolitico">
    
    <div class="guiaPolitico-bloco">
        <div class="guiaPolitico-titulo">
            <a href="<?php echo get_template_directory_uri().'/../../../category/guia-politico/'; ?>"><h3>Guia Politico</h3></a>
        </div>

        <div class="guiaPolitico-noticias">
           <div class="guiaPolitico-noticias-p1">
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 1,
                        "category_name"		 => 'politico'
                    );
                    $the_query = new WP_Query( $args ); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    
                    <a class="guiaPolitico-post" href="<?php the_permalink();?>">
                        <div class="guiaPolitico-post-div">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                            <h3><strong><?php the_title();?></strong><span> - <?php the_time('d F Y');?> </span></h3>
                            <p class="guiaPolitico-txt"><?php the_excerpt(20); ?></p>
                        </div> 
                    </a>
                        
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php endif; ?> 
                
            </div> 
            <div class="guiaPolitico-noticias-p2">
                <?php get_template_part('template-parts/home/guiaPoliticoMini') ;?>
            </div>
        </div>
            <a href="<?php echo get_template_directory_uri().'/../../../category/guia-politico/'; ?>"><h4 class="guiaPolitico-verMais">VER MAIS</h4></a>
        
    </div>

    <div>
        <div class="guiaPolitico-propaganda">
            <div class="guiaPolitico-propaganda-6">
                <?php get_template_part( 'template-parts/home/publi_6'); ?>
            </div>
        </div>
    </div>
                    
</section>

