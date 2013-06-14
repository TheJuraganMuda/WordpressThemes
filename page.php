<?php get_header(); ?>
<nav id="breadcrumbs">
 <?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
</nav>
<article id="post-archive" class="grid_8">
  <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div id="post-single">
  <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<?php the_content() ?>

	
  </div>
  </div>
  <div class="clear"></div>

  <?php endwhile; else: ?>
  <?php _e('Sorry, no posts matched your criteria', 'blank'); ?>
	<?php endif; ?> 
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>