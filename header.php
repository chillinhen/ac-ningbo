<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php
        if (!function_exists('_wp_render_title_tag')) :

            function theme_slug_render_title() {
                ?>
                <title><?php wp_title('|', true, 'right'); ?></title>
                <?php
            }

            add_action('wp_head', 'theme_slug_render_title');
        endif;
        ?>

        <link href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon.ico" rel="shortcut icon">


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
        <script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
      <?php get_template_part('assets/svg/inline', 'icons.svg'); ?>
        <!-- offNav -->
        <nav role="navigation" id="offMenu" class="off-canvas-responsive">
          <?php html5blank_nav(); ?>
          <?php dynamic_sidebar('language'); ?>
        </nav>
        <!-- wrapper -->
        <div class="wrapper container p-3 px-md-5 pb-5">
            <header class="header clear" role="banner">
            <hr class="header-observer" />
            <a class="toggle-nav" title="Menu">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <?php if(is_front_page()) :
                  get_template_part('partials/gallery','carousel');
                  elseif(is_category()) :
                    null;
                  elseif (is_single()) :
                    if (has_post_thumbnail()) :
                        get_template_part('partials/thumbnail','banner');
                      endif;
                    endif;?>
            <!-- header -->
            <!-- logo -->
            <div class="main-navigation">
              <div class="row no-gutters pos-r">
                <div class="col-lg-4 col-md-12 branding"><?php get_template_part('partials/site', 'branding'); ?></div>
                <div class="col-lg-8 menu">
                  <!-- nav -->
                  <nav class="navbar navbar-expand-md" role="navigation" id="mainNav" style="display:none;">
                    <?php html5blank_nav(); ?>
                    <?php dynamic_sidebar('language'); ?>
                  </nav>
                  <!-- /nav -->
                </div>
              </div>
              
            </div>

            <!-- /logo -->
            </header>
            <!-- /header -->
            <main role="main">
