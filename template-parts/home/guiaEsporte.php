<section class="container guia">
    
    <div class="guia-bloco">
        <div class="guia-titulo">
            <a href="<?php echo get_template_directory_uri().'/../../../category/esporte/'; ?>"><h3>GUIA ESPORTE</h3></a>
        </div>

        <div class="guia-noticias">
            
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 4,
                        "category_name"		 => 'esporte'
                    );
                    $the_query = new WP_Query( $args ); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div>
                        <a class="guia-post" href="<?php the_permalink();?>">
                            <div class="guia-post-div">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                <h3><strong><?php the_title();?></strong><span></BR> <?php the_time('d F Y');?> </span></h3>
                                <p class="guia-txt"><?php the_excerpt(20); ?></p>
                                
                            </div> 
                        </a>
                    </div>   
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php endif; ?> 
            
        </div>
            <a href="<?php echo get_template_directory_uri().'/../../../category/esporte/'; ?>"><h4 class="guiaPolitico-verMais">VER MAIS</h4></a>
        
    </div>

</section>

  