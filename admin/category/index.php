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
    <title>Add Category</title>
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
    <h1>Add Category</h1>
    <a href="./view" rel="noopener noreferrer" class="button-63">View Categories</a>

    <form action="" method="post" enctype="multipart/form-data">
        <!-- select product category-->

        <input type="text" name="name" id="name" placeholder="Product Name">
        <textarea name="det" id="det" cols="30" rows="10" placeholder="Product Description"></textarea>
        <input type="file" name="image" id="img" placeholder="Product Image">
        <button type="submit" name="submit" id="submit" class="btn">Submit</button>

    </form>
    <?php

    include '../../essentials/_config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $det = $_POST['det'];
        $targetDir = "uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            // rename
            $newFileName = md5(time()) . "." . $fileType;
            $fileName=$newFileName;
            $targetFilePath = $targetDir . $newFileName;
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // rename
    
                // insert data into database
                $stmt = $conn->prepare("INSERT INTO `category` (`name`, `description`, `img`) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $name, $det, $fileName);

                if ($stmt->execute()) {
                    echo "<script>alert('Category Added Successfully')</script>";
                } else {
                    echo "<script>alert('Category Not Added')</script>";
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
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


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