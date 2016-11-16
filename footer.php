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
            </div>
            <!--/.footer-lists-->
            <!--/.footer-email-->
            <div class="footer-social">
                <?php if ( !dynamic_sidebar('twitter') ) : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
