<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team</title>
  <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
  <link rel="stylesheet" href="ourteam.css">
  <style>
    h1{
      font-size: 33px;
    }
    h1 li {
  
  display: block;
  
  color:white;
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
  height: 3px;
  width: 0;
  display: block;
  margin-top: 2px !important;
  transition: width 1s;
  margin: 0 auto;
}
  </style>
</head>

<body>
  <div class="team">
    <h1 class="heading-team"><li>OUR TEAM</li></h1>
    
    <div class="profiles">
      <div class="profile">
        <img src="profil1.jpg" class="profile-img">

        <h3 class="user-name">Arlinda</h3>
        <h5>Member</h5>
        <p> A student of Computer Engineering. Aspiring to be a Web-App Developer.</p>
        <ul>
          <li><a href="https://www.facebook.com/arlinda.b.kastrati" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="https://www.linkedin.com/in/arlinda-kastrati-9305a7194/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/_arlindakastrati/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
         
          </ul>
      </div>
      <div class="profile">
        <img src="profil3.jpg" class="profile-img">

        <h3 class="user-name">Alberiana</h3>
        <h5>Member</h5>
        <p>A student of Computer Engineering. Aspiring to be a Frontend Engineer .</p>
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=100010962993825" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="https://www.snapchat.com/alberianatofaj/" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/alberianatofaj/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="profile">
        <img src="betimiprofil.jpg" class="profile-img">

        <h3 class="user-name">Betimi</h3>
        <h5>Member</h5>
        <p>A student of Computer Engineering. Aspiring to be an Android Developer.</p>
        <ul>
          <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="https://www.snapchat.com" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
      </div>
      <div class="profile">
        <img src="albiona.jpg" class="profile-img">

        <h3 class="user-name">Albiona</h3>
        <h5>Member</h5>
        <p>A student of Computer Engineering. Aspiring to be a S-Media Manager.</p>
        <ul>
          <li><a href="https://www.facebook.com/albiona.kukaj" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="https://www.snapchat.com/albionakukaj" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/_albionakukaj/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
      </div>
      
    </div> 

    <?php
     // echo "Today is " . date("Y/m/d") . "<br>";
    ?>
    
    <h3 id="data" style=" border: none; margin-top: 120px;margin-left: 20px; "></j3>
      <script>
       var d = new Date();
       document.getElementById("data").innerHTML=d;
      </script>
    
    
  </div>

  
</body>

</html>

