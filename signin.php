<?php include('conect.php');?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Sign In</title>

<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("night.jpg");}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:#ff7f27;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: 50%;
  padding: 10px 18px;
  background-color: black;
  opacity: 0.8;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  color: white;
}

.imgcontainer {
  text-align: center;
  margin: 15px 0 10px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
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
  color: #ff7f27;;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  border: 1px;
  border-color: #ff7f27;;

}
#div1 {
  float: left;
  width: 350px;
  height: 35px; 
  margin-left: 30px;
 
}
#div2 {
  float: right;
  width: 350px;
  height: 35px; 
  margin-right: 30px;
}
#div1 p {
  font-size: 60px;
  color:#ff7f27;
  font-family: sans-serif;
  font-weight: 100;
}
#div2 p {
  font-size: 60px;
  color:#ff7f27;
  font-family: sans-serif;
  font-weight: 100;
}
@font-face{
  font-family: 'CrimsonText';
  src: url(fonts/CrimsonText-SemiBold.ttf);
  font-style: normal;
  font-weight: 100;
}
</style>
</head>
<body>
  <div class="nav">
    <ul>
      <li style="float: left;"><a href="contact.html"><i class="fa fa-chevron-left"></i></a></li>
      </ul>
<div id="box">
      <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
        <p draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">Sign In</p>
        
      </div>
    </div>
      <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
      <form action="signin.php" method="post" onsubmit="return validate()">
      <?php include('errors.php');?>
        <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  
  <div class="container" style="color: white;">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" id="email" value="<?php echo $email; ?> ">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" id="Password">
        
    <button type="submit" name="signin">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" >
    <button  type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>
<script>
  function allowDrop(e) {
    e.preventDefault();
  }
  
  function drag(e) {
    e.dataTransfer.setData("text", e.target.id);
  }
  
  function drop(e) {
    e.preventDefault();
    var data = e.dataTransfer.getData("text");
    e.target.appendChild(document.getElementById(data));
  }
  function validate(){
      var name=document.getElementById("uname");
      var pasword= document.getElementById("psw");

      if(name.value.trim()==""|| pasword.value.trim()==""){
          alert("No blank values allowed");
          return false;
      }
      else{
          return true;
      }
  }
  </script>
</div>
</body>
</html>