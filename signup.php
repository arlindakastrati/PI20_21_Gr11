<?php include('conect.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("night.jpg");}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1{
  color:  #ff7f27;;

}
button {
  background-color: #ff7f27;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: black;
  opacity: 0.8;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.content {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: none;
}
li a {
  display: block;
  color:#ff7f27;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  border: 1px;
  border-color: #ff7f27;;

}
.su {
  background-color: gray;
  width: 90px;
  height: 50px;
  position: absolute;
  top: 40px;
  left: 20px;
  animation-name: drive;
  animation-duration: 3s;
}
@keyframes drive {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(1400px);
  }
}
.errors{
    color:red;
}
</style>
   
  </head>
<body>
  

  <div class="included">
    <ul style="font-size:25px;">
      <li style="float: left;"><a href="contact.php"><i class="fa fa-chevron-left"></i></a></li>
    </ul>


<form name="Sign-up Validation" action="signup.php" method="post" >
  <?php include('errors.php');?>
  <div class="content" style="color: white;">
    <img class="su" src="su.png" style="radius:30%;margin-left:50px;margin-top:-27px;background:transparent;color:yellow;" >
    <hr>
    <label> Firstname </label>         
<input type="text" placeholder="First name" name="firstname" size="15" value="<?php echo $firstname; ?> "/> <br>  

</span><br>
<br>
<label> Lastname: </label>         
<input type="text" placeholder="Last name" name="lastname" size="15" /> <br> <br>  
<br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>"/>
    <span class="errors">
  
    <br><br>
    </span>

    <label>
      Password: </label><input type="password" name="Password">
       <keygen name="security">
    

   <br><br>
    <label for="repeatp"><b>Repeat password</b></label>
    <input type="password"  name="repeatp" >
    <span class="errors">
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="signup">Sign Up</button>
    </div>


  </div>
</form>

</body>
</html>
