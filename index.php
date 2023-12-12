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
    <section class="about" id="about">
        <div class="about-container">

        </div>
    </section>
    <section class="portfolio">
        <div class="portfiolio__container">
            <div class="projects">
                <div class="project">
                    <div class="project-text">
                        <div class="project-title">Project Name</div>
                        <div class="project-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquid esse sequi earum qui laborum pariatur tempora quia voluptatibus blanditiis.
                        </div>
                        <div class="project-software">
                            <span class="software-placeholder"></span>
                            <span class="software-placeholder"></span>
                            <span class="software-placeholder"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>