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
    <title>About</title>
    <style>
        .button-63 {
            margin-left: 38%;
        }

        h2 {
            margin-left: 20%;
        }

        /* responsive */
        @media screen and (max-width: 768px) {
            form {
                width: 90%;
                margin-left: 5%;
            }

            input,
            textarea,
            select {
                width: 90%;
                margin-left: 5%;
            }

            .btn {
                width: 30%;
                margin-left: 35%;
            }

            .button-63 {
                width: 30%;
                margin-left: 35%;
            }
        }

        @media screen and (max-width: 480px) {
            form {
                width: 90%;
                margin-left: 5%;
            }

            input,
            textarea,
            select {
                width: 90%;
                margin-left: 5%;
            }

            .btn {
                width: 30%;
                margin-left: 35%;
            }

            .button-63 {
                width: 30%;
                margin-left: 35%;
            }
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
    <h1>About</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- select product category-->
        <?php
        include '../../essentials/_config.php';
        $sql = "SELECT * FROM `about` WHERE `id` = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $story = $row['story'];
        $mission = $row['mission'];
        $mt1 = $row['mt1'];
        $m1 = $row['mission1'];
        $mt2 = $row['mt2'];
        $m2 = $row['mission2'];
        $mt3 = $row['mt3'];
        $m3 = $row['mission3'];
        $mt4 = $row['mt4'];
        $m4 = $row['mission4'];
        $mt5 = $row['mt5'];
        $m5 = $row['mission5'];
        $mt6 = $row['mt6'];
        $m6 = $row['mission6'];
        $team = $row['team'];
        $customer = $row['customers'];
        ?>
        <h2>Story</h2>
        <textarea name="story" id="det" cols="40" rows="10" placeholder="Reason 1"><?php echo $story; ?></textarea>
        <h2>Mission</h2>
        <textarea name="mission" id="det" cols="40" rows="10" placeholder="Reason 1"><?php echo $mission; ?></textarea>

        <input type="text" name="title1" id="title1" placeholder="Title 1" value="<?php echo $mt1; ?>">
        <textarea name="m1" id="longdesc" cols="40" rows="10" placeholder="Reason 2"><?php echo $m1; ?></textarea>

        <input type="text" name="title2" id="title" placeholder="Title 2" value="<?php echo $mt2; ?>">
        <textarea name="m2" id="longdesc" cols="40" rows="10" placeholder="Reason 2"><?php echo $m2; ?></textarea>

        <input type="text" name="title3" id="title" placeholder="Title 3" value="<?php echo $mt3; ?>">
        <textarea name="m3" id="longdesc" cols="40" rows="10" placeholder="Reason 3"><?php echo $m3; ?></textarea>

        <input type="text" name="title4" id="title1" placeholder="Title 1" value="<?php echo $mt4; ?>">
        <textarea name="m4" id="longdesc" cols="40" rows="10" placeholder="Reason 2"><?php echo $m4; ?></textarea>

        <input type="text" name="title5" id="title" placeholder="Title 2" value="<?php echo $mt5; ?>">
        <textarea name="m5" id="longdesc" cols="40" rows="10" placeholder="Reason 2"><?php echo $m5; ?></textarea>

        <input type="text" name="title6" id="title" placeholder="Title 3" value="<?php echo $mt6; ?>">
        <textarea name="m6" id="longdesc" cols="40" rows="10" placeholder="Reason 3"><?php echo $m6; ?></textarea>

        <h2>Team</h2>
        <textarea name="team" id="longdesc" cols="40" rows="10" placeholder="Reason 4"><?php echo $team; ?></textarea>

        <h2>Customer Satisfaction</h2>
        <textarea name="customer" id="longdesc" cols="40" rows="10"
            placeholder="Reason 4"><?php echo $customer; ?></textarea>

        <button type="submit" name="submit" id="submit" class="btn">Submit</button>

    </form>

    <?php
    if (isset($_POST['submit'])) {
        $story = $_POST['story'];
        $mission = $_POST['mission'];
        $mt1 = $_POST['title1'];
        $m1 = $_POST['m1'];
        $mt2 = $_POST['title2'];
        $m2 = $_POST['m2'];
        $mt3 = $_POST['title3'];
        $m3 = $_POST['m3'];
        $mt4 = $_POST['title4'];
        $m4 = $_POST['m4'];
        $mt5 = $_POST['title5'];
        $m5 = $_POST['m5'];
        $mt6 = $_POST['title6'];
        $m6 = $_POST['m6'];
        $team = $_POST['team'];
        $customer = $_POST['customer'];
        // $sql = "UPDATE `about` SET `story`='$story',`mission`='$mission',`mt1`='$mt1',`mission1`='$m1',`mt2`='$mt2',`mission2`='$m2',`mt3`='$mt3',`mission3`='$m3',`mt4`='$mt4',`mission4`='$m4',`mt5`='$mt5',`mission5`='$m5',`mt6`='$mt6',`mission6`='$m6',`team`='$team',`customers`='$customer' WHERE 1";
        // $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     echo "<script>alert('Updated Successfully')</script>";
        // } 
        // else {
        //     echo "<script>alert('Failed to Update')</script>";
        // }
    
        $sql = "UPDATE `about` SET `story`=?, `mission`=?, `mt1`=?, `mission1`=?, `mt2`=?, `mission2`=?, `mt3`=?, `mission3`=?, `mt4`=?, `mission4`=?, `mt5`=?, `mission5`=?, `mt6`=?, `mission6`=?, `team`=?, `customers`=? WHERE 1";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $story, $mission, $mt1, $m1, $mt2, $m2, $mt3, $m3, $mt4, $m4, $mt5, $m5, $mt6, $m6, $team, $customer);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated Successfully')</script>";
        } else {
            echo "Some Technical Error Occoured.";
        }

        mysqli_stmt_close($stmt);

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