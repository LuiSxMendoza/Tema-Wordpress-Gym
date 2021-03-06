<?php get_header(); ?>

    <main class="pagina seccion no-sidebar contenedor">
        <div class="cont-principal">
            <?php
                $autor = get_queried_object();
            ?>
            <h2 class="titulos">Autor - <?php echo $autor->data->display_name; ?></h2>
            <p class="txt-cent">
                <?php echo get_the_author_meta('description', $autor->data->ID); ?>
            </p>
            <ul class="listado-blog">
                <?php get_template_part('template-parts/loop-blog'); ?>
            </ul>
        </div>
    </main>

<?php get_footer(); ?>