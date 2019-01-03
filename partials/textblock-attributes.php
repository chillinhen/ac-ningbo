<?php if(get_sub_field('highlight_block')) :
  $class = get_sub_field_object('textblock-styles');
  $value = $class['value'];
  if($value == 'custom-color'):
    $bgcolor = get_sub_field('bg-color');
    $color = get_sub_field('textfarbe');?>
    <div class="block highlight <?php echo $value;?>" style="background:<?php echo $bgcolor;?>;color:<?php echo $color;?>;">
    <?php else : ?>
      <div class="block highlight <?php echo $value;?>">
      <?php endif;?>
      <?php the_sub_field('textblock');?>
    </div>

  <?php else :
    the_sub_field('textblock');
  endif; ?>
