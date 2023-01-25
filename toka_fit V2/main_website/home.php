<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/home_styles.css" />
        <title>Home</title>
    </head>
    <body>
        <?php include('includes/navbar.html') ?>
            <section class="hero-image">
                <div class="hero-text">
                    <p class="hero-title">TOKA FITNESS</p>
                    <a href="signup.php"><button class="join-now">JOIN NOW</button></a>
                </div>
            </section>

            <section class="sub-section">
                <div class="project-container">
                    <div class="project-card">
                        <h3 class="card-title">WATCH VIDEOS</h3>
                        <hr>
                        <p class="subtext">Explore our selection of high quality 
                            videos teaching you fitness and healthy living tips.</p>
                        <hr>
                        <p class="subtext"><a class="card-link" href="video.php">WATCH HERE</a></p>
                    </div>
                    <div class="project-card">
                        <h3 class="card-title">TRAIN</h3>
                        <hr>
                        <p class="subtext">Train with our award winning personal trainers 
                            and start changing your life today.</p>
                        <hr>
                        <p class="subtext"><a class="card-link" href="personal_trainer.php">PERSONAL TRAINER</a></p>
                    </div>
                    <div class="project-card">
                        <h3 class="card-title">KNOW MORE</h3>
                        <hr>
                        <p class="subtext">Have a look at our in depth articles of various topics
                            discussing healthy living and fitness.</p>
                        <hr>
                        <p class="subtext"><a class="card-link" href="article.php">READ HERE</a></p>
                    </div>
                </div>
            </section>

            <!-- <div class="card-container">
                <div class="card">
                    <div class="card-content">
                        <h4><b>LEARN FITNESS & HEALTH</b></h4>
                        <p>Explore our selection of high quality 
                            videos teaching you fitness and healthy living tips.</p>
                        <a href="video.php"><button class="card-button">WATCH HERE</button></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h4><b>TRAIN</b></h4>
                        <p>Train with our award winning personal trainers 
                            and start changing your life today.</p>
                        <a href="personal_trainer.php"><button class="card-button">PERSONAL TRAINER</button></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h4><b>KNOW MORE</b></h4>
                        <p>Have a look at our in depth articles 
                            discussing healthy living and fitness.</p>
                        <a href="article.php"><button class="card-button">READ HERE</button></a>
                    </div>
                </div>
            </div> -->
        
        <?php include('includes/footer.html') ?>
    </body>
</html>