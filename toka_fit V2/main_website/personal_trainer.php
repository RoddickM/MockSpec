<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/personal_trainer_styles.css" />
        <title>Personal Trainer</title>
    </head>
    <body>
        <!-- PHP code to include navigation bar -->
        <?php include('includes/navbar.html') ?>
        
            <!-- section tag to separate cards from other potential future content -->
            <section  class="sub-section">
                <!-- container for the cards -->
                <div class="project-container">

                    <!-- link to about page for first trainer -->
                    <a href="trainer-robert.php">
                        <!-- card div tag -->
                        <div class="project-card">
                            <img class="project-image" src="includes/images/trainer_one.jpg" alt="Project One Image"/>
                            <!-- card title -->
                            <h3 class="card-title">Robert Lee</h3>
                        </div>
                    </a>

                    <!-- link to about page for second trainer -->
                    <a href="trainer-james.php">
                        <!-- card div tag -->
                        <div class="project-card">
                            <img class="project-image" src="includes/images/trainer_two.jpg" alt="Project One Image"/>
                             <!-- card title -->
                            <h3 class="card-title">James Douglas</h3>
                        </div>
                    </a>

                    <!-- link to about page for third trainer -->
                    <a href="trainer-don.php">
                        <!-- card div tag -->
                        <div class="project-card">
                            <img class="project-image" src="includes/images/trainer_three.jpg" alt="Project One Image"/>
                            <!-- card title -->
                            <h3 class="card-title">Don Joe</h3>
                        </div>
                    </a>

                </div>
            </section>

        <!-- PHP to include footer -->
        <?php include('includes/footer.html') ?>
    </body>
</html>