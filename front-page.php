<?php get_header(); ?>
    <main id="home-page">
        <!-- Slider and add images START -->
        <?php add_flexslider(); ?>
        <!-- Slider and add images END -->  
        <!-- Create your slider -->
        <script>
        var slider = new IdealImageSlider.Slider({
        selector: '#slider',
        interval: 6000,
        transitionDuration: 1000
        });
        slider.start();
            </script>
        <!-- Slider and add images END -->
        <!--Test-->
        <div class="seo">
            <h2>Lift Every Voice Foundation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed diam quis lacus sodales ultrices ut in neque.
                Nunc dapibus convallis pellentesque. Pellentesque lacinia enim egestas purus eleifend convallis. Aenean congue consequat
                lectus vitae aliquet. Etiam finibus, nisl ac dignissim rhoncus, odio nisl vestibulum arcu, vitae feugiat arcu est ut augue. In nibh metus, laoreet a enim non, eleifend vehicula velit. Nam a consectetur nibh.</p>
        </div>
        <div id="cta-row">
            <div class="cta" id="cta1">
                <?php dynamic_sidebar( 'home-cta1' ); ?>
            </div>
            <div class="cta" id="cta2">
                <?php dynamic_sidebar( 'home-cta2' ); ?>
            </div>
            <div class="cta" id="cta3">
                <?php dynamic_sidebar( 'home-cta3' ); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
