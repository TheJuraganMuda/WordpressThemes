<div style="clear: both"></div>
<!-- start footer -->
<footer class="foot">
    <p>&copy; <?php echo date('Y',current_time('timestamp',1)); ?> <a href="<?php echo home_url('home'); ?>/">
      <?php bloginfo('name'); ?></a> - theme by <a href="http://twitter.com/bigalma_/">@BIGalma_
      </a> - <?php wp_loginout(); ?>
    </p>
    </footer>
<!-- end footer -->
<?php wp_footer(); ?>
</body>
</html>