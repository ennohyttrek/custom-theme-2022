    <footer>
        
        <aside class="footer-sidebar">
            <?php dynamic_sidebar( 'footer-widget' ); ?>
        </aside>

        <nav class="footer-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </nav>
        

        
    </footer>
    
    <nav class="mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>
    
    <?php wp_footer() ?>
</body>

</html>