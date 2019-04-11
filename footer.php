
</div>
<!-- /wrapper -->

<!-- footer -->
<footer class="footer container" role="contentinfo">
    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
    <div class="scroll-to-top_cnt">
      <span class="elastic">
        <svg><use xlink:href="#scroll-to-top"></use></svg>
      </span>
    </div>
</footer>

<!-- /footer -->
<?php #endif; ?>
<nav role="navigation" id="offMenu" class="nav off-canvas-responsive d-flex justify-content-center align-items-center">
    <?php html5blank_nav(); ?>
</nav>
<?php wp_footer(); ?>

</body>
</html>
