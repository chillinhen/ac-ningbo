<?php
//get Variables
$contactdata = get_field('kontakt');
$infos = get_field('info-text');
$images = get_field('galerie');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if ($contactdata):
    get_template_part('partials/block', 'contact');
    ?>
    <div class="widget-acf contact-data">
        <?php echo $contactdata; ?>
    </div>
<?php
endif;
if ($contactdata):
    get_template_part('partials/block', 'contact');
    ?>
    <div class="widget-acf txt-infos">
    <?php echo $infos; ?>
    </div>
<?php endif;


if ($images):
    ?>
   <ul class="widget-acf gallery">
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif;
?>
