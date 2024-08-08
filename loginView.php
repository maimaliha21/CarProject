<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: url('./assets/backgrounds/bg.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    animation: animateBg 5s linear infinite;
}

@keyframes animateBg{
    100%{
        filter:hue-rotate(360deg);
    }
}

.login-box{
    position: relative;
    width: 400px;
    height:450px ;
    background: transparent;
    border: 2px solid rgba(255,255,255, .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}

h2{
font-size: 2em;
color: white;
text-align: center;
}

.input-box{
    position: relative;
    width: 310;
    margin: 30px 0;
    border-bottom: 2px solid white;
}

.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: white;
    pointer-events: none;
    transition: .5s;
}

.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}


.input-box input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline:none;
    font-size: 1em;
    color: white;
    padding: 0 35px 0 5px;
}

.input-box .icon{
    position: absolute;
    right: 8px;
    color: white;
    font-size: 1.2em;
    line-height: 57px;
}




.remember-forgot{
    margin: -15px 0 15px;
    font-size: .9em;
    color: white;
    display: flex;
    justify-content: space-between ;
}

.remember-forgot label input{
    margin-right: 3px;
}

.remember-forgot a{
    color: white;
    text-decoration: none;
}

.remember-forgot a:hover {
    text-decoration: underline;
}

button{
    width: 100%;
    height: 40px;
    background:white ;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: black;
    font-weight: 500;
}

.register-link{
    font-size: .9em;
    color: white;
    text-align: center;
    margin: 25px 0 10px;
}

.register-link p a{
    color: white;
    text-decoration: none;
    font-weight: 600; 
}

.register-link p a:hover{
    text-decoration: underline;
}

@media (max-width: 360px){
    .login-box{
        width: 100%;
        height:100vh ;
        border: none;
        border-radius: 0;
    }
.input-box{
    width: 290px;
}
}

</style>


</head>

<body>
  <section>
    <div class="login-box">
      <form action="login_service.php" method="post">

        <h2>Login</h2>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="text" name="uname" required>
          <label for="uname">Username</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="psw" required>
          <label for="psw">Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">Remember me</label>
         
        </div>
        <button type="submit">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="registerationView.php">Register Now! </a></p>
        </div>
      </form>
    </div>

  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>