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
            <?php echo get_the_excerpt(); ?>
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
