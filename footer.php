
</div>
<!-- /wrapper -->

<!-- footer -->
<footer class="footer" role="contentinfo">
  <div class="container px-0">
    <nav class="navbar px-0">
      <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu navbar-nav', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
      <div class="scroll-to-top_cnt mr-3">
        <span class="elastic">
          <svg><use xlink:href="#scroll-to-top"></use></svg>
        </span>
      </div>
    </nav>
  </div>
</footer>

<!-- /footer -->
<?php wp_footer(); ?>

</body>
</html>
