<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/video_styles.css" />
        <title>Videos</title>
    </head>
    <body>
        <!-- PHP code to include navigation bar -->
        <?php include('includes/navbar.html') ?>
        <!-- PHP code that restricts users access to the videos page unless they have signed up -->
        <!-- Could be used for future developments in paid and free content -->
        <?php
            session_start();

            if(!isset($_SESSION['usersID']))
            {
            require_once "login_tools_to_videos.php";
            load();
            }
            ?>

            <!-- If user logged on they can view the page properly  -->

            <!-- Section tag that isolates the cards to its very own space  -->
            <section  class="sub-section">
                <!-- The actual container for the cards -->
                <div class="project-container">

                    <!-- CARD 1 -->
                    <div class="project-card">
                        <iframe width="440" height="315" 
                        src="https://www.youtube.com/embed/GB9oSPu0O0A"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <!-- CARD TITLE -->
                        <h3 class="card-title">15 Minute Beginner Home Workout</h3>
                    </div>

                    <!-- CARD 2 -->
                    <div class="project-card">
                        <iframe width="440" height="315" 
                        src="https://www.youtube.com/embed/EfJ4aB_enVE"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <!-- CARD TITLE -->
                        <h3 class="card-title">15 Minute Home Abs Workout</h3>
                    </div>

                    <!-- CARD 3 -->
                    <div class="project-card">
                        <iframe width="440" height="315" 
                        src="https://www.youtube.com/embed/CSrBaHX3HxQ"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <!-- CARD TITLE -->
                        <h3 class="card-title">5 Minute Warm Up (No Equipment)</h3>
                    </div>

                </div>
            </section>

        <!-- PHP to include footer -->
        <?php include('includes/footer.html') ?>
    </body>
</html>