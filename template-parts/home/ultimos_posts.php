<?php
    $args = array(
        'post_type' => '',
        'posts_per_page' => 7
    );
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a class="" href="<?php the_permalink();?>">
                <p><i>&rarr; </i><?php the_title(); ?></p>
            </a>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

<?php endif; ?>