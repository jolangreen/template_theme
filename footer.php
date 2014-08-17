
	</div><!-- /.container -->
</section>
<div class="clear"></div>

<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <?php wp_nav_menu( array('menu' => 'footer', 'after' => '' )); ?>
        <div class="text-muted">
            &copy; <?=date('Y')?> UntitledCompany. All Rights Reserved.
        </div>
    </div>
</footer>

<!-- bower:js -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!-- endbower -->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
<script type="text/javascript">
    if ($(window).width() > 960) {
       var s = skrollr.init();
    }
</script>

<?php wp_footer(); ?>
</body>
</html>