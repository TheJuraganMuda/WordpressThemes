<?php get_header(); ?>
<article id="headline">
<h3 class="judulkolom">Headline News</h3> 

<?php get_template_part("menu/headline1") ?>

</article>
<div style="clear: both"></div>

<article id="kolom3">
<?php get_template_part("menu/laporanutama") ?>
<div style="clear: both"></div>
<h3 class="judulkolom">@BeritaOtonomi</h3>
<a class="twitter-timeline" href="https://twitter.com/BeritaOtonomi" data-widget-id="303286984472936448">Tweets by @BeritaOtonomi</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div style="clear: both"></div>

<h3 class="judulkolom">Join Facebook Group</h3>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Berita-Otonomi/138916512929998" data-width="290" data-height="190" data-show-faces="true" data-stream="false" data-border-color="red" data-header="false"></div>
</div>

<?php get_template_part("menu/politik") ?>
<div style="clear: both"></div>

<?php include("menu/tokoh.php"); ?>

</div>

<div>
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
<div style="clear: both"></div>

<?php get_template_part("menu/opini-redaksi"); ?>
<div style="clear: both"></div>
<?php get_template_part("menu/sosial-ekonomi"); ?>


<div style="clear: both"></div>
<?php get_template_part("menu/foto"); ?>

<div style="clear: both"></div>

<?php get_template_part("menu/internasionale"); ?>

</article>
<div style="clear: both"></div>

<?php get_footer(); ?>
