<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/6d20788c52.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">

    <title>Contact Us</title>
</head>

<body>
    <div id="main">
        <nav>
            <ul>
                <li class="logo"><a href="../">Moksh Fenster</a></li>
                <li><a href="../">Home</a></li>
                <li><a href="../category/">Products</a></li>
                <li><a href="../about">About Us</a></li>
                <li><a href="../contact-us">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="flex">
            <div class="right">
                <h1>Contact Us</h1>
                <form action="" method="post">
                    <!-- <label for="name">Name</label> -->
                    <input type="text" name="name" id="name" placeholder="name" required>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" name="email" id="email" placeholder="email" required>
                    <!-- <label for="phone">Phone</label> -->
                    <input type="tel" name="phone" id="phone" placeholder="phone number" required>
                    <!-- <label for="message">Message</label> -->
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="message" required></textarea>
                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];

                    $message = $_POST['message'];
                    include('../essentials/_config.php');
                    $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        include('inform.php');
                        sendMail('20cs1a1006@kristujayanti.com', $name, $email, $phone, $message);
                        sendMail('sam.cs2015@gmail.com', $name, $email, $phone, $message);
                        sendMail('mokshfenster@gmail.com', $name, $email, $phone, $message);

                        echo '<script>alert("Your message has been sent successfully. We will contact you soon.")</script>';
                    } else {
                        echo '<script>alert("Something went wrong. Please try again.")</script>';
                    }
                }

                ?>
            </div>
            <div class="left">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15308217.626616957!2d69.21666624048756!3d20.491552875487425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3df3ce22fc75%3A0xa8e4ac97d03e327b!2sV3S%20Sapphire%20Ninety!5e0!3m2!1sen!2sin!4v1680867845871!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="flex">
                    <a href="tel:+919560086143"><i class="fa-solid fa-phone"></i></a>
                    <a href="mailto:mokshfenster@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                    <a href="https://goo.gl/maps/ybscHbLc2Cqx1uw59" target="_blank" rel="noopener noreferrer"><i
                            class="fa-solid fa-location-dot"></i></a>

                </div>
            </div>
        </div>
        <?php include('../essentials/_foot.php'); ?>
        <script src="script.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 200,
                duration: 600,
                easing: 'ease-in-sine',
                delay: 100,
            });
            function toggle() {
                var nav = document.getElementById('res-nav');
                if (nav.style.display == 'block') {
                    nav.style.display = 'none';
                } else {
                    nav.style.display = 'block';
                }
            }
        </script>
    </div>
</body>

</html>