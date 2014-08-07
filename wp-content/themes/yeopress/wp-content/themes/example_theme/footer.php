
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

<script src="<?php bloginfo('template_directory'); ?>/bower_components/js/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
<script type="text/javascript">
    var s = skrollr.init();
</script>

<?php wp_footer(); ?>
</body>
</html>
