<?php

    function gymfitness_menus(){
        register_nav_menus( array(
            'menu-principal' => __('Menu Principal', 'gymfitness')
        ));
    }
    //Implementación de hook add_action de wordpress (hay dos tipos de hooks, add_action y add_filter)
    add_action('init', 'gymfitness_menus');

    function gymfitness_scripts_styles(){
        wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
        /*'style' depende de normalize, por eso se agrega a las dependencias. Le 
        indicamos a wp que la primero hoja de estilos sea 'normalize'.*/
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');