    <footer class="site-footer contenedor">
        <hr>

        <div class="contenido-footer">
            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'enlaces'
                );
                wp_nav_menu($args);
            ?>

            <div class="derechos">
                <p>All Rights Reserved. <?php 
                    echo get_bloginfo('name') . " " . date('Y'); ?></p>
            </div>
        </div>
    </footer>


    <?php wp_footer(); ?>

    </body>
</html>