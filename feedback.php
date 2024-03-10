<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="CouBooks.css">
    <link rel="stylesheet" type="text/css" href="feedback.css">

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
<div class="flex-container-white"></div>
<div class="flex-container-feedback">
    <section>
        <h4>ADD FEEDBACK...</h4>
        <form method="post" action="submitFeedback.php">
            <div class="flex-container-author">
                Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="author" id="authorInput" placeholder="">
            </div>
            Feedback<br><br>
            <textarea name="feedback" id="feedbackInput" placeholder="" style="width: 350px; height: 100px"></textarea><br><br>
            <button type="submit">Submit</button><br><br>
        </form>

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