

</div>
<!-- /wrapper -->
<?php #if(!(is_page_template('template-maintenance.php'))) :  ?>
<!-- footer -->
<footer class="footer container" role="contentinfo">
    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
</footer>
<!-- /footer -->
<?php #endif; ?>
<nav role="navigation" id="offMenu" class="nav off-canvas-responsive d-flex justify-content-center align-items-center">
    <?php html5blank_nav(); ?>
</nav>
<?php wp_footer(); ?>

<?php #get_template_part('snippets/analytics'); ?>

</body>
</html>
