<?php
/**
* Theme Customizer settings.
*
* @package SAK HTML5 BLANK THEME
*/
function sak_theme_customizer($wp_customize) {
  $wp_customize->add_setting('primary_color', array(
    'default' => '#235DAB',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
    'label' => __('Branding Color', 'html5blank'),
    'description' => __('Define your main color', 'html5blank'),
    'section' => 'colors',
    'settings' => 'primary_color',
  )));

  $wp_customize->add_setting('secondary_color', array(
    'default' => '#E22B37',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
    'label' => __('Secondary Color', 'html5blank'),
    'description' => __('Define a secondary color that matches branding color', 'html5blank'),
    'section' => 'colors',
    'settings' => 'secondary_color',
  )));

  $wp_customize->add_setting('headline_color', array(
    'default' => '#2664B8',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headline_color', array(
    'label' => __('Branding Color', 'html5blank'),
    'description' => __('Define your main color', 'html5blank'),
    'section' => 'colors',
    'settings' => 'headline_color',
  )));

  $wp_customize->add_setting('container_color', array(
    'default' => '#ffffff',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'container_color', array(
    'label' => __('Container Color', 'html5blank'),
    'description' => __('Define a color for your main contents background', 'html5blank'),
    'section' => 'colors',
    'settings' => 'container_color',
  )));

  $wp_customize->add_setting('footer_color', array(
    'default' => '#E22B37',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
    'label' => __('Footer Color', 'html5blank'),
    'description' => __('Define a color for your footer background', 'html5blank'),
    'section' => 'colors',
    'settings' => 'footer_color',
  )));

  $wp_customize->add_setting('footer_menu_color', array(
    'default' => '#ffffff',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_menu_color', array(
    'label' => __('Footer Menu Color', 'html5blank'),
    'description' => __('Define a color for your footer links', 'html5blank'),
    'section' => 'colors',
    'settings' => 'footer_menu_color',
  )));

  //adding text section for Analytics Code
  $wp_customize->add_section('analytics_settings_section', array(
    'title'          => __('Analytics-Code', 'html5blank'),
  ));
  //adding setting for Analytics Code
  $wp_customize->add_setting('code', array(
    'default'        => "",
  ));
  $wp_customize->add_control('code', array(
    'description' => __('Please provide your analytics code', 'html5blank'),
    'section' => 'analytics_settings_section',
    'type'    => 'textarea',
  ));
}

add_action('customize_register', 'sak_theme_customizer');

function sak_sanitize_hex_color($color) {
  if ('' === $color)
  return '';

  // 3 or 6 hex digits, or the empty string.
  if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color))
  return $color;

  return null;
}
function sak_add_customizer_css() {
    $primary_color = sak_sanitize_hex_color(get_theme_mod('primary_color','#235DAB'));
    $secondary_color = sak_sanitize_hex_color(get_theme_mod('secondary_color','#E22B37'));
    $headline_color = sak_sanitize_hex_color(get_theme_mod('headline_color','#2664B8'));
    $container_color = sak_sanitize_hex_color(get_theme_mod('container_color','#ffffff'));
    $footer_color = sak_sanitize_hex_color(get_theme_mod('footer_color','#E22B37'));
    $footer_menu_color = sak_sanitize_hex_color(get_theme_mod('footer_menu_color','#ffffff'));

?>
  <style media="screen">
  /* SVG-Logo */
  .bg-circle{
    fill:<?php echo $container_color; ?>;
  }
  .eV-path,.ac-path,.ac-img-path,[class*="txt-path"]
  {
      fill:<?php echo $primary_color; ?>;
  }
  .nb-path,.nb-img-path{
      fill:<?php echo $secondary_color; ?>;
  }
  ::-moz-selection{
    background-color: <?php echo $primary_color; ?>;
    color:<?php echo $container_color; ?>;
  }
  ::selection{
    background-color: <?php echo $primary_color; ?>;
    color:<?php echo $container_color; ?>;
  }

  .contact,
  .sidebar .gallery-item [class*="caption"],
  .btn-primary,
  #languages-menu,
  #offMenu{
    background-color: <?php echo $primary_color; ?>;
    color:<?php echo $container_color; ?>;
  }
  .toggle-nav span{
    background-color: <?php echo $secondary_color; ?>;
  }
  #languages-menu a, #languages-menu a span{
    color:<?php echo $container_color; ?>;
  }
  .btn-primary{
    border-color: <?php echo $primary_color; ?>;
  }
  .btn-primary:hover{
    background-color: <?php echo $secondary_color; ?>;
    border-color: <?php echo $secondary_color; ?>;
  }
  #offMenu li[class*="page"] a,
  #offMenu li[class*="menu"] a{
    color:<?php echo $container_color; ?>;
  }
  #offMenu li[class*="page"] a:hover,
  #offMenu li[class*="menu"] a:hover{
      color: <?php echo $primary_color; ?>;
      background-color:<?php echo $container_color; ?>;
      opacity: .5;
  }
  header .navbar-nav > .nav-item > a,
  .dropdown-menu li,
  .dropdown-item{
    color: <?php echo $primary_color; ?>;
  }
  header .navbar-nav > .nav-item:not(.menu-item-has-children) > a:after{
    background-color: <?php echo $secondary_color; ?>;
  }
  header .navbar-nav > .current-menu-item > a,
  header .navbar-nav > .current-menu-ancestor > a{
    color:<?php echo $secondary_color; ?>;
  }
  header .dropdown-menu{
    background-color: <?php echo $container_color; ?>;
    border-top:3px solid <?php echo $secondary_color; ?>;
  }
  .post-edit-link,
  .dropdown-item:hover,
  .dropdown-item:focus,
  .dropdown-menu > .current-menu-item > a,
  .dropdown-menu > .current-menu-ancestor > a,
  .dropdown-menu > .current-menu-parent > a{
    background-color: <?php echo $secondary_color; ?>;
    color:<?php echo $container_color; ?> !important;
  }

  main a,main a:link {
    color: <?php echo $primary_color; ?>;
  }
  main a:hover{
    color: <?php echo $headline_color; ?>
  }
  a.btn,
  .block.highlight.bg-primary
  {
    color: <?php echo $container_color; ?> !important;
    background-color:<?php echo $primary_color; ?> !important;
  }
  .block.highlight.bg-primary .btn{
    background-color:<?php echo $secondary_color; ?> !important;
  }
  .block.highlight[class*="bg-"] a{
    color: <?php echo $container_color; ?> !important;
  }
  .block.highlight.bg-secondary
  {
    color: <?php echo $container_color; ?> !important;
    background-color:<?php echo $secondary_color; ?> !important;
  }
  .block.highlight.bg-secondary .btn{
    background-color:<?php echo $primary_color; ?> !important;
  }
  article h1{
      color: <?php echo $primary_color; ?>;
  }
  h1,h2,h1 a,h2 a, legend{
    color: <?php echo $primary_color; ?>;
  }
  h2:after, h3:after{
    background-color:<?php echo $secondary_color; ?>;
  }
  li[class*="page"]:hover,
  li[class*="menu"]:hover,
  .post-edit-link,
  .site-title{
    color: <?php echo $primary_color; ?>;
  }
  .wrapper,
  main{
    background-color: <?php echo $container_color; ?>;
  }
  blockquote:before{
    background-color:<?php echo $secondary_color; ?>;
  }
  footer{
    background-color:<?php echo $footer_color; ?>;
  }
  .footer-menu li a{
    color:<?php echo $footer_menu_color; ?>;
  }
  .scroll-to-top_cnt{
    color:<?php echo $footer_menu_color; ?>;
  }
  .arrow-up{
    fill:currentColor;
  }
  </style>
<?php }
add_action('wp_head', 'sak_add_customizer_css');
?>
