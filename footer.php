
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


<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
<script type="text/javascript">
    if ($(window).width() > 960) {
       var s = skrollr.init();
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
