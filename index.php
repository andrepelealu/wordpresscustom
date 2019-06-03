<?php
get_header();?>
<main>


<?php
if( have_posts()):
  while(have_posts()):
    the_post();
    get_template_part('content');
    ?>

<?php

  endwhile;
else:
  echo "tidak ada post";
endif;
?>
</main>
<?php
get_footer();
 ?>
