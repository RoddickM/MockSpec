<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/personal_trainer_styles.css" />
        <title>Personal Trainer</title>
    </head>
    <body>
        <?php include('includes/navbar.html') ?>
        
            <section  class="sub-section">
                <div class="project-container">

                    <a href="trainer-robert.php">
                        <div class="project-card">
                            <img class="project-image" src="includes/images/trainer_one.jpg" alt="Project One Image"/>
                            <h3 class="card-title">Robert Lee</h3>
                        </div>
                    </a>

                    <a href="trainer-james.php">
                        <div class="project-card">
                            <img class="project-image" src="includes/images/trainer_two.jpg" alt="Project One Image"/>
                            <h3 class="card-title">James Douglas</h3>
                        </div>
                    </a>

                    <a href="trainer-don.php">
                        <div class="project-card">
                            <img class="project-image" src="includes/images/trainer_three.jpg" alt="Project One Image"/>
                            <h3 class="card-title">Don Joe</h3>
                        </div>
                    </a>

                </div>
            </section>
        
        <?php include('includes/footer.html') ?>
    </body>
</html>