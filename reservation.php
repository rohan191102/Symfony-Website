<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="CouBooks.css">
    <link rel="stylesheet" type="text/css" href="reservation.css">
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
<section>
    <div class="flex-container-reservation">
        <h4>STEP1: WHO ARE YOU</h4>
        please provide the info about you, so we can search for the books you need...
        <div class="flex-container-fase">
            Fase: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="bachelor year" id="bachelorYear">
                <option value="First Bachelor">First Bachelor</option>
                <option value="Second Bachelor">Second Bachelor</option>
                <option value="Third Bachelor">Third Bachelor</option>
            </select>
        </div>
        <div class="flex-container-email">
            Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="emailInput" placeholder=""><br>
        </div><br>
        <button style="width: 100px">Next...</button><br><br>

        <h4>STEP2: WHAT BOOKS DO YOU NEED? </h4><br>
        Select the books you wish to order: <br><br>
        <div class="flex-container-checkbox1">
            <input type="checkbox" id="book1" name="Computer networking: A top down approach" value=""><br>
            <label for="book1">Computer networking: A top down approach<br></label>
        </div>
        <div class="flex-container-checkbox2">
            <input type="checkbox" id="book2" name="Silberschatz's Operating Systems Concepts" value=""><br>
            <label for="book2">Silberschatz's Operating Systems Concepts<br></label><br>
        </div><br>
        <button style="width: 100px">Next...</button><br>
        <h4>YOU HAVE ORDERED...</h4>
        Below you will find an overview of the books you have reserved. Once you confirm your reservation you can<br>
        pick them up at our KD and pay at the desk<br><br>
        <li>Computer networking: A top down approach</li><br><br>
        <button style="width: 200px">Confirm Reservation</button><br><br>

    </div>
    <div class="flex-container-white"></div>
    <div class = 'flex-container-footer'>
        <footer>
            <p>Copyright &copy; 2022 WebTech. KUL ALL Rights Reserved. <a href = " ">Privacy Policy</a> | <a href = " ">Terms of Use</a></p>
        </footer>
    </div>

</section>
</body>
</html>