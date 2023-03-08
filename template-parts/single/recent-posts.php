<?php
    $args = array(
        "post_type" 		=> "post",
        "posts_per_page"	=> 8
    );
    // Custom query.
    $query = new WP_Query( $args );
    // Check that we have query results.
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) { $query->the_post();
        if(has_post_thumbnail() ) { ?>
            <div class="mb-4 recent-posts">
                <span class="badge badge-light data-noticia"><?php the_date( 'd M Y' );?></span>
                <a class="link-noticia" href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
            </div>
        <?php }
        }
    }
    wp_reset_postdata();
?>
