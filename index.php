<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Line Follower</title>
</head>

<body class="mainBody">
    <div class="homeBody">
        <?php include "header.php"; ?>
        <div class="landingDiv">
            <video autoplay muted loop class="backgroundVideo">
                <source src="Resources/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div id="about" class="aboutSection">
            <div class="sectionTitle">About</div>
        </div>
        <div id="timeline" class="timelineSection">
            <div class="sectionTitle">Timeline</div>




            <div class="timeBody">

                <div class="cards-container">
                    <ul class="cards" style="--items: 6;">
                        <li style="--i: 0;">
                            <input type="radio" id="item-0" name="gallery-item">
                            <label for="item-0">23rd FEB</label>
                            <h2>23rd February</h2>
                            <p>Awarness Program 1</p>
                        </li>
                        <li style="--i: 1;">
                            <input type="radio" id="item-1" name="gallery-item">
                            <label for="item-1">25th FEB</label>
                            <h2>Registration</h2>
                            <p>Registrations are Open. Hurry up and Regsiter  <button class="timelineBtn" onclick="goToRegister();">Register</button></p>
                           
                        </li>
                        <li style="--i: 2;">
                            <input type="radio" id="item-2" name="gallery-item" checked>
                            <label for="item-2">28th FEB </label>
                            <h2>Registration Closed</h2>
                            <p>Registration closed</p>
                        </li>
                        <li style="--i: 3;">
                            <input type="radio" id="item-3" name="gallery-item">
                            <label for="item-3">2003</label>
                            <h2>2003</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil
                                quidem sunt omnis facilis quas corporis at, officia itaque!</p>
                        </li>
                        <li style="--i: 4;">
                            <input type="radio" id="item-4" name="gallery-item">
                            <label for="item-4">2004</label>
                            <h2>2004</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil
                                quidem sunt omnis facilis quas corporis at, officia itaque!</p>
                        </li>
                        <li style="--i: 5;">
                            <input type="radio" id="item-5" name="gallery-item">
                            <label for="item-5">2005</label>
                            <h2>2005</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil
                                quidem sunt omnis facilis quas corporis at, officia itaque!</p>
                        </li>

                    </ul>
                </div>
            </div>



        </div>




    </div>


    <script src="script.js"></script>
</body>

</html>