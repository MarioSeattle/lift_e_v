<?php wp_footer(); ?>
<!--Footer starts here-->
<footer>
    <div class="footer-gray">
        <div class="footer-custom">
            <div class="footer-lists">
                <div class="footer-list-wrap">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer1' ,
                        'menu' => 'Footer1' ,
                        'container'  => 'ul',
		              ) ); ?>
                </div>
                <!--/.footer-list-wrap-->
                <div class="footer-list-wrap">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer2' ,
                        'menu' => 'Footer2' ,
                        'container'  => 'ul',
		              ) ); ?>
                </div>
                <!--/.footer-list-wrap-->
                <div class="footer-list-wrap">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer3' ,
                        'menu' => 'Footer3' ,
                        'container'  => 'ul',
		              ) ); ?>
                </div>
                <!--/.footer-list-wrap-->
                <div class="footer-list-wrap">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer4' ,
                        'menu' => 'Footer4' ,
                        'container'  => 'ul',
		              ) ); ?>
                </div>
                <!--/.footer-list-wrap-->
            </div>
            <!--/.footer-lists-->
            <!--/.footer-email-->
            <div class="footer-social">
                <sidebar id="twitter">
                    <div class="footer-list-wrap">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'footer5' ,
                            'menu' => 'Footer5' ,
                            'container'  => 'ul',
                        ) ); ?>
                    </div>
                <?php if ( !dynamic_sidebar('twitter') ) : ?>
                <?php endif; ?>
                    </sidebar>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
