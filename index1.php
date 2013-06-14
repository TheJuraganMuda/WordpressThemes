<?php get_header(); ?>
<article id="headline">
<article class="grid_8" style="float:left;">
<h2 class="judulkolom"><?php _e("Headline News"); ?></h2>

<div  id="headline1" class="grid_4">
<?php get_template_part("menu/headline1") ?>
</div>

<div id="headline2" class="grid_4">
<?php get_template_part("menu/headline2") ?>
</div>
</article>
<div id="headline3" class="grid_4">
<?php get_template_part("menu/sosial-ekonomi"); ?>

</div>

</article>
<div style="clear: both"></div>
<br>

<article id="kolom3">
<?php get_template_part("menu/laporanutama") ?>
<div style="clear: both"></div>
<br>
<h2 class="judulkolom"><?php _e("Pencarian"); ?></h2>

<?php get_template_part("ads/ads1") ?>
<div style="clear: both"></div>
<br>
<?php get_template_part("menu/internasionale"); ?>


</div>

<?php get_template_part("menu/politik") ?>
<?php include("menu/tokoh.php"); ?>

</div>

<div class="grid_4">
<?php include("menu/daerah.php"); ?>
</div>
</article>
<div style="clear: both"></div>

<article id="kolom1">
<?php include("menu/pariwisata.php"); ?>
</article>
<div style="clear: both"></div>

<article  id="kolom2">
<?php get_template_part("menu/kilaskasus"); ?>
<article  class="grid_4">
<?php get_template_part("menu/opini-redaksi"); ?>

<h2 class="judulkolom"><?php _e("Join Facebook Group"); ?></h2>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Berita-Otonomi/138916512929998" data-width="300" data-height="200" data-show-faces="true" data-stream="false" data-border-color="red" data-header="false"></div>

</article>
<article  id="sosial-ekonomi" style="float:right;">
<?php get_template_part("menu/foto"); ?>


<h2 class="judulkolom"><?php _e("Follow @BeritaOtonomi"); ?></h2>
<a class="twitter-timeline" href="https://twitter.com/BeritaOtonomi" data-widget-id="303286984472936448">Tweets by @BeritaOtonomi</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</article>


</article>
<div style="clear: both"></div>
<br>




<div style="clear: both"></div>
<article  id="iklanfooter">
<?php get_template_part("ads/iklanfooter"); ?>
</article>
<div style="clear: both"></div>
<br>
<?php get_footer(); ?>
