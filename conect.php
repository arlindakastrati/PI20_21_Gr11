<?php
session_start();

$firstname = "";
$Password = "";
$repeatp = "";
$email = "";
$errors=array();
// Create connection
$conn = mysqli_connect("localhost", "root","lqsym","dbregistration");
// Check connection


if(isset($_POST['signup'])){
    $firstname=addslashes($_POST['firstname']);
    $email=addslashes($_POST['email']);
    $lastname=addslashes($_POST['lastname']);
    $Password=addslashes($_POST['Password']);
    $repeatp=addslashes($_POST['repeatp']);

    if(empty($firstname)){
      array_push($errors, "Firstname cannot be empty");
    }
    if(empty($lastname)){
      array_push($errors,"lastname cannot be empty ");
    }
    if(empty($Password)){
      array_push($errors, "Password cannot be empty");
    }
    if(empty($repeatp)){
      array_push($errors, "Password confirm cannot be empty");
    }
    if(empty($email)){
      array_push($errors, "Email confirm cannot be empty");
    }
    if($Password!=$repeatp){
      array_push($errors,"Password do not match");
    }

    $emailQuery="SELECT *FROM users WHERE email=? LIMIT 1";
    $stmt=$conn->prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result=$stmt->get_result();
    $userCount=$result->num_rows;
    $stmt->close();

    if($userCount>0){
      array_push($errors,"Email already exists");
    }
    if (count($errors) == 0) {
      $password = md5($Password); 
      $sql = "INSERT INTO users (firstname,lastname,email, Password,repeatp) VALUES ('$firstname','$lastname', '$email', '$Password','$repeatp')";
      mysqli_query($conn, $sql);
      $_SESSION['firstname'] = $firstname;
      $_SESSION['success'] = "You are now logged in!";
      $_SESSION['alert-class']="alert-success";
      header('location: index.php'); 
  }
}

//sign in
if(isset($_POST['signin'])){
  $email=addslashes($_POST['email']);
  $Password=addslashes($_POST['Password']);
  if(empty($email)){
    array_push($errors,"email cannot be empty");
  }
  if(empty($Password)){
    array_push($errors,"Password cannot be empty");
  }
  if (count($errors) == 0) {
    $password = md5($Password); 
    $query = "SELECT * FROM users WHERE email='$email' AND Password='$Password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
      $_SESSION['email']=$email;
      $_SESSION['success']="You are now logged in!";
      header('location: signin.php');
    }
    else {
        array_push($errors, "The username/password doesnt exist.");
        //header('location: login.php');
    }
  }
}
   if (isset($_GET['signin'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: signin.php');
}
?>