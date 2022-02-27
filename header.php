<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta name="description" content="Pagina para Gimnasio">
    <meta name="author" content="Juan Luis Martinez Mendoza">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>
<body>

    <header class="site-header">
        <div class="contenedor">
            <div class="navegacion">
                <div class="nav-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" 
                        alt="logo" 
                        class="logo"
                    >
                </div>
            
                <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'enlaces'
                    );
                    wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>
