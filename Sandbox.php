<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sandbox-Technology Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="foto5.png"  >
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
     

    </head>
    <body>
        <div class="hero">
            <div class="nav-bar" style="border: black;">
              <div class="logo">
                <img src="foto5.png"  >
                <img src="foto8.png" style="width: 110px;background-color: transparent;">
              </div>
                <div class="nav-links" style="margin-left: 450px;" >
                  
                
                <ul> 
                   
                    <a href="#" ><li>HOME</li></a>
                   
                    
                    <div class="dropdown">
                        <button class="dropbtn"><a href="#"><li>EDUCATION</li></a>
                            <div class="dropdown"></button>
                        <div class="dropdown-content">
                            
                         <a href="#">C++</a>
                          <a href="#">HTML</a>
                          <a href="#">CSS</a>
                          <a href="#">JAVA</a>
                          <a href="mathandtechno.html">STEM</a>
                        </div>
                      </div>
                      <a href="events.html" ><li>EVENTS</li></a>
                      <a href="competitions.html" ><li>COMPETITIONS</li></a>
                      <a href="contact.html" ><li>CONTACT</li></a>
                      <div class="dropdown">
                        <button class="dropbtn"><a href="#"><li>OTHER</li></a>
                            <div class="dropdown"></button>
                        <div class="dropdown-content">
                          <a href="Jobs.html">JOBS</a>
                          <a href="startup.html">START-UP</a>
                          <a href="about1.html">ABOUT</a>
                          <a href="ourteam.html">OUR TEAM</a>
                          
                        </div>
                      </div>
                      
                </ul>
                  
                </div>
               
            </div>
            <div class="banner-title"><h1>“If you know<span style="color:#ff7f27;"> why,<br> SANDBOX will help<br>you </span> to overcome any how.”</h1>
            <button type="button" class="btn1" onclick="location.href='om.html';">EXPLORE</button>
            <button type="button" class="btn2" onclick="location.href='about1.html';">OUR MISSION</button></div>

        
        </div>
        
  <main id="first">
    <br>
    <p>
    <h1 style="color:#ff7f27; text-shadow: none;
        float:right; margin-top:49px; margin-right:382px;margin-left:-99px;">Our mission</h1><br>
    <h1 style="color:aliceblue; text-decoration: none;
          margin-top:99px; margin-right:-522px; text-shadow: none;
          float:right; width:534px; font-size:20px; margin-right:-284px;">
          <br> 
      <!-- EXPLODE & IMPLODE funksioni -->
      <?php
      $funskioniimplode = array('Our', 'mission', 'is to', 'help', 
      'you to learn', 'some', 'programming languages', 'in this page. ');
      $implodegati = implode(' ', $funskioniimplode);
      echo $implodegati;

      $explodegati = explode(".", "Except. you. can learn. here you also can. see some. events
                             which have to do with. technology!");
      print_r($explodegati[0]);
      print_r($explodegati[1]);
      print_r($explodegati[2]);
      print_r($explodegati[3]);
      print_r($explodegati[4]);
      print_r($explodegati[5]);
      print_r($explodegati[6]);
      echo "<br/>";
     ?>
       
       
    </h1>
    <div class="ccontainer4">
      <img src="om2.jpg" href="learnhtml.html" class="iimage4">
      <div class="ooverlay4">
        <div class="ttext4">
          <a href="om.html">Read more about our mission</a>
        </div>
      </div>
    </div>
    </p>
    <p>
    <h1 style="color:#ff7f27; text-shadow: none; margin-left:315px; margin-top:114px;">C++ language</h1>
    <h1 style="color:aliceblue; text-decoration: none;
      margin-top:56px; text-shadow: none; margin-left:185px; width:534px; font-size:20px; ">
      <!-- TRIM_funksioni -->
      <?php
      $trimfunksioni = "                   C++ is              a cross-platform language
      that can be used to create high-performance       applications.
      C++ gives       programmers a high level of          control    over system                 resources       and memory.        ";
      echo  trim($trimfunksioni);
      echo "<br/>";
      ?>
      </h1>
    <div class="ccontainer1">
      <img src="c++image1.jpg" href="cpp.html" class="iimage1">
      <div class="ooverlay1">
        <div class="ttext1">
          <a href="cpp.html">Read more about C++</a>
        </div>
      </div>
    </div>
    </p>
    <br><br><br><br><br>
    <p>
    <h1 style="color:#ff7f27; text-shadow: none;
    float:right; margin-top:-649px; margin-right:382px;margin-left:-99px;">Html markup language</h1>
    <br><br>
    <h2 style="color:aliceblue; text-decoration: none;
    margin-top:-599px; margin-right:192px; text-shadow: none;
    float:right; width:534px; font-size:20px;">
    <!-- STR_REPLACE --> 
      <?php
      echo str_replace("CSS", "HTML", "CSS is one of the essential languages in the web that allows us to build the structure of our website. " );
      echo str_replace("assembly", "markup", "It is not a programming language, rather its what its called a ”assembly language”." );
      ?>
    </h2>

    <div class="ccontainer2">
      <img src="html1.jpg" href="learnhtml.html" class="iimage2">
      <div class="ooverlay2">
        <div class="ttext2">
          <a href="learnhtml.html">Read more about HTML</a>
        </div>
      </div>
    </div>
    </p>
    <p>
    <h1 style="color:#ff7f27; text-shadow: none; margin-left:315px; 
    margin-top:-121px; margin-bottom:545px;">JAVA language</h1>
    <h1 style="color:aliceblue; text-decoration: none;
    margin-top:-506px; text-shadow: none; margin-left:185px; width:534px; font-size:20px; ">Java is a computer programming
      language. It enables programmers to write computer instructions using
      English-based commands instead of having to write in numeric codes. </h1>
    <br>
    <div class="ccontainer3">
      <img src="javaa.jpg" class="iimage3">
      <div class="ooverlay3">
        <div class="ttext3">
          <a href="introduction.html">Read more about JAVA</a>
        </div>
      </div>
    </div>
    </p>
    
    <footer class="footer">
      <p style=" text-align: center;
      color: white;">Sandbox is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using Sandbox, you agree to have read and accepted our terms of use, cookie and privacy policy.</p>
  
      <div class="footer-bottom">
          <p2>All right reserved by &copy; <b>Sand-box entertainment 2021</b></p2>
      </div>

  </footer>
  </main>
        <script>
            function myFunction(x) {
              x.classList.toggle("change");
            }
            </script>


      

    </body>
</html>