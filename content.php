<?php
if(is_single()):
 ?>
 <h3><?php the_title() ?></h3>
   <p><?php the_content() ?></p>
<?php else: ?>
<h3 ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink() ?>">Lebih Lanjut</a> </p>
<p class="meta">
  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
  <?php
    the_author();?></a>
  </php echo ' || '; the_time('F j, Y')?> at <?php the_time('g i a');
    echo ' || Kategori : '; the_category(',');
   ?>
</p>
<?php endif; ?>
