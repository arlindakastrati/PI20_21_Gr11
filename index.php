<?php require_once 'conect.php'?>
<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Home page</title>
<style>
    .logout{
        color:red;
    }

    .form-div{
        margin: 50px auto 50px;
        padding: 25px 15px 10px 15px;
        border: 1px solid #808080;
        border-radius:5px;
        font-size: 1.1em;
        font-family:'Lora',serif;

    }
    .form-div:focus{
        box-shadow: yellow;
    }
    form p{
        font-size: .89em;
    }

    .form-div.login{
        margin-top:100px;
    }
    button{
        color:red;
    }

</style>
<?php
include("backgroundcolor.html")
?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-mod-4 offset-md-4 form-div login" >
                    <?php if(isset($_SESSION['message'])):?>
                        <div class="alert <?php echo $_SESSION['alert-class'];?>">
                        <?php
                           echo $_SESSION['message'];
                           unset($_SESSION['message']);
                           unset($_SESSION['alert-class']);
                        ?>
                        </div>
                        <?php endif;?>
                        <h3> Welcome, <?php echo $_SESSION['firstname'];?></h3>

                <a href="signin.php" class="logout">Log out</a>
                
                <div class="alert alert-warning">
                    You need to verify your account.
                    Sign in to your email account and click on the
                    verification link we just emailed you.
                </div>
                <button class="btn btn-block btn-lg btn-primary" ><a href="Sandbox.php"> I am verified!!!</a></button>
            </div>
            </div>
        </div>
    </body>
</html>