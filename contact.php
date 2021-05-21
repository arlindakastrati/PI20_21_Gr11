<?php
include 'connect.php';?>
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
          alert("Sorry, your browser does not support HTML5 geolocation.");
      }
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body {
  font-family: sans-serif;
  
  background-image: url('night.jpg');
}

* {
  box-sizing: border-box;
  
}

h1 {
  font-family: sans-serif;
  font-weight: 100;
  font-size:35px;
}
h1 li {
  display: block;
  color:white;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}
h1>li:hover::after {
  width: 280px;
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

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: none;
  margin-top:20px;
}
li a {
  font-size: 20px;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;


}
li a:hover::after {
  width: 100%;
}
li a::after {
  content: '';
  background:#ff7f27;
  height: 2px;
  width: 0;
  display: block;
  margin-top: 2px !important;
  transition: width 1s;
  margin: 0 auto;
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
  cursor: pointer;
  border-radius: 30px;
  
}
p{
  background-color:  #ff7f27;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
 border-radius: 30px;
  text-align: center;
}


input[type=submit]:hover {
  background-color: black;
  opacity: 0.8;
}

.contact {
  background-color:rgb(197, 186, 186);
  padding: 10px;
  
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 10px;
  color: white;
  margin-left: 5px;
}
.row {
  margin-top: 50px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
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
}
#back {
  display: list-item;
}
#show{
  margin-top: -50px;
  margin-left: 1170px;
  padding: 10px 40px;
  color: rgb(9, 47, 83);
  background-color: lightcyan;
  }
#result{
    margin-right: 20px;
    text-align: right;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
}


</style>

</head>
<body>
<div >
  <ul>
    <li style="float: left;"><a href="Sandbox.php"><i class="fa fa-chevron-left"></i></a></li>
        <li style="float: right;"><a href="signin.html">SIGN IN</a></li>
    <li style="float: right;"><a href="signup.php">SIGN UP</a></li>

  </ul>
</div>
<h1 style="color: white; text-align: center;margin-top:-50px;"><li>CONTACT US</li></h1>

<div  class="Contact " style="margin-left:2px;margin-right:20px;width:100%; color: rgb(0, 0, 0);">
  <div style="text-align:center">
  </div>
  <div class="row" >
    <iframe style="margin-left: 90px; margin-top: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.592851308751!2d21.16496201489919!3d42.64879067916858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2s!4v1608551724719!5m2!1sen!2s"
     width="650"
     height="470"
     frameborder="0"
     tyle="border:0;" 
     allowfullscreen=""
     aria-hidden="false"
     tabindex="0">
     
    </iframe> 
    
    <div style="
    background-color: rgba(211, 211, 211, 0.2);" class="column"  style="float: left;" style="width: 250px; margin-top: -15px; margin-bottom:-10px;"  >
      <form method="post" action="">
        <label for="Name">First Name</label>
        <input type="text"  name="FirstName" placeholder="Your name.." required onkeyup="showHint(this.value)"  >

        <label for="LastName">Last Name</label>
        <input type="text" name="LastName" placeholder="Your last name.." required onkeyup="showHinti(this.value)">
        

        <label for="email">Email</label>
        <input type="text"  name="Email"required >
        
        <label for="subject">Message</label>
        <textarea id="subject" name="Message" placeholder="Write something.." style="height:170px"required></textarea>
        
        <div id="cv"><input type="submit" name="submit" value="Submit">
       <div id="back"><a href="Sandbox.php"> <canvas id="myCanvas" width="130" height="20" style="border:1px solid;" ></canvas></a></button>
      <p1 style="margin-left: 420px;">Go back</p1>
      </div></div>
      </form>
      <p style="border-radius: 0%;">Suggestions: <span id="txtHint"></span></p>
    </div>
    
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

<script>
//Ajax
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }}
  function showHinti(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethinti.php?q=" + str, true);
    xmlhttp.send();
  }}

</script>
<?php
$firstname = "";
$lastname = "";
$email = "";
$message ="";
$errors=array();

if(isset($_POST["submit"])){
  $firstname = $_POST['FirstName'];
  $lastname = $_POST['LastName'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];
  $status = true;
  setcookie("user",$_POST['FirstName'],time()+3600);
    //user-eshte variabel e cookies(name) qe tragon se cookie do te fshihet pas nje ore(koha+3600 sekonda)
    //mundemi me perdor kohen sa dojme na,per nje muaj pershembull
  if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
    $status = false;
    echo "<h4 style='text-align:center;color:white;'>Please use only letters and spaces.</h4>";
  }
  if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
    $status = false;
    echo "<h4 style='text-align:center'>Please use only letters and spaces.</h4>";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $status = false;
    echo "<h4 style='text-align:center;color:white;'>Your format of your email is not right.</h4>";
  }
  if(!preg_match("/^[a-zA-Z-' ]*$/",$firstname)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<h4 style='text-align:center;color:white;'>Try again.</h4>";
  }
  if (!preg_match("/^[a-zA-Z-' ]*$/",$message)) {
    $status = false;
    echo "<h4 style='text-align:center;color:white;'>Please use only letters and spaces.</h4>";
  }
  if($status){
    try{
  $test = "insert into contact(FirstName,LastName,Email,Message) Values(:firstname, :lastname, :email,:message)";
  $query = $con -> prepare($test);
  $query -> execute([
  ":firstname" => $firstname,
  ":lastname" => $lastname,
  ":email" => $email,
  ":message" => $message
  ]); 

  echo '<h4 style="text-align:center;color:white;">Records updated successfully!</h4>';}
  catch(PDOException $e){
    die('Error' . $e->getMessage());
    }
    catch (Exception $e) {
    die('General Error: '.$e->getMessage());
    }
  try {
      require 'sendmail.php';
      $Contact = new SendEmail($email);
      if($Contact->sendContact($firstname)){
        unset($Contact);
        echo '<h4 style="text-align:center;color:white;">The email has been sent.!</h4>';
    }else{
      echo '<h4 style="text-align:center;color:white;">The email failed! You can try again latter or send us an email at:<strong> sandboxentertainmentt@gmail.com</strong></h4>';
    }}
  catch (Exception $e) {
      echo $e->getMessage();
  }
}
}?>
<?php
echo "<br/>";

$datat = "Prishtine,2020";
$data_copy = preg_replace("([0-9]+)","2021",$datat,);
echo $data_copy;
?>

</body>
</html>


