<section id="footer">
    <div class="widget-areas">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12 mb20">
                    <?php if ( is_active_sidebar( 'footer1' ) ) { dynamic_sidebar( 'footer1' ); } ?>
                </div>
                <div class="col-sm-3 col-xs-12 mb20">
                    <?php if ( is_active_sidebar( 'footer2' ) ) { dynamic_sidebar( 'footer2' ); } ?>
                </div>
                <div class="col-sm-3 col-xs-12 mb20">
                    <?php if ( is_active_sidebar( 'footer3' ) ) { dynamic_sidebar( 'footer3' ); } ?>
                </div>
                <div class="col-sm-3 col-xs-12 mb20">
                    <?php if ( is_active_sidebar( 'footer4' ) ) { dynamic_sidebar( 'footer4' ); } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php echo nl2br(do_shortcode(stripslashes_deep(get_option(SHORT_NAME . "_footer")))); ?>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h3>ĐĂNG KÝ NHANH:</h3>
                            <?php echo do_shortcode(stripslashes_deep(get_option(SHORT_NAME . "_regForm"))); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"><?php echo stripslashes_deep(get_option(SHORT_NAME . "_gmaps")) ?></div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <span>Copyright &copy; Banglaixehadinh.Com. All rights reserved. Thiết kế bởi <a href="http://ppo.vn" title="Thiết kế web chuyên nghiệp">PPO.VN</a></span>
    </div>
</section>

<!-- script references -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/disable-copy.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/hammer.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/prototype.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/effects.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/app.min.js"></script>
<?php wp_footer(); ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>