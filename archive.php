<?php
get_header();?>
<main>


<?php
if( have_posts()):?>
<p class="sub_judul">
  <?php if(is_category()){
    echo 'Halaman Kategory';
  }elseif(is_author){
    echo 'Author: '.get_the_author();
  }else{
    echo 'Halaman Arsip';
  } ?>
</p>

<?php  while(have_posts()):
    the_post();
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
