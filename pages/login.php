<?php 

session_start();

$err = "";
$loginErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $data = [
      "email" => $_POST['email'],
      "password" =>hash("sha256", $_POST['password']),
    ];

    if($_POST['email']=="admin" && hash("sha256", $_POST['password']=="8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918")){
        $_SESSION['admin']=true;
        header("Location: log.php");
    }
    else
    {
      $loginErr = "Email o password errata";
    }

  }
  else
  {
    $err = "Campo richiesto";
  }
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="static/css/new.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="login-container  col-sm-10 offset-sm-1 col-md-6 offset-md-3">
          <div class="screen-1 h-50">
            <img src="../style/logo.jpg" class="logo">
            <form  class="form-login" method="post">
            <h2>Login</h2>

              <span class="error-login"><?php echo $loginErr ?></span>
              <div class="input-container">
                <div class="element col-8 offset-2">
                <label for="email">Username</label>
                <div class="sec-2 col-10 offset-1">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="email" placeholder="Username@gmail.com" />
                </div>
                <span class="error-msg"><?php echo $err ?></span>
                </div><br>
                <div class="element col-8 offset-2">
                <label for="password">Password</label>
                <div class="sec-2 col-10 offset-1">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password" placeholder="············" />
                    <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                </div>
                <span class="error-msg"><?php echo $err ?></span>
                </div><br>
                <button class="login">Login</button>
                <div class="row">
                </div>

                </div>
              </form>
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
<style>
    .login-container, .signup-container{
    margin-top: 40px;
    padding-top: 60px;
    padding-bottom: 60px;
    text-align: center;
    background-color:rgb(255, 255, 160);
    vertical-align:middle;
    height:70%;
    margin-bottom: 30px;
    border-radius: 20px;
}
.text-center, .icon-container{
    text-align: center;
}

.logo {
width: 5%!important;
height: auto!important;
}

.form-login,.form-signup{
    padding-top:40px;
}

.screen-1{
    height: 60%;
}

.screen-1 .element input {
    outline: none;
    border: none;
    width: 100%;
}
.screen-1 .element input::-moz-placeholder,.screen-1 .element input::placeholder, .screen-1 .element input:-ms-input-placeholder {
    color: #ccc;
    font-size: 0.9em;
}

.screen-1 .element ion-icon {
    color: #4d4d4d;
    margin-bottom: -0.2em;
}

.screen-1 .element{
    background: white;
    padding: 0.2em;
    display: flex;
    flex-direction: column;
    gap: 0.5em;
    border-radius: 20px;
    color: #4d4d4d;
}

.sec-2{
    text-align: left;  
}
.screen-1 .login {
    padding: 1em;
    background: #d33642;
    color: white;
    border: none;
    border-radius: 30px;
    font-weight: 600;
}
.screen-1 .footer {
    display: flex;
    font-size: 1em;
    color: #5e5e5e;
    gap: 0px;
    margin-top: 10px;
    text-align: center;
    margin-right: 0px;
    padding: 0px;
}
.screen-1 .footer span {
    cursor: pointer;
}
  
  button {
    cursor: pointer;
}

.error-login, .error-signup, .error-msg{
    color: red;
    font-weight: bold;
}

.error-msg {
    font-size: 15px;
}

.error-login, .error-signup{
    font-size: 30px;
}
.input-container{
    padding-top: 20px!important;

}

</style>