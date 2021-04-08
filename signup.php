<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
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
<?php
$errfname=$firstname=$errmidname=" ";
$midname=$errlaname=$laname=$errrepeat=" ";
$errcourse=$course=$errgender=$gender=$email=$erremail=" ";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST["firstname"])){
    $errfname="Name is required";
  }else{
    $firstname=test_input($_POST["firstname"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$firstname)){
      $errfname="Only letters and white space allowed";
    }
  }

  if(empty($_POST["firstname"])){
    $errmidname="Middlename is required";
  }else{
    $midname=test_input($_POST["middlename"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$midname)){
      $errmidname="Only letters and white space allowed";
    }
  }


  if(empty($_POST["firstname"])){
    $errlaname="Lastename is required";
  }else{
    $laname=test_input($_POST["lastname"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$laname)){
      $errlaname="Only letters and white space allowed";
    }
  }

  //if(empty($_POST["course"])){
    //  $errcourse="Course is required";
  //}else{
    ///  $course=test_input($_POST["course"]);
  //}

  if(empty($_POST["gender"])){
    $errgender="Gender is required";
    }else{
    $gender=test_input($_POST["gender"]);
   }

   if(empty($_POST["email"])){
       $erremail="Email is required";
   }
   else{
    $email=test_input($_POST["email"]);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       $erremail="Ivalid email format";
       }
   }


}

function test_input($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
?>
   
  </head>
<body>
  

  <div class="included">
    <ul>
      <li style="float: left;"><a href="contact.html"><i class="fa fa-chevron-left"></i></a></li>
      </ul>


<form name="Sign-up Validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit=" return signupvalidation()" method="post"z >
  <div class="content" style="color: white;">
    <img class="su" src="su.png" >
    <hr>
    <label> Firstname </label>         
<input type="text" placeholder="First name" name="firstname" size="15" value="<?php echo $firstname;?>"/> <br> <br> 
<span class="errors">
<?php 
if(isset($errfname))
echo $errfname;?>
</span><br>


<label> Middlename: </label>     
<input type="text" placeholder="Middle name" name="middlename" size="15" value="<?php echo $midname?>"/> <br> <br>  
<span class="errors">
<?php
if(isset($errmidname))
echo $errmidname;
?>
</span>

<label> Lastname: </label>         
<input type="text" placeholder="Last name" name="lastname" size="15" value="<?php echo $laname?>"/> <br> <br>  
<span class="errors">
<?php
if(isset($errlaname))
echo $errlaname;
?>
</span>
<br><br>
<label>   
Course :  
</label>   
<select>  
<option name="course" value="Course">Course</option>  
<option name="course" value="BCA">BCA</option>  
<option name="course" value="BBA">BBA</option>  
<option name="course" value="B.Tech">B.Tech</option>  
<option name="course" value="MBA">MBA</option>  
<option name="course" value="MCA">MCA</option>  
<option name="course" value="M.Tech">M.Tech</option>  
</select>  
<span class="errors">
<?php 
if(isset($errcourse))
echo $errcourse;
?>
</span>

  
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="gender" value="male"/> Male <br>  
<input type="radio" name="gender" value="female"/> Female <br>  
<input type="radio" name="gender" value="other"/> Other  
<br> 
<span class="errors">
<?php
echo $errgender;
?>
</span> 
<br>  
  
<label>   
Phone :  
</label><br>
<input style="width: 80px;" type="text" name="country code"  value="+383" size="3"/>   
<input style="width: 50%;" type="text" name="phone" size="10"/> <br> <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email?>"/>
    <span class="errors">
    <?php
    echo $erremail;
    ?>
    </span>

    <form action="/action_page.php" method="get">
      Password: <input type="password" name="Password">
       <keygen name="security">
    </form>

    <form action="/action_page.php" method="get">
      Repeat password: <input type="password" name="repeat">
       <keygen name="security">
    </form>
    <span class="errors">
    </span>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
