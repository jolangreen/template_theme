
</main>
<div class="clear"></div>

<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <?php wp_nav_menu( array('menu' => 'footer', 'after' => '' )); ?>
        <div class="text-muted">
            &copy; <?php echo date( "Y" ); ?> UntitledCompany. All Rights Reserved.
        </div>
    </div>
</footer>


<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
<script type="text/javascript">
    if ($(window).width() > 960) {
       var s = skrollr.init();
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
