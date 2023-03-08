<?php
/**
* home Page
*
* @package WordPress - GuiaDeFatos
* @author bbento
* @since 1.0
*/
get_header() ?>
    <?php get_template_part( 'template-parts/home/publi_1'); ?>
    <?php get_template_part( 'template-parts/home/banner_rotativo'); ?>
    <?php get_template_part( 'template-parts/home/guiaMais'); ?>
    <?php get_template_part( 'template-parts/home/guiaPolicial'); ?>
    <?php get_template_part( 'template-parts/home/economia'); ?>
    <?php get_template_part( 'template-parts/home/guiaEsporte'); ?>
    <?php get_template_part( 'template-parts/home/guiaPolitico'); ?>
    <?php get_template_part( 'template-parts/home/guiaGeral'); ?>
<?php get_footer() ?>