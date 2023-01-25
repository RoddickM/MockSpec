<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/forum_styles.css" />
        <title>Forum</title>
    </head>
    <body>
        <?php include('includes/navbar.html') ?>
        <div class="root">
            <section class="hero-image">
                <div class="hero-text">
                    <p class="hero-title">COMING SOON</p>
                    <hr>
                    <p class="hero-countdown" id="demo" style="font-size:30px"></p>
                </div>
            </section>

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Jul 5, 2023 15:37:25").getTime();

                    // Update the count down every 1 second
                    var countdownfunction = setInterval(function() {

                        // Get todays date and time
                        var now = new Date().getTime();
                        
                        // Find the distance between now an the count down date
                        var distance = countDownDate - now;
                        
                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        
                        // Output the result in an element with id="demo"
                        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                        + minutes + "m " + seconds + "s ";
                        
                        // If the count down is over, write some text 
                        if (distance < 0) {
                            clearInterval(countdownfunction);
                            document.getElementById("demo").innerHTML = "EXPIRED";
                            }
                    }, 
                1000);
            </script>
        </div>

        <?php include('includes/footer.html') ?>
    </body>
</html>