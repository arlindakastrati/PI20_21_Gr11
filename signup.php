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
</style>
<?php
$errfname=$firstname="";
if($SERVER["REQUEST_METHOD"]=="post"){
  if(empty($_POST["name"])){
    $errfname="Name is required";
  }else{
    $firstname=test_input($_POST["firstname"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$firstname)){
      $errfname="Only letters and white space allowed";
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
    <script> 
  function signupvalidation() { 
      var firstname = document.forms["Sign-up Validation"]["firstname"]; 
      var lastname = document.forms["Sign-up Validation"]["lastname"]; 
      var middlename = document.forms["Sign-up Validation"]["middlename"]; 
      var course =  document.forms["Sign-up Validation"]["course"];
      var email =  document.forms["Sign-up Validation"]["email"]; 
      var phone =  document.forms["Sign-up Validation"]["phone"]; 
      var password =   document.forms["Sign-up Validation"]["psw"]; 
      var passwordr =   document.forms["Sign-up Validation"]["psw-repeat"];
      var gender =   document.forms["Sign-up Validation"]["gender"];
      
     

      if (firstname.value == "") { 
          alert("Please enter your first name?"); 
          firstname.focus(); 
          return false; 
      } 
      if (middlename.value == "") { 
          alert("Please enter your middle name?"); 
          middlename.focus(); 
          return false; 
      } 
      if (lastname.value == "") { 
          alert("Please enter your last name?"); 
          lastname.focus(); 
          return false; 
      } 
    
      if (phone.value == "") { 
          alert( "Please enter your phone number?"); 
          phone.focus(); 
          return false; 
      } 
     
      if (email.value == "") { 
          alert( "Please enter your email?"); 
          email.focus(); 
          return false; 
      } 



      if (password.value == "") { 
          alert("Please enter your password?"); 
          password.focus(); 
          return false; 
      } 
      if (passwordr.value == "") { 
          alert("Please repeat your password?"); 
          passwordr.focus(); 
          return false; 
      } 
     
      if((gender[0].checked == false) && ( gender[1].checked == false )) {
          alert("Please choose your gender?"); 
          gender.focus(); 
          return false;
         }
        
      

      return true; 
  } 
</script> 
  </head>
<body>
  

  <div class="included">
    <ul>
      <li style="float: left;"><a href="contact.html"><i class="fa fa-chevron-left"></i></a></li>
      </ul>


<form name="Sign-up Validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]]);?>" onsubmit=" return signupvalidation()" method="post"z >
  <div class="content" style="color: white;">
    <img class="su" src="su.png" >
    <hr>
    <label> Firstname </label>         
<input type="text" placeholder="First name" name="firstname" size="15" value="<?php echo $firstname;?>"/> <br> <br> 
<?php echo $errfname;?><br>
<label> Middlename: </label>     
<input type="text" placeholder="Middle name" name="middlename" size="15"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" placeholder="Last name" name="lastname" size="15"/> <br> <br>  
  
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
  
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="gender" value="male"/> Male <br>  
<input type="radio" name="gender" value="female"/> Female <br>  
<input type="radio" name="gender" value="other"/> Other  
<br>  
<br>  
  
<label>   
Phone :  
</label><br>
<input style="width: 80px;" type="text" name="country code"  value="+383" size="3"/>   
<input style="width: 50%;" type="text" name="phone" size="10"/> <br> <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <form action="/action_page.php" method="get">
      Password: <input type="password" name="Password">
       <keygen name="security">
    </form>

    <form action="/action_page.php" method="get">
      Repeat password: <input type="password" name="repeat">
       <keygen name="security">
    </form>
    
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
