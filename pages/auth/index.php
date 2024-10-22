<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" action="login.php" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="user" type="text" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="pass" type="password" placeholder="Password" required />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <!--<p class="social-text">Or Sign in with social platforms</p>
             <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
        </form>
        <form method="post" action="register.php" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="Name" placeholder="Name" required />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="lastName" placeholder="LastName" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" required />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="NickName" placeholder="NickName" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" name="Address" placeholder="Address" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="number" name="City_idCity" placeholder="City code" required />
          </div>
          <input type="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Welcome!!</h3>
          <p>
            Welcome to our system! We want to help you manage your orders in the best way possible. If you don't have an account, you can create one with us.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>We're glad you're with us!</h3>
          <p>
            We strive to provide the best service. If you already have an account with us, click the button below.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>