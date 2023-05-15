<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--link for the image shown on the browser title(muzira)-->
     <link rel="shortcut icon" type="image/jpg" href="images/Ellipse 14.png"/>
     <link rel="stylesheet" href="login.css">
    <title>Muzira</title>
</head>
<body>
      <!-- form header -->
      <form action="process.php" method="post">
      <div class="form-body">
        <!--music logo at the header-->
        <div class="music-logo">
          <img src="./images/muzir.svg" alt="images">
        </div>
        <!--div for the form-->
        <div class="horizontal-group">
            <!--div for the form header-->
              <div class="form-header">
                 <a href="login"> <h1>Login to Muzira</h1></a>
              </div>
              <!--div for the form page-->
              <div class="form-group">
                  <input type="text" id="Email address" name="email" class="form-input" placeholder="Email address" required>
              </div>
              <div class="form-group-1">
                  <input type="password" id="password" name="password" class="form-input" placeholder="Password" required>
                </div>
                <!--div for the passwords text-->
                <div class="password-text">
                 <a href="forgot password"> <p>Forgot Password?</p></a>
                </div>
                <!--div for the login text-->
                
                <div class="login-text">
                  <button type="submit"  value="login" name="login_user" >Login</button>
                </div>
                <!--div for the borders and or text-->
                <div class="groups">
                <div class="border"></div>
                <div class="or">
                  <p>or </p>
                </div>
          <div class="border"></div>
                </div>
                <!--div for the google-text and google image-->
                <div class="google-text">
                  <!--div for the google image-->
                  <div class="images">
                 <img src="./images/google-removebg-preview 1.png" alt=""></div>
                 <!--div for the google text-->
                 <div class="google-t">
                  <a href=""><p>Continue with Google</p></a></div>
                </div>
                <!--div for the footer texts-->
              <div class="footer">
                <!--div for the dont have account text-->
                  <div class="account-text">
                     <a href=""> <p>Don't have an account?</p></a>
                  </div>
                  <!--div for the sign-up text-->
                  <div class="sign-up">
                      <a href="signup.php"><p>Sign up</p></a>
                  </div>
              </div>
          </div>
      </div>
      </form>
</body>
</html>