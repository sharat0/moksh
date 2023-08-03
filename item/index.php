<html lang="en">

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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <title>Products</title>
    <style>
        .flex img {
            display: block;
            height: 300px;
            margin: auto auto;
        }
        .block{
            width: 70%;
            margin-left: 15%;
            min-height: 60vh;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
        <li class="logo"><a href="https://mokshfenster.com/"><img src="../img/moksh-logo.png" style="width: 160px; height:6vh; margin-top: -5px"></a></li>
            <li><a href="../">Home</a></li>
            <li><a href="../category">Products</a></li>
            <li><a href="../about">About Us</a></li>
            <li><a href="../contact-us/">Contact Us</a></li>
        </ul>
    </nav>
    <div id="products">
            <?php
            if (isset($_GET['id']) || $_GET['id'] <> '') {
                require '../essentials/_config.php';
                $query = " select * from products where id='".$_GET['id']."'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $name=$row['name'];
                    echo '<h2>'.$name.'</h2>
                    <div class="flex">';
                    echo '<div class="block" data-aos="fade-up">';
                    echo '<img src="../admin/product/uploads/' . $row['img'] . '" class="box-img">';
                    echo '<div class="text">';
                    echo '<h3>' . $name . '</h3>';
                    echo '<p>' . $row['longdesc'] . '</p>';
                    echo '<p> Price - ' . $row['longdesc'] . '</p>';
                    // echo '</div>';   
                    echo '</div>';
                    echo '</div>';
                }
            }
            else{
                header("Location: ../category");
            }
            ?>
        </div>
    </div>

    </div>
    <?php include '../essentials/_foot.php'; ?>

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