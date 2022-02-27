<?php

function gym_lista_clases() { ?>
    <ul class="lista-clases">
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases',
                'posts_per_page' => 10,
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );
            $clases = new WP_Query($args); 
            while($clases->have_posts() ): $clases->the_post(); ?>

        <li class="clase card gradient">
            <?php the_post_thumbnail('mediano', array('class' => 'img-cent')); ?>
            <div class="contenido">
                
                <a href="<?php the_permalink(); ?>">
                    <h2 class="card-titulo"><?php the_title(); ?></h2>
                </a>

                <?php 
                    $hora_inicio = get_field('hora_inicio');
                    $hora_fin = get_field('hora_fin');
                ?>
                <p class="card-info">
                    <?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?>
                </p>

            </div>
        </li>

        <?php endwhile; wp_reset_postdata(); ?>

    </ul>
<?php
}