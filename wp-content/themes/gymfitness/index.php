<?php
    get_header();
?>
    <main>
        <?php
            //Implementación de loop de WordPress
            while( have_posts() ): the_post();
                //En WordPress todas las entradas/páginas se conocen como posts
                the_title();
                the_content();
            endwhile;
        ?>
    </main>
</body>
</html>