<div class="card">
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('loop', ['class' => 'card-img-top']); ?>
    </a>
    <div class="card-body">
        <a href="<?php the_permalink();?>">
            <h5 class="card-title">
                <?php the_title();?>
            </h5>
            <span class="data-noticia"><?php the_date( 'd F Y' );?></span>

            <div class="categorias mt-2"><span><i>&#128193;</i></span><?php the_category(', '); ?></div>
            
            <p class="card-text">
                <?php
                    $excerpt = get_the_excerpt();
                    $excerpt = substr($excerpt, 0, 260);
                    $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                    echo $result;
                ;?>
            </p>
        </a>
        
    </div>
</div>
