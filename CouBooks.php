<?php
require_once 'displayFeedback.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="author" content = "Rohan">
    <link rel="stylesheet" type="text/css" href="CouBooks.css">
</head>
<body>
    <div class="flex-container">
      <section>
        <h1> &nbsp; &nbsp; COUBOOKS</h1>
        <h1> <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;A WEBTECH DEMO SITE</h1>
      </section>
        <div class="flex-container-home">
            <ul>
                <div class = "flex-container-home">
                    <div><a href = "CouBooks.php">Home</a></div>
                    <div><a href = "courses.php">Courses</a></div>
                    <div><a href = "reservation.php">Reservation</a></div>
                    <div><a href = "about.php">About</a></div>
                </div>
            </ul>
        </div>
    </div>
    <div class="flex-container-white">
    </div>
    <div class = 'flex-container1'>


    <section>
        <h2>Welcome to the CouBooks website</h2>
        <h3>Are you ready to study ?</h3>
        <section>When in need for the correct course books or printed slides, you should have a look to our<br>
        course book website for EA. Here you can find an overview of all course material that is<br>
        needed for every course within the EA program. Select you fase and see what is needed...<br><br>
        This <b>Course Book Service</b> site is specially designed as a demonstration for the web<br>
        technology course. In the end, this page can be found on the development web server<br>
        <a href = "https://studev.groept.be/">studev.groept.be</a> Within this demonstration we will step-by-step create this site.</section>
    </section>
        <div class = 'flex-container2'>
            <section>
                <h3>Opening Hours: </h3>
                <dd><li>Mon:9am-11am</li></dd>
                <dd><li>Tue:1pm-4pm</li></dd>
                <dd><li>Fri:1pm-4pm</li></dd>
                <h3>Feedback</h3>
                <aside>This concept is awesome! Also, the site looks nice and stylish(Joreon) &nbsp; &nbsp;<br>
                    <br>Is there also a mobile app for this site?(Patrick)
                    <?php echo displayAllFeedback(); ?>
                    <a href = "feedback.php"> <br>Add feedback...</a></aside>
                <aside>
            </section>

       </div>
    </div>
    <div class="flex-container-white">
    </div>
    <div class="flex-container-footer">
        <footer>
            <p>Copyright &copy@ 2022 WebTech. KUL ALL Rights Reserved. <a href = " ">Privacy Policy</a> | <a href = " ">Terms of Use</a></p>
        </footer>
    </div>
</body>
</html>