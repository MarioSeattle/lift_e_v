<!--Footer starts here-->
<footer>
    <div class="footer-gray">
        <div class="footer-custom">
            <div class="footer-lists">
                <div class="footer-list-wrap">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer' ,
                        'menu' => 'Footer' ,
                        'container'  => 'ul', 

		              ) ); ?>
                </div>
                <!--/.footer-list-wrap-->
            </div>
        </div>
    </div>
</footer>
<!-- begin validation buttons -->
<p class="validation">
    <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png"
             width="31" height="32" alt="valid HTML5" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss"
             alt="Valid CSS3" height="31" width="88" />
    </a>
</p>
<!-- end validation buttons -->
</body>
</html>
