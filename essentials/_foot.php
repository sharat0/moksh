<?php 
echo '<footer>
    <!-- <div class="flex"> -->
    <div>
        <h1>Moksh Fenster</h1>
        <div class="flex">
        <a href="tel:+919560086143"><i class="fa-solid fa-phone"></i></a>
        <a href="mailto:mokshfenster@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        <a href="https://goo.gl/maps/ybscHbLc2Cqx1uw59" target="_blank" rel="noopener noreferrer"><i
                class="fa-solid fa-location-dot"></i></a>

        </div>
        <p id="copy">Copyright &copy; <span id="year"></span><a href="http://mokshfenster.com">Moksh Fenster</a> </p>
    </div>
</footer>';
?>
<script>
    let year = document.getElementById('year');
    year.innerHTML = new Date().getFullYear();
</script>