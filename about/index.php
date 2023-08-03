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
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="style.css">
  <title>About Moksh</title>
  <style>

  </style>
</head>

<body>
  <nav>
    <ul>
    <li class="logo"><a href="https://mokshfenster.com/"><img src="../img/Moksh_Logo_SVG.svg" style="width: 165px; height:10vh; margin-top: -5px"></a></li>
      <li><a href="../">Home</a></li>
      <li><a href="../category">Products</a></li>
      <li><a href="../abut">About Us</a></li>
      <li><a href="../contact-us/">Contact Us</a></li>
    </ul>
  </nav>
  <main>
    <?php
    include '../essentials/_config.php';
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

    <div class="about-us flex">
      <div class="block2" id="story">
        <h3>Our Story.</h3>
      </div>
      <div class="block">
        <h1>About Us</h1>
        <p>
          <?php echo $story; ?>
        </p>

      </div>
    </div>
    <div id="image1"></div>
    <div id="mission">
      <div class="flex">
        <div class="block">
          <h1>Our Mission</h1>
          <p>
            <?php echo $mission; ?>
          </p>
        </div>
        <div class="flex" id="values">
          <?php
          for ($i = 1; $i < 6; $i++) {

          }
          ?>
          <div class="block-small">
            <?php
            echo "<h3>$mt1</h3>";
            ?>
            <p>
              <?php echo $m1; ?>
            </p>
          </div>
          <div class="block-small">
            <?php
            echo "<h3>$mt2</h3>";
            ?>
            <p>
              <?php echo $m2; ?>
            </p>
          </div>
          <div class="block-small">
            <?php
            echo "<h3>$mt3</h3>";
            ?>
            <p>
              <?php echo $m3; ?>
            </p>
          </div>
          <div class="block-small">
            <?php
            echo "<h3>$mt4</h3>";
            ?>
            <p>
              <?php echo $m4; ?>
            </p>

          </div>
          <div class="block-small">
            <?php
            echo "<h3>$mt5</h3>";
            ?>
            <p>
              <?php echo $m5; ?>
            </p>
          </div>
          <div class="block-small">
            <?php
            echo "<h3>$mt6</h3>";
            ?>
            <p>
              <?php echo $m6; ?>
            </p>
          </div>

        </div>
      </div>
    </div>
    <div id="team" class="flex">
      <div class="block">
        <h1>Our Team</h1>
        <p>
          <?php echo $team; ?>
        </p>
      </div>
      <img src="../img/team.png" alt="">
    </div>
    <div id="customer-satisfaction" class="flex flex-reverse">
      <div class="block">
        <h1>Customer Satisfaction</h1>
        <p>
          <?php echo $customer; ?>
        </p>
      </div>
      <img src="../img/team.png" alt="">
    </div>
    </div>
    </div>

  </main>
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