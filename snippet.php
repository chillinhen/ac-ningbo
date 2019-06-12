
<?php
$lang = strtolower(get_locale());
echo $lang;
$argsCarousel = array(
    'post_type' => 'post',
    'category_name' => 'news-' . $lang,
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'date', //hier geht nur orderby dates
    'order' => 'DESC');
$newsQuery = new WP_Query($argsCarousel);
if ($newsQuery->have_posts()) :?>
  <h2 class="news category-link"><?php _e('News', 'ac-ningbo'); ?></h2>
  <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-interval="8000" data-pause="hover" data-wrap="true" data-touch="true">
      <div class="carousel-inner">
          <?php while ($newsQuery->have_posts()) : $newsQuery->the_post();?>
          <div class="item news-item">
              <?php
              #get_template_part('partials/article', 'news');
              the_title();
              the_excerpt(5);
              ?>
          </div>
          <?php endwhile;wp_reset_postdata();?>
      </div>
      <a class="left carousel-control" href="#newsCarousel" data-slide="prev">
             <i class="fa fa-angle-left"></i>
         </a>
         <a class="right carousel-control" href="#newsCarousel" data-slide="next">
             <i class="fa fa-angle-right"></i>
         </a>
  </div>
<?php endif; ?>
