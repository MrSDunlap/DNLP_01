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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./dist/index.css">
    <title>DNLP.ME</title>
</head>
<body>
    
    <!-- Navigation import - Components folder -->
    <?php @require_once './components/navigation/nav.comp.php'; dnlpNav()?>

    <section class="main" id="home">
        <div class="home-container">
            <div class="home-container__text">
                <h3>Hello.</h3>
                <h1>I'm <span class="name">Stephen.</span></h1>
                <h4>I design and develop websites.</h4>
                <p>Welcome to my digital portfolio. Here I've built a profile of sorts that encompass a bit of who I am and what I enjoy.</p>
                <div class="home-buttons">
                    <button class="cta-1">portfolio</button>
                    <button class="cta-2">about&nbspme</button>
                </div>
            </div>
            <div class="home-container__social-links">
            <a href="#"><i class="fa-brands fa-square-github"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="bg-animation"></div>
    </section>
    <section class="about" id="about">
        <div class="about-container">
            <div class="about-container__left">
                <div class="about-container__left__bio">
                    <div class="header">Who Am I?</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa porro itaque alias tempore iste similique explicabo dolorum modi accusantium sit, amet officiis debitis corrupti rem repudiandae aut mollitia, aliquam quas! Magnam earum, assumenda aut magni laboriosam necessitatibus iure sint unde culpa pariatur molestiae obcaecati fuga.</p>
                    <button class="cta-2">resume</button>
                    <span class="bg-element"></span>
                </div>
                <div class="about-container__left__skills">
                    <div class="job">
                        <div class="job-container">
                            <div class="job-name">Web Designer</div>
                            <div class="job-place">Lumen</div>
                        </div>
                        <p class="job-date">April 22' - Present</p>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, earum corrupti. Quisquam eligendi beatae ex esse tempore natus quidem repellat.</p>
                    </div>
                    <div class="job">
                        <div class="job-container">
                            <div class="job-name">Web Designer</div>
                            <div class="job-place">Lumen</div>
                        </div>
                        <p class="job-date">April 22' - Present</p>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, earum corrupti. Quisquam eligendi beatae ex esse tempore natus quidem repellat.</p>
                    </div>
                </div>
            </div>
            <div class="about-container__right">
                <img src="./assets/imgs/headshot.jpg" alt="Stephen Dunlap">
            </div>
        </div>
    </section>
    
    
</body>
</html>