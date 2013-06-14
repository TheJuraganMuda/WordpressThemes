<?php get_header(); ?>
<nav id="breadcrumbs">
<?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
</nav>

<?php if (have_posts('category_name=opini-redaksi')) : while (have_posts()) : the_post(); ?>

 
  <div id="post-singel" class="grid_8">
   <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
   
<div class="meta">
<div class="time">
<?php the_date(); ?> - <?php the_time() ?> | <?php _e("Kategori:"); ?> <?php the_category(',') ?><?php wp_link_pages(); ?>
</div>
    </div>

<div class="cutting_line"></div>
    <div class="entry-content" id="entry-content-single">
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>
        <!-- end entry-content -->
    <div class="cutting_line"></div>
    
    <div id="author-box">

<h2 class="title">Penulis:</h2>
<div class="author-gravatar">
<?php echo get_avatar( get_the_author_id() , 55 ); ?></div>
<p><b><? the_author_meta ('first_name')?> <? the_author_meta ('last_name')?></b><br><? the_author_meta ('description')?></p>

</div>
    

<div class="cutting_line"></div>

<?php wp_related_posts()?>
<div class="cutting_line"></div>
    <!-- end entry-meta -->
  <h2 class="title">      <?php _e("Komentar anda:"); ?>
</h2>

 <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
 <?php comments_template( $file, $separate_comments ); ?>

  <?php endwhile; else: ?>
  <?php _e('Maaf, postingan tidak tersedia', 'blank'); ?>
    <?php endif; ?>
  
</div>

<!-- end posts-wrap -->
  <?php get_sidebar(); ?>
<div style="clear: both"></div>

<?php get_footer(); ?>