<?php
  $post = $wp_query->post;
  if (in_category('opini-redaksi')) {
      include(TEMPLATEPATH.'/single-opini.php');
  }
  else{
      include(TEMPLATEPATH.'/single-basic.php');
  }
?> 