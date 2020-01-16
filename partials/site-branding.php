<?php if (is_front_page()) : ?>
  <h1 class="logo">
<?php else: ?>
  <div class="logo">
<?php endif; ?>
<?php if(!(is_page_template( 'page-maintenance.php' ))):?>
  <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
  <?php endif; ?>
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) :
          echo '<img src="'. esc_url( $logo[0] ) .'">';
      else : ?>
        <span class="elastic">
          <svg><use xlink:href="#logo"></use></svg>
        </span>
      <?php endif; ?>
    <?php if (display_header_text()==true) :?>
    <span class="site-title">
        <?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>
    </span>
    <?php endif; ?>
    <?php if(!(is_page_template( 'page-maintenance.php' ))):?>
    </a>
    <?php endif; ?>
<?php if (is_front_page()) : ?>
    </h1>
<?php else: ?>
  </div>
<?php endif; ?>
