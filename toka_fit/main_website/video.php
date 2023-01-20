<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/personal_trainer_styles.css" />
        <title>Videos</title>
    </head>
    <body>
        <?php include('includes/navbar.html') ?>
        <?php
            session_start();

            if(!isset($_SESSION['usersID']))
            {
            require_once "login_tools.php";
            load();
            }
        
            echo'<section class="card-container">
                <div class="card">
                    <iframe width="440" height="315" 
                    src="https://www.youtube.com/embed/GB9oSPu0O0A" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-content">
                        <h4><b>15 Minute Beginner Home Workout</b></h4> 
                    </div>
                </div>
            </section>

            <section class="card-container">
                <div class="card">
                    <iframe width="440" height="315" 
                    src="https://www.youtube.com/embed/EfJ4aB_enVE" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-content">
                        <h4><b>15 Minute Home Abs Workout</b></h4> 
                    </div>
                </div>
            </section>

            <section class="card-container">
                <div class="card">
                    <iframe width="440" height="315" 
                    src="https://www.youtube.com/embed/CSrBaHX3HxQ" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-content">
                        <h4><b>5 Minute Warm Up (No Equipment)</b></h4> 
                    </div>
                </div>
            </section>';
        ?>

        <?php include('includes/footer.html') ?>
    </body>
</html>