<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- Implementando función language_attributes(); de PHP para obtener el lenguaje de manera dinámica-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importando archivos/scripts/stylesheets de Wordpress -->
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
            </div>
            
            <!-- Menú de WordPress dinámico con PHP -->
            <?php
                $args = array(
                    'theme_location' => 'menu-principal', //-> theme_location indica a wp cuál menú mostrar en pantalla
                    'container' => 'nav', //-> container indica a wp el contenedor/etiqueta que rodeará/añmacenará el contenido del menú
                    'container_class' => 'menu-principal' //-> container_class indica a wp qué clase asignarle al contenedor
                );

                wp_nav_menu($args); //Ésta unción renderiza el menú
            ?>

            <!-- Menú estático
            <nav>
                <a href="/nosotros">Nosotros</a>
                <a href="/contacto">Contacto</a>
                <a href="/blog">Blog</a>
            </nav>
            -->

        </div>
    </header>