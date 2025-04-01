<?php
    //Implementación de loop de WordPress
    while( have_posts() ): the_post();
        //En WordPress todas las entradas/páginas se conocen como posts
        the_title('<h1 class="text-center text-primary">', '</h1>');
        if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }
        
        $hora_inicio = get_field('hora_inicio');
        $hora_fin = get_field('hora_fin'); 
?>
        <p><?php the_field('dias_clase'); ?> - 
            <?php echo $hora_inicio . " a " . $hora_fin ?>
        </p>
    <?php
        the_content();
    endwhile;