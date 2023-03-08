<section class="container guiaPolicial">
    
    <div class="guiaPolicial-bloco">
        <div class="guiaPolicial-titulo">
            <a href="<?php echo get_template_directory_uri().'/../../../category/policial/'; ?>"><h3>Guia policial</h3></a>
        </div>

        <div class="guiaPolicial-policial">
           <div class="guiaPolicial-policial-p1">
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 1,
                        "category_name"		 => 'policial'
                    );
                    $the_query = new WP_Query( $args ); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    
                    <a class="guiaPolicial-post" href="<?php the_permalink();?>">
                        <div class="guiaPolicial-post-div">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                            <h3><strong><?php the_title();?></strong><span> - <?php the_time('d F Y');?> </span></h3>
                            <p class="guiaPolicial-txt"><?php the_excerpt(20); ?></p>
                        </div> 
                    </a>
                        
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php endif; ?> 
                
            </div> 
            <div class="guiaPolicial-policial-p2">
                <?php get_template_part('template-parts/home/guiaPolicialMini') ;?>
            </div>
            <div class="guiaPolicial-policial-p3">
                <?php get_template_part('template-parts/home/guiaPolicialMini_2') ;?>
            </div>
        </div>
            <a href="<?php echo get_template_directory_uri().'/../../../category/policial/'; ?>"><h4 class="guiaPolicial-verMais">VER MAIS</h4></a>
        
    </div>

                    
</section>

