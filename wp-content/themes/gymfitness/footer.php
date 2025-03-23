    <footer class="footer contenedor">
        <hr>

        <div class="contenido-footer">
            <!-- Menú de WordPress dinámico con PHP -->
            <?php
                $args = array(
                    'theme_location' => 'menu-principal', //-> theme_location indica a wp cuál menú mostrar en pantalla
                    'container' => 'nav', //-> container indica a wp el contenedor/etiqueta que rodeará/añmacenará el contenido del menú
                    'container_class' => 'menu-principal' //-> container_class indica a wp qué clase asignarle al contenedor
                );

                wp_nav_menu($args); //Ésta unción renderiza el menú
            ?>

            <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
        </div>
        
    </footer>

    <?php
        wp_footer();
    ?>

</body>
</html>