<?php
get_header();?>
<main>


<?php
if( have_posts()):?>
<p class="sub_judul">
  Hasil Pencarian :
</p>
<?php
  while(have_posts()):
    the_post();
    while($post->post_type == 'page') continue;
    get_template_part('content');

  endwhile;
else:
  echo "tidak ada post";
endif;
?>
</main>
<?php
get_footer();
 ?>
