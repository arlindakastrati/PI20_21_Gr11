<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("night.jpg");
            font-family: Arial, Helvetica, sans-serif;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: scroll;
            background-color: rgb(30, 30, 31);
            background-attachment: fixed;

        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
            background-color: none;
            margin-left: 500px;
            border-radius: 30px;

        }

        li {
            float: left;
            border-radius: 30px;

        }

        li a {

            font-size: 25px;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 60px;
            text-decoration: none;
            border-radius: 30px;

        }

        li a:hover::after {
            width: 100%;
            background-color:#ff7f27;

        }

        li a::after {
            content: '';
            background: rgb(188, 202, 204);
            height: 2px;
            width: 0;
            display: block;
            margin-top: 2px !important;
            transition: width 1s;
            margin: 0 auto;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            cursor: pointer;
            font-size: 25px;
            border: none;
            outline: none;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            color: white;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            border-radius: 10px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: rgb(76, 113, 136);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 30px;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: rgba(112, 98, 96, 0.164);
            border-radius: 30px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .container {
            margin-top: 30px;
            margin-left: 140px;
            border-radius: 10px;
            background-color: rgba(211, 211, 211, 0.2);
            padding: 40px 40px 40px;
            max-width: 1200px;
            display: flex;
        }

        .container_image {
            margin: auto;
            border-radius: 8px;
            width: 600px;
            object-fit: contain;
            align-self: flex-start;
        }

        .container_text {
            flex: 1 1 auto;
            color: white;
            padding: 20px 40px;
        }

        .h2 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 40px;
        }

        .p {
            font-family: Georgia, 'Times New Roman', Times, serif;
            line-height: 25px;
        }

        .btn {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            width: 140px;
            height: 40px;
            cursor: pointer;
        }

        .btn {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            width: 140px;
            height: 40px;
            cursor: pointer;
        }

        .dropbtn:hover {
            color: white;
        }

        #wht :hover {
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <ul>
            <div class="dropdown">
                <button class="dropbtn">EVENTS</button>
                <div class="dropdown-content">
                    <a href="events.html">TODAY</a>
                    <a href="upcoming.html">UPCOMING</a>
                </div>
            </div>
            <li id="wht" style="margin-left: 45px;"><a href="experiences.php">EXPERIENCES</a></li>
            <li id="wht"><a href="history.php">HISTORY</a></li>
        </ul>
    </div>
    <br />
    <div class="container">
        <div class="container_text">
            <h2 class="h2">Randy Smith</h2>
            <p class="p">I remember my first days at school. I had got maximum of points in our math tests.
                This was like a sign for others to work more with me.
            </p>

            <p class="p">
                Now, math has got an important place in my life. In future, I want to be a math professor.
                That was the reason that made me search on the internet for trainings or conferences for advanced math
                field application.
                I found <a href="https://www.eventbrite.com/d/online/events/" style="color: white;"
                    target="_blank">EVENTBRITE</a> 
                        <!-- strlen function --> 
                        (<?php 
                        echo strlen("EVENTBRITE"); 
                        ?>)
                        website for online trainings and conferences. After many trainings
                done and many conferences listened, my improvement grade is growing up.
                My next event like a member is the National Math Festival. You can see more information clicking the
                button below.
            </p>

            <a href="https://www.eventbrite.com/e/nmf-live-performance-series-2021-national-math-festival-registration-132587858855?aff=ebdssbonlinesearch"
                target="_blank">
                <button class="btn">MATH</button>
            </a>

        </div>
        <img class="container_image" src="experience/Math.jpg">
    </div>

    <div class="container">
        <img class="container_image" src="experience/Robotics.jpg">
        <div class="container_text">
            <h2 class="h2">Jim and Ben</h2>
            <p class="p">Since our first meet, we wanted to be a great team that will contribute in Robotics
                developement. We started with demounting remote cars.
            </p>
            <p class="p">
                We needed more lectures to improve our knowledge about Robotics. While searching for more lectures, we
                found <a href="https://www.eventbrite.com/d/online/events/"
                style="color: white;" target="_blank">EVENTBRITE</a> website. That was all we needed.
                After that, we found a conference about Robotics and registred there. It will happen on the 7th of
                March. We are too excited for that.
            </p>
            <a href="https://www.eventbrite.com/e/international-conference-on-intelligence-and-safety-for-robotics-tickets-129300480217?aff=ebdssbonlinesearch"
                target="_blank">
                <button class="btn">ROBOTICS</button>
            </a>

        </div>
    </div>


    <div class="container">
        <div class="container_text">
            <h2 class="h2">Albert Johnson</h2>
            <p class="p">My father was my first teacher into coding field. Now, I am a student in "Jackob Milner"
                Primary School.
                We are learning programming languages here too.
            </p>
            <p class="p">
                I was not good at all at programming. My father was too busy with his job, so, he registrated me to a
                training. It was very helpful for me.
                The website that gave me this opportunity was <a href="https://www.eventbrite.com/d/online/events/"
                    style="color: white;" target="_blank">EVENTBRITE</a>. They have a very good staff and they treated
                me so good like a kid.
            </p>
            <p class="p">
                Now, I am a member of a free set of events called "Coding class for kids". It starts at the end of
                January to continue in February.
                If you want, you can be a member too. Just click the button below and you will open the link that
                enables you to join.
            </p>
            <a href="https://www.eventbrite.ca/e/coding-class-for-kids-tickets-101686539176?aff=ebdssbonlinesearch"
                target="_blank">
                <button class="btn">CODING</button>
            </a>

        </div>
        <img class="container_image" src="experience/Coding.jpg">
    </div>
    <div class="container">
        <img class="container_image" src="experience/Gamer.PNG">
        <div class="container_text">
            <h2 class="h2">Andy Parker</h2>
            <p class="p">Like a real game lover, I always wanted to be a Game Developer. I couldn't find any way to do
                that.
                Actually, I always was looking for any school or course for that. But finally, while searching on the
                internet,
                I went to the SANDBOX page. I saw their partnerity with the <a
                    href="https://www.eventbrite.com/d/online/events/" style="color: white;"
                    target="_blank">EVENTBRITE</a>
                page and I immediately opened the link. Now, I am registrated for the event that will happen in 10th of
                February. Check it out clicking the button below.
            </p>

            <a href="https://www.eventbrite.com/e/how-to-get-started-in-game-development-xedg-103-02-registration-136290008083?aff=ebdssbonlinesearch"
                target="_blank">
                <button class="btn">GAMING</button>
            </a>

        </div>
    </div>
    <br/><br/>

</body>

</html>