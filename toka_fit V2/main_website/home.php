<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/home_styles.css" />
        <title>Home</title>
    </head>
    <body>
        <!-- PHP code to include navabr - this makes it the program neater 
        and allows use to only one line of code to add the navgiation bar -->
        <?php include('includes/navbar.html') ?>
        <!-- Big hero image with text and a button to the sign up page in the center to attract
        users to the website immediately -->
            <section class="hero-image">
                <div class="hero-text">
                    <p class="hero-title">TOKA FITNESS</p>
                    <a href="signup.php"><button class="join-now">JOIN NOW</button></a>
                </div>
            </section>

            <!-- sub section for the cards that sends users to the main featurs of the website namely
            the videos, articles and personal trainers-->
            <section class="sub-section">
                <div class="project-container">
                    <!-- CARD 1 FOR VIDEOS -->
                    <div class="project-card">
                        <!-- CARD TITLE -->
                        <h3 class="card-title">WATCH VIDEOS</h3>
                        <hr>
                        <!-- CARD SUBTITLE -->
                        <p class="subtext">Explore our selection of high quality 
                            videos teaching you fitness and healthy living tips.</p>
                        <hr>
                        <p class="subtext"><a class="card-link" href="video.php">WATCH HERE</a></p>
                    </div>

                    <!-- CARD 2 FOR PERSONAL TRAINERS -->
                    <div class="project-card">
                        <!-- CARD TITLE -->
                        <h3 class="card-title">TRAIN</h3>
                        <hr>
                        <!-- CARD SUBTITLE -->
                        <p class="subtext">Train with our award winning personal trainers 
                            and start changing your life today.</p>
                        <hr>
                        <p class="subtext"><a class="card-link" href="personal_trainer.php">PERSONAL TRAINER</a></p>
                    </div>

                    <!-- CARD 3 FOR ARTICLES -->
                    <div class="project-card">
                        <!-- CARD TITLE -->
                        <h3 class="card-title">KNOW MORE</h3>
                        <hr>
                        <!-- CARD SUBTITLE -->
                        <p class="subtext">Have a look at our in depth articles of various topics
                            discussing healthy living and fitness.</p>
                        <hr>
                        <p class="subtext"><a class="card-link" href="article.php">READ HERE</a></p>
                    </div>
                </div>
            </section>
        
        <!-- Same logic as the header, one line of code to include all the features and avoid unnecessary code -->
        <?php include('includes/footer.html') ?>
    </body>
</html>