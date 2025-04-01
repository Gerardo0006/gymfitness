<?php
    get_header();
?>

    <main class="contenedor seccion con-sidebar">
        <section class="contenido-principal">
            <?php
                get_template_part('template-parts/pagina');
                $hora_inicio = get_field('hora_inicio');
                $hora_fin = get_field('hora_fin');
            ?>
            <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
        </section>
        <aside>
            <h2>Sidebar aquí</h2>
        </aside>
    </main>

<?php
    get_footer();
?>