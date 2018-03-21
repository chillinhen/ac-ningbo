<?php #if(!(is_page_template('template-maintenance.php'))) :  ?>
<!-- footer -->
<footer class="footer" role="contentinfo">
    <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'footer-menu', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
</footer>
<!-- /footer -->
<?php #endif; ?>

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

<?php #get_template_part('snippets/analytics'); ?>

</body>
</html>
