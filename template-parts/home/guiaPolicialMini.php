<?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        "category_name"		 => 'policial',
        "offset" => 1
    );
        $the_query = new WP_Query( $args ); 
?>

    <?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
        <a class="guiaPolitico-post" href="<?php the_permalink();?>">
            <div class="guiaPolitico-post-div-mini">
                <div>
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="guiaPolitico-post-div-mini-txt">
                    <h3><strong><?php the_title();?></strong></h3>
                    <p><?php the_time('d F Y'); ?></p>
                </div>
            </div> 
        </a>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php endif; ?>

           
