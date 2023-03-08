<?php
    // Cabecalho
    get_header();?>
    <section id="search-page">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="green"><small class="fa fa-search"></small> Você Pesquisou Por:<br> <strong>"<?php echo get_search_query(); ?>"</strong></h1>
                </div>
                <?php // Loop Archives
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <div class=" lista-categorias-post col-12 col-md-6 col-lg-3">
                                <?php // Template Looping
                                    get_template_part( 'template-parts/loop/post');
                                ?>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
                <div class="col-12">
                    <?php // Paginação
                        paginacao();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    // Template Rodape
    get_footer();