<?php
$lang = strtolower(get_locale());
//echo $lang;
$argsCarousel = array(
    'post_type' => 'post',
    'category_name' => 'news-' . $lang,
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'date', //hier geht nur orderby dates
    'order' => 'DESC');
$newsQuery = new WP_Query($argsCarousel);
if ($newsQuery->have_posts()) :?>
<div id="newsCarousel" class="carousel slide" data-ride="carousel">
  <h2 class="news category-link"><?php _e('News', 'ac-ningbo'); ?></h2>
  <div class="carousel-inner">
    <?php while ($newsQuery->have_posts()) : $newsQuery->the_post();?>
      <div class="carousel-item">
        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php html5wp_excerpt('html5wp_news');?>
      </div>
        <?php endwhile;wp_reset_postdata();?>
  </div>

  <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
  </a>
</div>
<?php endif; ?>
