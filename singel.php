
<?php get_header(); ?>

<nav id="breadcrumbs">
 <?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
</nav>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 
  <div>
   <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
   
<div class="meta">
<div class="time">
<?php the_date(); ?> - <?php the_time() ?> | <?php _e("Kategori:"); ?> <?php the_category(',') ?><?php wp_link_pages(); ?>
</div>
    </div>

<div class="cutting_line"></div>
    <p>
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </p>    <!-- end entry-content -->
    <a target="_blank" href="http://www.copyrighted.com/copyrights/view/zi7m-nuez-szg1-y700"><img border="0" alt="Copyrighted.com Registered &amp; Protected 
ZI7M-NUEZ-SZG1-Y700" title="Copyrighted.com Registered &amp; Protected 
ZI7M-NUEZ-SZG1-Y700" width="75" height="20" src="http://static.copyrighted.com/images/seal.gif" /></a>
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