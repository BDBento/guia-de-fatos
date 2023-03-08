<section class="container guiaGeralPost">
    
    <div class="">
        <div class="guiaGeralPost-titulo">
            <h3>VEJA TAMBEM:</h3>
        </div>

        <div class="guiaGeralPost-post flex-block">
            
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 4,
                        "category_name"		 => ''
                    );
                    $the_query = new WP_Query( $args ); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div>
                        <a class="" href="<?php the_permalink();?>">
                            <div class="guiaGeral-post-div">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                <h3><strong><?php the_title();?></strong><span> - <?php the_time('d F Y');?> </span></h3>
                                <p class="guiaGeral-txt"><?php the_excerpt(20); ?></p>
                            </div> 
                        </a>
                    </div>   
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php endif; ?> 
            
        </div>
           
        
    </div>

</section>

