<section class="noticias">
    <div class="container">
        <div class="row">

           
            <div class="col-12 col-lg-6 ">
                <div id="slider">
                    <?php
                        $args = array(
                            "post_type" 		=> "post",
                            "posts_per_page"	=> 1,
                            "tag"			    => 'destaque1'

                        );
                        // Custom query.
                        $query = new WP_Query( $args );
                        // Check that we have query results.
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) { $query->the_post();
                            if(has_post_thumbnail() ) { ?>
                                <div class="noticiaBox">
                                    <a class="link-noticia" href="<?php the_permalink();?>">
                                    <div class="titulo-noticia destaque"
                                    style="background: url('<?php the_post_thumbnail_url();?>') center/cover no-repeat; overflow:hidden">
                                            <?php the_post_thumbnail('', array("style" => 'opacity:0; max-height:410px; min-height:410px'));?>
                                            <div class="titulo-noticia slider-title">
                                                <h3><?php the_title();?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                            }
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row">
                <?php
                    $args = array(
                        "post_type" 		=> "post",
                        "posts_per_page"	=> 4,
                        "tag"			=> 'destaque',
                        "offset" => 0,
                        'meta_query' => array(
                            array(
                                'meta_key'   => 'destaque',
                                'meta_value' => true,
                                'compare' => 'NOT LIKE',
                            ),
                        ),
                    );

                    $i = 0;
                    // Custom query.
                    $query = new WP_Query( $args );
                    // Check that we have query results.
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) { $query->the_post(); $i++;
                        if($i == 3) {
                            echo '<div class="w-100 separador-noticia"></div>';

                        }
                        if(has_post_thumbnail() ) {

                            ?>
                            <div class="col-12 col-md-6 ">
                            <a class="link-noticia" href="<?php the_permalink();?>">
                                <div class="miniatura-noticia"
                                    style="background: url('<?php the_post_thumbnail_url( array(570, 410) );?>') center/cover no-repeat;">
                                    <div class="titulo-noticia">
                                    <h3><?php titulo(75);?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }
                        }
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</section>

<?php
    function slider() { ?>
        <script>
            jQuery(document).ready(function ($) {
                tns({
                    container: '#slider',
                    items: 1,
                    slideBy: 'page',
                    controls: false,
                    nav: false,
                    arrowKeys: false,
                    autoplayText: ["", ""],
                    autoplay: true
                });
            });
        </script>
    <?php }
    add_action( 'wp_footer', 'slider', 69 );
