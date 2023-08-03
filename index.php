<!DOCTYPE html>
<html lang="en">
<?php
require 'essentials/_count.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/6d20788c52.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <meta name="author" content="Moksh Fenster">
	<meta name="keywords" content="Aluminium Door and window,Infrastructure ,Ashirvad pipe,hind ware,bath fittings,wooden flooring, Quick step" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Moksh Fenster" />
	<meta property="og:title" content="Moksh Fenster" />
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="300">
	<meta property="og:url" content="https://www.mokshfenster.com/" />
	<meta property="og:description" content="Moksh Fenster is dealing in uPVC/Aluminium Door and window, government Infrastructure dealer for Ashirvad pipe, project dealer of hind ware for bath fittings. We are also into wooden flooring (Quick step) a Belgium based renowned brand & deals in external laminate like High pressure laminate and Aluminium Composite Panel.">
	<meta content="Moksh Fenster is dealing in uPVC/Aluminium Door and window, government Infrastructure dealer for Ashirvad pipe, project dealer of hind ware for bath fittings. We are also into wooden flooring (Quick step) a Belgium based renowned brand & deals in external laminate like High pressure laminate and Aluminium Composite Panel." name="description" />
	<meta name="copyright" content="https://www.mokshfenster.com/">
	<meta name="robots" content="index, follow">
	<meta name="rating" content="general">
    
    <link rel="stylesheet" href="style.css">
	<meta property="og:image" content="./favicon.ico" />
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <title>Moksh Fenster</title>
</head>

<body>
    <nav>
        <ul>
        <li class="logo"><a href="https://mokshfenster.com/"><img src="./img/moksh-logo.png" style="width: 160px; height:6vh; margin-top: -5px"></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="category">Products</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact-us/">Contact Us</a></li>
        </ul>
    </nav>
    <div id="img1">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/slide1.jpg" style="width:100%">
                <h1 class="home-slide-text">Welcome to Moksh Fenster</h1>
                <!-- <div class="slide-text">Caption Text</div> -->
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/slide2.jpg" style="width:100%">
                <h1 class="home-slide-text">Your Dream Home Starts Here</h1>
                <!-- <div class="slide-text">Caption Two</div> -->
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/slide3.jpg" style="width:100%">
                <h1 class="home-slide-text">Elevate Your Interiors with us</h1>
                <!-- <div class="slide-text">Caption Three</div> -->
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="overlay">
            <!-- <h1>Welcome to Moksh Fenster</h1> -->
        </div>
    </div>
    <div id="products">
        <h2>Our Products</h2>
        <div class="flex">

            <?php
            require 'essentials/_config.php';
            $query = " select * from category LIMIT 6";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {

                // echo '<div class="block" data-aos="fade-up">';
                echo '<div class="block">';
                echo "<a href='products?id=" . $row["id"] . "'>";
                echo '<img src="admin/category/uploads/' . $row['img'] . '" class="box-img" loading="lazy"></a> ';
                echo '<div class="text">';
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<p>' . $row['description'] . '</p>';
                // echo '</div>';   
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

    </div>
    <div id="about">
        <h2>Why Choose Moksh Fenster?</h2>
        <div class="flex">
            <div class="left top">
            <!-- <div class="left top" data-aos="fade-right"> -->
                <?php
                require 'essentials/_config.php';
                $query = " select * from home LIMIT 1";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $t1 = $row['title1'];
                $t2 = $row['title2'];
                $t3 = $row['title3'];
                $t4 = $row['title4'];
                $r1 = $row['res1'];
                $r2 = $row['res2'];
                $r3 = $row['res3'];
                $r4 = $row['res4'];
                ?>
                <h3>
                    <?php echo $t1; ?>
                </h3>
                <p>
                    <?php echo $r1; ?>
                </p>

            </div>
            <div class="right top">
            <!-- <div class="right top" data-aos="fade-left"> -->
                <h3>
                    <?php echo $t2; ?>
                </h3>
                <p>
                    <?php echo $r2; ?>
                </p>

            </div>
            <div class="left">
            <!-- <div class="left" data-aos="fade-right"> -->
                <h3>
                    <?php echo $t3; ?>
                </h3>
                <p>
                    <?php echo $r3; ?>
                </p>

            </div>
            <div class="right">
            <!-- <div class="right" data-aos="fade-left"> -->
                <h3>
                    <?php echo $t4; ?>
                </h3>
                <p>
                    <?php echo $r4; ?>
                </p>

            </div>
        </div>
    </div>
    <div id="mission-overlay">
        <h2>Our Mission</h2>
        <h3>Elevate the homes of our customers with high-quality, sustainable products and exceptional service.</h3>
    </div>
    <div id="mission">
    </div>
    <div id="testimonial">
        <h2>What our customer say!</h2>
        <div class="slider-container">
            <div class="slider">
                <?php
                require 'essentials/_config.php';
                $query = " select * from testimonial";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="slide">';
                    $url = $row['url'];

                    // echo 'https://img.youtube.com/vi/'.$url.'/0.jpg';
                    echo '<iframe src="https://www.youtube.com/embed/' . $url . '?controls=0"></iframe>';
                    echo '<div class="slide-text">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p>' . $row['review'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }

                ?>

            </div>
            <div class="slider-buttons">
                <div class="prev-btn"><i class="fa fa-chevron-left"></i></div>
                <div class="next-btn"><i class="fa fa-chevron-right"></i></div>
            </div>
        </div>

    </div>

    <div id="customers">
        <h2>Our Customers</h2>
        <div class="flex">
            <?php
            require 'essentials/_config.php';
            $query = " select * from logo";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            
                echo '<img src="admin/home/uploads/' . $row['img'] . '" class="box-img" loading="lazy">';
                
            }
            ?>
        </div>
    </div>

    <div id="count" class="flex">
        <div class="block customer">
            <h2>Customers</h2>
            <div id="customer">
                <!-- counts -->
            </div>
        </div>
        <div class="block product">
            <h2>Products</h2>

            <div id="product">
                <!-- counts -->
            </div>
        </div>
        <div class="block featured">
            <h2>Featured</h2>
            <div id="featured">
                <!-- counts -->
            </div>
        </div>
    </div>

    

    <?php
    include 'essentials/_foot.php';

    // $count=count($v);
    ?>
<!-- <div class="pyramid-loader">
  <div class="wrapper">
    <span class="side side1"></span>
    <span class="side side2"></span>
    <span class="side side3"></span>
    <span class="side side4"></span>
    <span class="shadow"></span>
  </div>  
</div> -->
<!-- <script>
    var x = document.createElement("BODY");
    x.style.overflow="hidden";
    // load animation
    window.addEventListener("load", function () {
        const loader = document.querySelector(".pyramid-loader");
        loader.style.display="none";
        
        x.style.overflow="auto";
    });
</script> -->
    <script>
        let counts = setInterval(updated);
        let counts2 = setInterval(updated2);
        let counts3 = setInterval(updated3);
        let upto = 0;
        let upto2 = 0;
        let upto3 = 0;
        function updated() {
            var count = document.getElementById("customer");
            count.innerHTML = ++upto;
            if (upto === <?php
            require 'essentials/_config.php';
            // select sum of visit_count from visitors table
            $query = " select sum(visit_count) as total from visitors";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row['total'];

            ?>) {
                clearInterval(counts);
            }

        }
        function updated2() {
            var products = document.getElementById("product");
            products.innerHTML = ++upto2;
            if (upto2 === <?php
            require 'essentials/_config.php';
            // select count of product_id from products table
            $query = " select count(id) as total from products";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row['total'];
            ?>) {
                clearInterval(counts2);
            }

        }
        function updated3() {
            var featured = document.getElementById("featured");
            featured.innerHTML = ++upto3;

            if (upto3 === <?php
            require 'essentials/_config.php';
            // select count of product_id from products table
            $query = " select count(id) as total from category";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row['total'];
            ?>) {
                clearInterval(counts3);
            }

        }
    </script>

    <!-- FOR TOP SLIDE SHOW -->


    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
    </script>


    <!-- FOR BOTTOM SLIDE SHOW -->


    <script>
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let index = 0;
        const intervalTime = 5000;
        let slideInterval;

        const nextSlide = () => {
            index++;
            if (index > slides.length - 3) {
                index = 0;
            }
            slideTransition();
        };

        const prevSlide = () => {
            index--;
            if (index < 0) {
                index = slides.length - 3;
            }
            slideTransition();
        };

        const slideTransition = () => {
            slides.forEach((slide) => {
                slide.style.transform = `translateX(-${index * 33.33}%)`;
            });
        };

        nextBtn.addEventListener('click', () => {
            clearInterval(slideInterval);
            nextSlide();
            // slideInterval = setInterval(nextSlide, intervalTime);
        });

        prevBtn.addEventListener('click', () => {
            clearInterval(slideInterval);
            prevSlide();
            // slideInterval = setInterval(nextSlide, intervalTime);
        });

            // slideInterval = setInterval(nextSlide, intervalTime);
    </script>


    <!-- FOR SCROLL ANIMATION -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 0, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 0, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 100, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>

</body>

</html>