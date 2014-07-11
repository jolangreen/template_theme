
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

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/skrollr.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/skrollr.stylesheets.min.js"></script>
<script type="text/javascript">
    var s = skrollr.init();
</script>

<?php wp_footer(); ?>
</body>
</html>
