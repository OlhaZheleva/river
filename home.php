<?php get_header();
// Template Name: home page
?>


<!-------main block --------->
<section class="main" id="bl1">
    <div class="content">
        <p>River advisors</p>
        <h1>Investment Solutions <br>for a Dynamic World</h1>
        <a class="button" href="">Contacts us</a>
    </div>
    <div class="main-img">
        <img src="<?php echo get_template_directory_uri();?>/images/main-img.png" alt="">
    </div>
</section>
<!-------services block --------->
<section class="services" id="bl2">
    <div class="container">
        <h2>Our services</h2>
        <div class="services-items">
            <div class="item">
                <span>1</span>
                <h3>Portfolio management</h3>
            </div>
            <div class="item">
                <span>2</span>
                <h3>Risk assessment</h3>
            </div>
            <div class="item">
                <span>3</span>
                <h3>Legal services</h3>
            </div>
            <div class="item">
                <p>We offer a wide range of services in investment advisory, including portfolio management,
                    risk assessment, legal services and other investment solutions, to help our clients
                    achieve their goals</p>
                <a href="#footer" class="button">Contacts us</a>
            </div>
        </div>
    </div>
</section>
<!-------advantages block --------->
<section class="advantages" id="bl3">
    <div class="container">
        <img class="decor" src="<?php echo get_template_directory_uri();?>/images/decor.png" alt="">
        <div class="inner">
            <h2>Our advantages</h2>
            <p>We provide several advantages to our clients, such as the expertise of our advisors,
                personalised
                approach to each client, innovative investment strategies, legal support and a high level of
                professionalism.</p>
        </div>
        <div class="advantages-image">
            <img src="<?php echo get_template_directory_uri();?>/images/photo.png" alt="">
        </div>
    </div>
</section>
<!------- About us block --------->
<section class="about" id="bl4">
    <div class="picture">
        <img src="<?php echo get_template_directory_uri();?>/images/aboutus.png" alt="">
    </div>
    <div class="content">
        <h2>About us</h2>
        <div class="items">
            <div class="item">
                <span>1</span>
                <p>We are specialising in investment advisory services providing one-stop-shop services. Our
                    primary objective is to empower our clients to make informed decisions and achieve their
                    goals with confidence.</p>
            </div>
            <div class="item">
                <span>2</span>
                <p> Our team consists of experienced advisors who possess deep knowledge and professional
                    skills in different industries. We take pride in our expertise and strive to deliver
                    high-quality service.</p>
            </div>
        </div>
        <a href="#footer" class="button">Contacts us</a>
    </div>
</section>
<!------- Our Clients block --------->
<section class="clients" id="bl5">
    <img class="decor" src="<?php echo get_template_directory_uri();?>/images/decor.svg" alt="">
    <div class="container">
        <div class="content">
            <h2>Our Clients</h2>
            <p>We serve a wide range of clients, including private investors, businesses, and organisations.
                Regardless of the size or type of client, we are ready to offer tailored solutions that
                align with their needs and goals.</p>
        </div>
        <a href="#footer" class="button button-white">Drop us a line</a>
    </div>
</section>

<?php get_footer(); ?>