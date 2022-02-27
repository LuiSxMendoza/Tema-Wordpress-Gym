<?php get_header(); ?>

<main class="pagina seccion no-sidebar contenedor">
    
    <div class="cont-principal txt-cent">
        <?php get_template_part('template-parts/paginas') ?>

        <?php gym_lista_clases(); ?>
    </div>

</main> 

<?php get_footer(); ?>