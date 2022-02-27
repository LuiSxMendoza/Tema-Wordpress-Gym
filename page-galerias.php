<?php 
/*
* Template Name: Template para Galerias
*/
get_header(); ?>

<main class="pagina seccion galeria contenedor">
    
    <div class="cont-principal">
        <?php while( have_posts() ): the_post(); ?>
            <h1 class="titulos"><?php the_title(); ?></h1>
    
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>