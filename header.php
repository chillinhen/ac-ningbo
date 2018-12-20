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

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/library/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/library/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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
      <?php get_template_part('library/svg/inline', 'icons.svg'); ?>
        <!-- wrapper -->
        <div class="wrapper container">
            <header class="header clear" role="banner">
                <a class="toggle-nav" title="Menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php
            if (is_singular() && has_post_thumbnail()) :
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image-cover');
                $post_image = $thumb['0'];
                ?>

                <div class="header-image bg-image">

                    <?php the_post_thumbnail('banner',array('class' => 'img-fluid')); ?>
                    <?php dynamic_sidebar('language'); ?>

                </div>
            <?php endif;
            ?>
            <!-- header -->
            <!-- logo -->
            <?php get_template_part('partials/site', 'branding'); ?>
            <!-- /logo -->
            </header>
            <!-- /header -->
            <main role="main">
