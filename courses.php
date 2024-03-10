<?php
require_once 'displayBooks.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="CouBooks.css">
    <link rel="stylesheet" type="text/css" href="courses.css">
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
                <div><a href = "courses.html">Courses</a></div>
                <div><a href = "reservation.php">Reservation</a></div>
                <div><a href = "about.php">About</a></div>
            </div>
        </ul>
    </div>
</div>
<div class="flex-container-white"></div>
<div class = "flex-container-courses1">
    <section>
        Below you can find an overview of all available courses<br><br>
        <h3>Computer Networks</h3>
        <ul>
            <li>Computer Networking: A top down approach</li>
        </ul>
        <h3>Operating Systems</h3>
        <ul>
            <li>Silberschatz's Operating Systems concepts</li>
            <li>Printout version of lecture slides</li>
        </ul>
        <?php echo displayBooks(); ?>
    </section>
</div>
<div class="flex-container-white"></div>
<div class = 'flex-container-footer'>
    <footer>
        <p>Copyright &copy; 2022 WebTech. KUL ALL Rights Reserved. <a href = " ">Privacy Policy</a> | <a href = " ">Terms of Use</a></p>
    </footer>
</div>
</body>
</html>