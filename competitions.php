<!DOCTYPE html>
<html>
    <head>
        <title>
            Competitions
        </title>
        <style>
            .alert{ left: 500px;
                     color: gray;}
             p{
                 color: white;
                 font-family: Arial, Helvetica, sans-serif;
                     }
                     h1 li {
  font-size: 30px;
  display: block;
  
  color:white;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;


}
h1>li:hover::after {
  width: 230px;
}
h1>li::after {
  content: '';
  background:#ff7f27;;
  height: 2px;
  width: 0;
  display: block;
  margin-top: 2px !important;
  transition: width 1s;
  margin: 0 auto;
}
        </style>
        <script>
            
            alert("If you want to continue looking in our competitions press okay!");
        
        </script>

        
    </head>

    <body style="margin-left: 70px; margin-right: 70px;font-size: 22px;
    background-image: url(night.jpg);">
        
        <h1 style="font-size: 45px; text-align: center; color: white;font-family: sans-serif;"><li>COMPETITIONS</li></h1>
        <div class="digin" style="border-radius: 10px;
         background-color: rgba(211, 211, 211, 0.2); height: 815px; ">
       
        <img id="scream" src="a1.jpg" alt="nasachallengeseek" width="450px" height="310px" style="margin-top:30px;margin-left:40px;">
        

        <p style="width:300px; margin-left: 500px; margin-top:-300px;" ><a href="nasachallengeseek.html" style="font-size:20px; color:#ff7f27;  "; target="_blank">Dig In: NASA Challenge Seeks Innovations to Excavate Moon Resources</a></p>
        <p style="margin-left: 500px;font-size: 18px;"><i>January 01,2021</i></p>
        <p style="margin-left: 500px; font-size: 20px;width:300px;">From garage inventors to university students and entrepreneurs, NASA is looking for ideas on how to excavate the.....</p>
        

        <img src="a2.jpg" alt="techenableschanges" width="450px" height="300px" style="margin-top:100px; margin-left: 950px;margin-top: -250px;">
        <p style="width:460px; margin-left: 950px; " ><a href="techenableschanges.html" style="font-size:20px; color:#ff7f27;" target="_blank">Technologies Enabling the Reusage of Oil Contaminated HDPE</a></p>
        <p style="margin-left: 950px;font-size: 18px;"><i>January 21,2021</i></p>
        <p style="margin-left: 950px; font-size: 20px;width:460px;">Petromin, a subsidiary company of ADG, is a leading lubricants and automotive services company. They are seeking technologies......</p>
        

        <img src="a4.jpg" alt="expandthehuman" width="450px" height="320px" style="margin-top:-190px;margin-left:40px;margin-bottom:-20px; ">
        <p style="width:400px; margin-left: 500px; margin-top: -290px; " ><a href="expandthehuman.html" style="font-size:20px; color:#ff7f27; " target="_blank">Contest: Expand the human experience through new sensory perceptions with Edge Impulse and Neosensory</a></p>
        <p style="margin-left: 500px;font-size: 18px;"><i>January 15,2021</i></p>
        <p style="margin-left: 500px; font-size: 20px;width:400px;">Let???s create new senses for ourselves! Leverage Neosensory???s Buzz haptic wristband and Edge Impulse???s machine learning platform to......</p>
      </div>
       <br>
  <!--building function fopen() -->
  <h2 style="color:#fa893e; font-size: 30px; margin-left: 950px;"><?php
    $file = fopen("Doc1.txt","r");
    //Output lines until EOF is reached
    while(! feof($file)) {
      $line = fgets($file);
      echo $line. "<br>";
    }
    
    fclose($file);
    ?></h2>        
    </body>
</html>
