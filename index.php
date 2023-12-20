<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Script import for components -->
    <script src="./components/navigation/nav.js" defer></script>
    <script src="./components/navigation/indicator.js" defer></script>

    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/585dcb6825.js" crossorigin="anonymous"></script>

    <!-- AnimeJS Style import -->
    <script src="./node_modules/animejs/lib/anime.min.js"></script>

    <!-- Main JS file -->
    <script src="./script.js"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./dist/index.css">
    <title>dnlp.me</title>
</head>

<body>

    <!-- Navigation import - Components folder -->
    <?php @require_once './components/navigation/nav.comp.php';
    dnlpNav() ?>

    <section class="main" id="home">
        <div class="home-container">
            <div class="home-container__text">
                <h1 class="title">Stephen <span class="name">Dunlap</span></h1>
                <p class="body-copy">Front-end Developer | Web Designer | Creative Strategist</p>
            </div>
        </div>
        <div class="scroll-indicator">
            <span class="mouse-shape">
                <span class="mouse-scroll"></span>
            </span>

        </div>
        <!-- Animated background code here -->
        <div class="bg-animation"></div>
    </section>
    <section class="portfolio">
        <div class="portfiolio__container">
            <?php 
            @require_once './components/carousel/projects.php';
            @require_once './components/carousel/carousel.comp.php';
            carouselCard($projects);
            ?>
            
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-container">
            <span class="box"></span>
            <span class="box"></span>
        </div>
    </section>
    

</body>

</html>