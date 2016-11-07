<?php include "header.php" ?>
    <main id="home-page">

        <!-- Slider and add images START -->
        <div id="slider">
            <a href=''><img src="images/slider-img1.jpg" alt=""></a>
            <a href=''><img data-src="images/slider-img2.jpg" src="" alt=""></a>
            <a href=''><img data-src="images/slider-img3.jpg" src="" alt=""></a>
            <a href=''><img data-src="images/slider-img4.jpg" src="" alt=""></a>
        </div>
        <!-- Include slider JS file -->
        <script src="js/ideal-image-slider.js"></script>
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
                <img class="cta-img" src="images/cta-pic1.jpg" alt="">
                <div class="cta-content">
                    <h3>Headline 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur elit.<a href=""> More...</a></p>
                </div>
            </div>
            <div class="cta" id="cta2">
                <img class="cta-img" src="images/cta-pic2.jpg" alt="">
                <div class="cta-content">
                    <h3>Headline 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur elit.<a href=""> More...</a></p>
                </div>
            </div>
            <div class="cta" id="cta3">
                <img class="cta-img" src="images/cta-pic3.jpg" alt="">
                <div class="cta-content">
                    <h3>Headline 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur elit.<a href=""> More...</a></p>
                </div>
            </div>
        </div>
    </main>

<?php include "footer.php" ?>