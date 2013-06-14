<?php get_header(); ?>
<nav id="breadcrumbs"> <?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
</nav>

<div id="post-archive">
  <?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
  <div id="post-entries">
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

  <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>



<p>
<?php custom_excerpt(25, '<a href="'. get_permalink($post->ID) . '">...</a>') ?>
</p> 
  </div>
   
    <div class="clear"></div>
  </div>
  <?php endwhile; else: ?>
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>


<?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>

</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>