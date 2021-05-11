<!DOCTYPE html>
<html lang="en">

<head>
    <title>History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        .all-browsers {
            margin: 90px 300px;
            padding: 5px;
            background-color: rgba(140, 151, 151, 0.4);
            color: white;
            
        }

        .all-browsers>h1,
        .browser {
            margin: 10px;
            padding: 5px;
        }

        .browser {
            background-color: rgba(43, 44, 44, 0.918);
            border-radius: 5px;
            
            
        }

        .browser>h2,
        p {
            margin: 4px;
            font-size: 90%;
        }
        

        article>a:hover {
           color:#ff7f27;
        }
        article>a{
            color: white;
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
      margin:0;
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
      margin:0;

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
    .dropbtn:hover
    {
        color: white;
    }
    
    #wht :hover
    {
        color:white;
    }

    h1{
        font-size: 35px;
        color:rgb(6,82,117);
    }

    h2
    {
        font-size:30px;
    }
    
    p
    {
        font-size: 20px;
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
          <li id="wht" style="margin-left: 45px;"><a href="experiences.html">EXPERIENCES</a></li>
          <li id="wht"><a href="history.html">HISTORY</a></li>
        </ul>
    
      </div>

    <article class="all-browsers" >
        <h1 style="color:#ff7f27;">
        <!-- SUBSTR function --> 
        <?php 
        //Ended events 
        $text = "Some Ended events";
        echo substr($text, 5);
        ?> 
        </h1>
        <article class="browser"  >
            <a  href="https://www.eventbrite.co.uk/e/pacing-how-to-write-an-addictive-page-turner-registration-133203530345?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/Pacing-Anna.jpg" width="200" height="100">
                <h2>
                    The 2021 Financial Checklist</h2>
                <p>
                    Wed, January 6, 2021 <br />
                    <strong>Description: Editor Anna Bierhaus shows you how to improve your writing's pacing to
                        create compulsively readable stories every time you put pen to paper.
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser" style="color: white;">
            <a href="https://www.eventbrite.co.uk/e/a-feminists-guide-to-botany-online-botanical-painting-session-tickets-107072247976?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/Botany.jpg" width="200" height="100">
                <h2>
                    TA FEMINIST'S GUIDE TO BOTANY: Online Botanical Painting Session</h2>
                <p>
                    Thu, Jan 7, 2021 <br />
                    <strong>Description: Our blockbuster FEMINIST'S GUIDE TO BOTANY class is BACK online!
                        Join us for this unique lecture and Botanical Painting session!
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.com/e/van-gogh-museum-amsterdam-livestream-art-tour-jan-9-1100-am-est-tickets-133991557355?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/VanGogh.jpg" width="200" height="100">
                <h2>
                    Van Gogh Museum - Amsterdam: Livestream Art Tour (Jan. 9 - 11:00 AM EST)</h2>
                <p>
                    Sat, January 9, 2021 <br />
                    <strong>Description: Join us for an online/virtual tour of the Van Gogh Museum in Amsterdam, the
                        Netherlands.
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.com/e/virtual-meet-and-greet-a-lincoln-park-zoo-animal-tickets-127932460433?aff=ebdssbonlinebrowse#"
                target="_blank">
                <img src="eventspic/ParkZoo.jpg" width="200" height="100">
                <h2>
                    VIRTUAL MEET-AND-GREET A LINCOLN PARK ZOO ANIMAL</h2>
                <p>
                    Sat, January 9, 2021 <br />
                    <strong>Description: Start your day with an intimate look at the fascinating animals living at
                        Lincoln Park Zoo
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.co.uk/e/vision-board-and-goal-setting-workshop-tickets-133714978099?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/VisionGoal.jpg" width="200" height="100">
                <h2>
                    VISION BOARD AND GOAL SETTING WORKSHOP</h2>
                <p>
                    Sun, 10 January 2021 <br />
                    <strong>Description: Learn how goal setting and vision boards can help you create a compelling
                        future.
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.com/e/managing-upwards-tickets-129281020011?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/ManagingUpwards.jpg" width="200" height="100">
                <h2>
                    MANAGING UPWARDS</h2>
                <p>
                    Mon, January 11, 2021 <br />
                    <strong>Description: Join us for hints and tips on how to manage when your manager doesn't!
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.ca/e/covid-19-vaccine-and-you-tickets-132138468717?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/COVID-19-Vaccine.jpg" width="200" height="100">
                <h2>
                    COVID 19 VACCINE AND YOU INFORMATIVE WEBINAR DAILY SESSION</h2>
                <p>
                    Tue, January 12 <br />
                    <strong>Description: This is NOT the vaccine. This webinar will address concerns Black community
                        members may have about the COVID 19 vaccine.
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.co.uk/e/free-webinar-on-positive-psychology-in-a-time-of-pandemic-tickets-124820273799?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/PositivePsychoPandemy.jpg" width="200" height="100">
                <h2>
                    FREE WEBINAR ON POSITIVE PSYCHOLOGY IN A TIME OF PANDEMIC</h2>
                <p>
                    Wed, 13 January 2021 <br />
                    <strong>Description: Learn how goal setting and vision boards can help you create a compelling
                        future.
                    </strong>
                </p>
            </a>
        </article>
        <article class="browser">
            <a href="https://www.eventbrite.com.au/e/effective-classroom-practice-literacy-for-all-tickets-126901544937?aff=ebdssbonlinebrowse"
                target="_blank">
                <img src="eventspic/EffectiveClassrom.jpg" width="200" height="100">
                <h2>
                    EFFECTIVE CLASSROOM PRACTICE: LITERACY FOR ALL</h2>
                <p>
                    Thu, 14 Jan 2021 <br />
                    <strong>Description: Learning to spell in a complex orthography: can knowing better really help do
                        better? Discover practical suggestions for Tiers 1 & 2

                    </strong>
                </p>
            </a>
        </article>
    </article>


</body>

</html>