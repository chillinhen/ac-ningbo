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
    'description' => __('Define a color für your main contents background', 'html5blank'),
    'section' => 'colors',
    'settings' => 'container_color',
  )));
  //adding logo section
  /*$wp_customize->add_section('logo_settings_section', array(
    'title'          => __('Additional Logo(s)', 'html5blank'),
  ));

  $wp_customize->add_setting('footer_logo', array(
       'transport' => 'refresh',
  ));
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
    'label'      => __('Footer Logo', 'html5blank'),
    'description'  => __('If you have a smaller version of your logo, you can upload it here. Or take your logo again.', 'html5blank'),
    'section'    => 'logo_settings_section',
    'settings'   => 'footer_logo',
  )));*/
  //adding text section in wordpress customizer
  /*$wp_customize->add_section('contact_settings_section', array(
    'title'          => __('Contact Data', 'html5blank'),
  ));
  //adding setting for contact area
  $wp_customize->add_setting('phone', array(
    'default'        => __('+49-241-920 400', 'html5blank'),
    'transport' => 'refresh',
    array(
      'sanitize_callback'     =>  'esc_url_raw',
    )
  ));
  $wp_customize->add_control('phone', array(
    'label'   => __('Phone Number', 'html5blank'),
    'description' => __('Please provide your phone number', 'html5blank'),
    'section' => 'contact_settings_section',
    'type'    => 'text',
  ));
  $wp_customize->add_setting('mail', array(
    'default'        => esc_html__('mail@spraachen.de', 'html5blank'),
    'transport' => 'refresh',
    array(
      'sanitize_callback'     =>  'esc_url_raw',
    )
  ));
  $wp_customize->add_control('mail', array(
    'label'   => __('Email', 'html5blank'),
    'description' => __('Please provide your email-address', 'html5blank'),
    'section' => 'contact_settings_section',
    'type'    => 'text',
  ));
  $wp_customize->add_setting('address', array(
    'default'        => esc_html__('Sprachenakademie Aachen gGmbH, Buchkremerstr. 6, 52062 Aachen, Deutschland','html5blank'),
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('address', array(
    'label'   => __('Address', 'html5blank'),
    'description' => __('Please provide your address', 'html5blank'),
    'section' => 'contact_settings_section',
    'type'    => 'text',
  ));
  //adding text section in wordpress customizer
  $wp_customize->add_section('social_media_settings_section', array(
    'title'          => __('Social Media', 'html5blank'),
  ));
  $wp_customize->add_setting('social_media_label', array(
    'default'        => '',
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control( 'social_media_label', array(
    'type'    => 'radio',
    'label'   => __('Choose your social media network'),
    'choices'  => array(
      'facebook' => __('facebook','html5blank'),
      'twitter' => __('twitter','html5blank'),
      'xing' => __('xing','html5blank'),
      'linkedin' => __('linkedin','html5blank'),
      'instagram' => __('instagram','html5blank'),
      'pinterest' => __('pinterest','html5blank'),
    ),
    'section' => 'social_media_settings_section'
  ));
  $wp_customize->add_setting('social_media_link', array(
    'default'        => '',
    'transport' => 'refresh',
    array(
      'sanitize_callback'     =>  'esc_url_raw',
    )
  ));
  $wp_customize->add_control('social_media_link', array(
    'label'   => __('Social media links', 'html5blank'),
    'description' => __('Please provide the link to your chosen network', 'html5blank'),
    'section' => 'social_media_settings_section',
    'type'    => 'text',
  ));
  $wp_customize->add_setting('social_media_cta', array(
    'default'        => esc_html__('Follow us on facebook','html5blank'),
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('social_media_cta', array(
    'label'   => __('Label', 'html5blank'),
    'description' => __('Please label your Social Media Link', 'html5blank'),
    'section' => 'social_media_settings_section',
    'type'    => 'text',
  ));*/
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

?>
  <style>
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
    color:white;
  }
  ::selection{
    background-color: <?php echo $primary_color; ?>;
    color:white;
  }

  .toggle-nav span,
  .contact,
  .gallery-item [class*="caption"],
  #offMenu{
    background-color: <?php echo $primary_color; ?>;
    color:white;
  }
  a,a:link {
    color: <?php echo $primary_color; ?>;
  }
  a:hover{
    color: <?php echo $headline_color; ?>
  }
  a.btn,
  .scroll-to-top{
    color: <?php echo $container_color; ?>;
    background-color:<?php echo $primary_color; ?>;
  }
  article h1{
      color: <?php echo $primary_color; ?>;
  }
  h1,h2,h1 a,h2 a, legend{
    color: <?php echo $primary_color; ?>;
  }
  h3 {
    color: <?php echo $headline_color; ?>;
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
  </style>
<?php }
add_action('wp_head', 'sak_add_customizer_css');
?>
