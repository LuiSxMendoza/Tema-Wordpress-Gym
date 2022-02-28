<?php get_header(); ?>

    <main class="pagina seccion no-sidebar contenedor">
        <div class="cont-principal">
            <?php
                $categoria = get_queried_object();
            ?>
            <h2 class="titulos">Categoria - <?php echo $categoria->name; ?></h2>

            <ul class="listado-blog">
                <?php get_template_part('template-parts/loop-blog'); ?>
            </ul>
        </div>
    </main>

<?php get_footer(); ?>