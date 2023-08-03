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
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../category/style.css">
    <title>Home</title>
    <style>
        .button-63 {
            margin-left: 38%;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
        <li class="logo"><a href="https://mokshfenster.com/"><img src="../../img/moksh-logo.png" style="width: 160px; height:6vh; margin-top: -5px"></a></li>
            <li><a href="../home">Home</a></li>
            <li><a href="../category">Category</a></li>
            <li><a href="../product">Products</a></li>
            <li><a href="../about">About</a></li>
            <li><a href="../logout.php">Logout</a></li>

        </ul>
    </nav>
    <h1>Home</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Why Chose Us</h2>
        <!-- select product category-->
        <?php
        include '../../essentials/_config.php';
        $sql = "SELECT * FROM `home` WHERE `id` = 1";
        $result = mysqli_query($conn, $sql);
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
        <input type="text" name="title1" id="title" placeholder="Title 1" value="<?php echo $t1; ?>">
        <textarea name="res1" id="det" cols="40" rows="10" placeholder="Reason 1"><?php echo $r1; ?></textarea>

        <input type="text" name="title2" id="title" placeholder="Title 2" value="<?php echo $t2; ?>">
        <textarea name="res2" id="longdesc" cols="40" rows="10" placeholder="Reason 2"><?php echo $r2; ?></textarea>

        <input type="text" name="title3" id="title" placeholder="Title 3" value="<?php echo $t3; ?>">
        <textarea name="res3" id="longdesc" cols="40" rows="10" placeholder="Reason 3"><?php echo $r3; ?></textarea>

        <input type="text" name="title4" id="title" placeholder="Title 4" value="<?php echo $t4; ?>">
        <textarea name="res4" id="longdesc" cols="40" rows="10" placeholder="Reason 4"><?php echo $r4; ?></textarea>

        <button type="submit" name="why" id="submit" class="btn">Submit</button>

    </form>

    <?php
    if (isset($_POST['why'])) {

        $res1 = $_POST['res1'];
        $res2 = $_POST['res2'];
        $res3 = $_POST['res3'];
        $res4 = $_POST['res4'];
        $title1 = $_POST['title1'];
        $title2 = $_POST['title2'];
        $title3 = $_POST['title3'];
        $title4 = $_POST['title4'];

        include '../../essentials/_config.php';
        $stmt = $conn->prepare("UPDATE `home` SET `title1`=?, `title2`=?, `title3`=?, `title4`=?, `res1`=?, `res2`=?, `res3`=?, `res4`=? WHERE `home`.`id` = 1");
        $stmt->bind_param("ssssssss", $title1, $title2, $title3, $title4, $res1, $res2, $res3, $res4);


        if ($stmt->execute()) {
            echo "<script>alert('Data Updated Successfully')</script>";

        } else {
            echo "<script>alert('Data Not Updated Successfully')</script>";
        }
    }

    ?>

    <form action="" method="post">
        <h2>Testimonials</h2>
        <a href="./view-testimonial" rel="noopener noreferrer" class="button-63">View</a>

        <input type="text" name="name1" id="name1" placeholder="Name 1" required>
        <input type="text" name="review1" id="review1" placeholder="Review 1" required>
        <input type="text" name="url1" id="url1" class="url" placeholder="Video-ID 1" required>

        <input type="text" name="name2" id="name1" placeholder="Name 2 (optional)">
        <input type="text" name="review2" id="review1" placeholder="Review 2 (optional)">
        <input type="text" name="url2" id="url1" class="url" placeholder="Video-ID 2 (optional)">

        <input type="text" name="name3" id="name1" placeholder="Name 3 (optional)">
        <input type="text" name="review3" id="review1" placeholder="Review 3 (optional)">
        <input type="text" name="url3" id="url1" class="url" placeholder="Video-IDL 3 (optional)">

        <input type="text" name="name4" id="name1" placeholder="Name 4 (optional)">
        <input type="text" name="review4" id="review1" placeholder="Review 4 (optional)">
        <input type="text" name="url4" id="url1" class="url" placeholder="Video-ID 4 (optional)">

        <input type="text" name="name5" id="name1" placeholder="Name 5 (optional)">
        <input type="text" name="review5" id="review1" placeholder="Review 5 (optional)">
        <input type="text" name="url5" id="url1" class="url" placeholder="Video-ID 5 (optional)">
        <button type="submit" name="testimonial" id="submit" class="btn">Submit</button>

    </form>
    <?php
    if (isset($_POST['testimonial'])) {
        // check if input is not empty for each data and enter to database in loop
        for ($i = 1; $i < 6; $i++) {
            $name = $_POST['name' . $i];
            $review = $_POST['review' . $i];
            $url = $_POST['url' . $i];
            if (!empty($name) && !empty($review) && !empty($url)) {
                include '../../essentials/_config.php';
                $cmd = "INSERT INTO `testimonial` (`name`, `review`, `url`) VALUES ('$name', '$review', '$url')";
                $res = mysqli_query($conn, $cmd);
            }
        }
        if ($res) {
            echo "<script>alert('Data Updated Successfully')</script>";
        } else {
            echo "<script>alert('Data Not Updated Successfully')</script>";
        }

    }

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <h2>Logos</h2>
        <a href="./logo" rel="noopener noreferrer" class="button-63">View</a>

        <input type="text" name="name" id="name" placeholder="Product Name">
        <input type="file" name="image" id="img" placeholder="Product Image">
        <button type="submit" name="submit" id="submit" class="btn">Submit</button>

    </form>
    <?php

    include '../../essentials/_config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $targetDir = "uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            // rename
            $newFileName = md5(time()) . "." . $fileType;
            $fileName = $newFileName;
            $targetFilePath = $targetDir . $newFileName;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // insert data into database
                $stmt = $conn->prepare("INSERT INTO `logo` (`name`, `img`) VALUES (?, ?)");
                $stmt->bind_param("ss", $name, $fileName);

                if ($stmt->execute()) {
                    echo "<script>alert('Logo Added Successfully')</script>";
                } else {
                    echo "<script>alert('Logo Not Added')</script>";
                }
            } else {
                $status = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
        }
    }

    ?>

    <?php include '../../essentials/_foot.php'; ?>

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