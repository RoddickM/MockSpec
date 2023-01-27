<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/video_styles.css" />
        <title>Videos</title>
    </head>
    <body>
        <?php include('includes/navbar.html') ?>
        <?php
            session_start();

            if(!isset($_SESSION['usersID']))
            {
            require_once "login_tools_to_videos.php";
            load();
            }
            ?>

            <div class="root">
                <section  class="sub-section">
                    <div class="project-container">


                        <div class="project-card">
                            <iframe width="440" height="315" 
                            src="https://www.youtube.com/embed/GB9oSPu0O0A"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <h3 class="card-title">15 Minute Beginner Home Workout</h3>
                        </div>

                        <div class="project-card">
                            <iframe width="440" height="315" 
                            src="https://www.youtube.com/embed/EfJ4aB_enVE"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <h3 class="card-title">15 Minute Home Abs Workout</h3>
                        </div>

                        <div class="project-card">
                            <iframe width="440" height="315" 
                            src="https://www.youtube.com/embed/CSrBaHX3HxQ"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <h3 class="card-title">5 Minute Warm Up (No Equipment)</h3>
                        </div>

                    </div>
                </section>
            </div>

        <?php include('includes/footer.html') ?>
    </body>
</html>