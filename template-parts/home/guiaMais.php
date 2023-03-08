<section class="container guiaMais">
    

    
    
    <div class="guiaMais-bloco">
        <div class="guiaMais-titulo">
            <a href="<?php echo get_template_directory_uri().'/../../../category/guia-mais/'; ?>"><h3>GUIA MAIS</h3></a>
        </div>

        <div class="guiaMais-noticias">
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            "category_name"		 => 'guia mais'
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <a class="guiaMais-post" href="<?php the_permalink();?>">
                
                
                <div class="guiaMais-post-div">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="guiaMais-txt">
                    <h3><strong><?php the_title();?></strong></br><span><?php the_time('d F Y');?> </span></h3>
                    <p><?php the_excerpt(20); ?></p>
                </div> 
            </a>
                
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <a href="<?php echo get_template_directory_uri().'/../../../category/guia-mais/'; ?>"><h4 class="guiaMais-verMais">VER MAIS</h4></a>

        </div>
    </div>

    <div>
        <div class="guiaMais-ultimas-noticias">
            <div class="container">
            <h3>Últimas Notícias</h3>
                
                    <?php get_template_part( 'template-parts/home/ultimos_posts'); ?>
               
            </div>
        </div>
        <div class="guiaMais-propaganda">
            <?php get_template_part( 'template-parts/home/publi_2'); ?>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/home/publi_3'); ?>