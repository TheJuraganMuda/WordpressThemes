<!-- begin sidebar -->

<aside class="sidebar">

		
	<h3 class="judulkolom">Pencarian:</h3>

<?php get_search_form( $echo ); ?>
			<br>
<div class="ads1">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('ads') ) : ?>
<!-- begin pages -->
<?php endif; ?>
</div>

<!-- begin left -->
<div class="whitebg">
<div class="l">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left') ) : ?>
<!-- begin pages -->
<h3 class"judulkolom">Berita Terbaru</h3>
<?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>';
	}
?>
<?php endif; ?>
</div>
<!-- end left -->
		
<!-- begin right -->
<div class="r">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right') ) : ?>
			<!-- begin archive -->
			<h3 class="judulkolom">Arsip</h3>
			<?php wp_get_archives('type=monthly'); ?>
			<!-- end archive -->
			<!-- end meta -->
		<?php endif; ?>
		</div>
		<!-- end right -->
	</div>

</aside>
<!-- end sidebar -->