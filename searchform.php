<form class="" action="<?php echo home_url('/') ?>" method="get">
  <label for="">Cari Post : </label>
  <input type="text" name="s" value="<?php the_search_query() ?>">
  <input type="submit" name="" value="Cari" id="search_submit">
</form>
