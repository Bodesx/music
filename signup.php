<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muzira Sign up</title>
    <link rel="stylesheet" href="./signup.css" />
  </head>
  <body>
    <!-- Main container -->
    <main class="main-container" id="main-container">
      <figure>
        <img src="./images/muzir.svg" alt="text-image" />
      </figure>

      <form action="process.php" id="form-container" method="post">
        <h2>Sign in to muzira</h2>

        <div class="button-container">
          <img src="./images/google-icon.svg" alt="google-icon" />
          <h3><a href="#">Continue With Google</a></h3>
        </div>
        <br />

        <div class="line-container">
          <img src="./images/Vector 1.svg" alt="first-line" />
          <h4>OR</h4>
          <img src="./images/Vector 2.svg" alt="second-line" />
        </div>
        <input
          type="email"
          name="email"
          id="user-info"
          placeholder="Email Address"
          required
        />
        <input
          type="password"
          name="password"
          id="user-info"
          placeholder="Create Password"
          required
        />
        <input
          type="password"
          name="confirm_pass"
          id="user-info"
          placeholder="Confrim Password"
          required
        />
        
        <input
          type="text"
          name="user_name"
          id="user-info"
          placeholder="Enter Profile Name"
        />

        <p class="paragraphy">What is your date of birth:</p>
        <div class="container-flex">
          <input type="text" name="day" id="user_info" placeholder="Day" required />
          <input
            type="text"
            name="month"
            id="user_info"
            placeholder="Month"
            required
            class="long"
          />
          <input type="text" name="year" id="user_info" placeholder="Year" required />
        </div>
   
      
        <p class="paragraphy1">Gender</p>
        
          <input type="radio" name="gender" id="user-info1" value="M" />
          <label for="user-info1">Male</label>
  
          <input type="radio" name="gender" id="user-info1" value="F" />
          <label for="user-info1">Female</label>
  
          <input type="radio" name="gender" id="user-info1" value="others" />
          <label for="user-info1">Prefer not to say</label>
        
   
        <p class="paragraphy2">
          By clicking on sign-up you agree fully to the term and condition and
          privacy policy.
        </p>
        <button type="submit" class="button-class" value="Register" name="save_user">sign up</button>
        <p class="footer_paragrapy">Have an account? <a href="login.php" id="account"><span>Log in</span></a> </p>
      </form>
    </main>
    <script></script>
  </body>
</html>