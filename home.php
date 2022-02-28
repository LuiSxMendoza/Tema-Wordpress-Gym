<?php get_header(); ?>

    <main class="pagina seccion no-sidebar contenedor">
        <div class="cont-principal">
            <ul class="listado-blog">
                <?php get_template_part('template-parts/loop-blog'); ?>
            </ul>
        </div>
    </main>

<?php get_footer(); ?>