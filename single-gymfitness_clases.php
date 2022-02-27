<?php get_header(); ?>

<main class="pagina seccion con-sidebar contenedor single">
    
    <div class="cont-principal">
        <?php get_template_part('template-parts/paginas') ?>
    </div>

    <?php get_sidebar('clases'); ?>

</main>

<?php get_footer(); ?>