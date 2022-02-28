<?php while(have_posts()): the_post(); ?>
                    <li class="card gradient">
                        <?php the_category(); ?>
                        <?php the_post_thumbnail('mediano', array('class' => 'img-cent')); ?>
            
                        <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="card-titulo"><?php the_title(); ?></h2>
                            </a>
            
                            <p class="card-info">
                                <span>Por:</span>
            
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                                    <?php echo get_the_author_meta('display_name'); ?>
                                </a>
            
                            </p>
                            <p class="card-info2">
                                <span>Fecha:</span>

                                <?php the_time(get_option('date_format')); ?>
                            </p>
                        </div>
                    </li>
            
                <?php endwhile; ?>