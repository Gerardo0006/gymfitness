<?php
    //Implementación de loop de WordPress
    while( have_posts() ): the_post();
        //En WordPress todas las entradas/páginas se conocen como posts
        the_title('<h1 class="text-center text-primary">', '</h1>');
        if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }
        the_content();
    endwhile;