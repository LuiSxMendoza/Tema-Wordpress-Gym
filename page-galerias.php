<?php 
/*
* Template Name: Template para Galerias
*/
get_header(); ?>

<main class="pagina seccion galeria contenedor">
    
    <div class="cont-principal">
        <?php while( have_posts() ): the_post(); ?>
            <h1 class="titulos"><?php the_title(); ?></h1>
            <?php 
                //? Obtener galeria de la pag actual
                $galeria = get_post_gallery(get_the_ID(), false);
                //? Obtener los ids 
                $galeria_imagenes_ID = explode(',', $galeria['ids']);
            ?>

            <ul class="galeria-imagenes">
                <?php
                    $i = 1;
                    foreach($galeria_imagenes_ID as $id):
                        $size = ($i == 4 || $i == 6) ? 'portrait' : 'sqare';
                        $imagenThumb = wp_get_attachment_image_src($id, $size)[0];
                        $imagen = wp_get_attachment_image_src($id, 'full')[0];
                ?>

                <li>
                    <a href="<?php echo $imagen; ?>" data-lightbox="galeria">
                        <img src="<?php echo $imagenThumb; ?>" alt="imagen galeria" class="imagen">
                    </a>
                </li>

                <?php $i++; endforeach; ?>
                
            </ul>
        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>