<!DOCTYPE html>
<html>
<head>
<?php
$cookie_name = "user";
$cookie_value = "Contact";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
setcookie($cookie_name, $cookie_value, time() - 3600, "/");
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     
}
?>
<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= " in this session.";
?>
   
   <body>
      <?php  echo ( $msg ); ?>
   </body>

   <?php
   session_destroy();
?>
<br></br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
<title>Contact</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
<script>
  function showPosition() {
      if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
              var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
              document.getElementById("result").innerHTML = positionInfo;
          });
      } else {
          alert("Sorry, your browser does not support HTML5 geolocation."); // alert
      }
  }
</script>
<?php
include("backgroundcolor.html")
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body {
  font-family: sans-serif;
  
  background-image: url('foto.jpg');
}

*{
  box-sizing: border-box;
  
}
@font-face{
  font-family: 'CrimsonText';
  src: url(fonts/CrimsonText-SemiBold.ttf);
  font-style: normal;
  font-weight: 100;
}
h1 {
  font-family: sans-serif;
  font-weight: 100;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: none;
}
li a {
  font-size: 25px;
  display: block;
  
  color:black;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid rgb(168, 166, 166);
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  border-radius: 30px;
}

input[type=submit] {
  background-color: #ff7f27;
  color: white;
  padding: 12px 40px;
  border: none;
  float:left;
  cursor: pointer;
  border-radius: 30px;
  
}
p{
  background-color: #ff7f27;
  width:100%;
  color: black;
  padding: 12px 10px;
  border: none;
  cursor: pointer;
 border-radius: 30px;
  text-align: center;
}
input[type=submit]:hover {
  background-color:black ;
  opacity: 0.8;

}


@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

#cv {
  display:flex;
}
#myCanvas {
margin-left: 380px;
border-radius: 60px;
float:right;
}

#show{
  margin-top: -50px;
  margin-left: 1200px;
  padding: 10px 40px;
  color: rgb(9, 47, 83);
  background-color: lightcyan;
  }
  #result{
    margin-right: 20px;
    text-align: right;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
  }
  

.contact {
  background-color:rgb(197, 186, 186);
  padding: 10px;
  
}
h2{
  color:black;
}
  
  h1 li {
  font-size: 30px;
  display: block;
  color:black;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}
h1>li:hover::after {
  width: 200px;
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
.error{color: #FF0000;}
</style>

</head>
<body>
<div >
  <ul>
    <li style="float: left;"><a href="Sandbox.php"><i class="fa fa-chevron-left"></i></a></li>
        <li style="float: right;"><a href="signin.html">Sign in</a></li>
    <li style="float: right;"><a href="signup.php">Sign up</a></li>

  </ul>
</div>
<h1 style="font-size: 39px; color: black; text-align: center;margin-top: -55px;font-family: sans-serif;list-style: none;"><li>CONTACT US</li></h1>


<div  class="Contact " style="margin-left:2px;margin-right:20px;width:100%; color: white;">
  <div style="text-align:center">
  </div>
  <div class="row" >
    <iframe style="margin-left: 110px; margin-top: 100px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.592851308751!2d21.16496201489919!3d42.64879067916858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2s!4v1608551724719!5m2!1sen!2s"
     width="800"
     height="500"
     frameborder="0"
     tyle="border:0;" 
     allowfullscreen=""
     aria-hidden="false"
     tabindex="0">
     
    </iframe> 
    
    <script>
        $(document).ready(function(){
          $("form").submit(function(){
            alert("Submitted");
          });
        });
      </script>
</div>
<div id="result">
  

</div>
<button id="show" type="button" onclick="showPosition();">Show Position</button>
</div>

<script>
  var c = document.getElementById("myCanvas");
  var ctx = c.getContext("2d");
  ctx.font = "15px Arial";
  ctx.fillText("Go back", 40, 15);
  </script>
<script>
var c = document.getElementById("myCanvas");
var grd = ctx.createLinearGradient(0, 0, 200, 0);
grd.addColorStop(0, "green");
grd.addColorStop(1, "white");

ctx.fillStyle = grd;
ctx.fillRect(0, 0, 150, 80);

</script>

    <?php

$NameErr = $LastNameErr = $genderErr = $commentErr = $emailErr = "";
$Name = $LastName = $gender = $comment = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $NameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
      $NameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["LastName"])) {
    $LastNameErr = "LastName is required";
  } else {
    $LastName = test_input($_POST["LastName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) {
      $LastNameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Leave a message?Let's get in touch</h2>
<?php
$str = 'Click to fill out the blank parts';
$pattern = '/parts/i';
echo preg_replace($pattern, 'fields', $str);
?>
<br></br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="content" style="color: black;">
  First Name: <input type="text" name="Name"  placeholder="Your name.." >
  <span class="error">* <?php echo $NameErr;?></span>
  <br><br>
 Last Name: <input type="text" name="LastName" placeholder="Your last name..">
  <span class="error">* <?php echo $LastNameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label for="subject">Message:</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
  <br><br>
        Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

      <input type="submit" name="submit" value="Submit">  
      </div></div>
      </form>

<br></br>
<br></br>

<?php
echo "<br/>";

$datat = "Prishtine,2020";
$data_copy = preg_replace("([0-9]+)","2021",$datat,);
echo $data_copy;
?>

</body>
</html>


