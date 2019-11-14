<!Doctype html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div class="main_body">
      <section class="login d-flex vh-100 align-items-center">
        <div class="container">
          <div class="main_container position-relative mx-auto">
            <div class="login_container">
              <div class="login_title text-capitalize font-bold">
                Login
              </div>
              <div class="login_form mt-3">
                <form>
                  <div class="form-group">
                    <label class="d-none" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="loginEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label class="d-none" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                  </div>
                  <div class="form-group form-check d-flex">
                    <input type="checkbox" class="form-check-input" id="loginCheck">
                    <label class="form-check-label" for="exampleCheck1">Stay logged in</label>
                    <a class="forgot_password text-capitalize ml-auto" href="#">forgot password?</a>
                  </div>
                  <button type="submit" class="submit_btn btn btn-primary text-uppercase w-100">Log In</button>
                </form>
              </div>
              <div class="signup_link text-center my-2">
                <div class="link">
                  New to this? <a class="link_signup">Create Account</a>
                </div>
              </div>
              <div class="login_or_break d-flex justify-content-center my-3">
                <div class="login_text_or text-uppercase text-center">
                  or
                </div>
              </div>
              <div class="continue_with_facebook my-3">
                <button type="button" class="facebook_btn btn btn-primary w-100">Continue with Facebook</button>
              </div>
              <div class="continue_with_instagram my-3">
                <button type="button" class="instagram_btn btn btn-primary w-100">Continue with Instagram</button>
              </div>
            </div>
            <div class="signup_container position-absolute w-100 top left">
              <div class="signup_title text-capitalize font-bold">
                Sign Up
              </div>
              <div class="signup_form mt-3">
                <form>
                  <div class="form-group">
                    <label class="d-none" for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="signupUsername" aria-describedby="textHelp" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label class="d-none" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="signupEmail" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label class="d-none" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="signupPassword" placeholder="Password">
                  </div>
                  <button type="submit" class="submit_btn btn btn-primary text-uppercase w-100">Sign Up</button>
                </form>
              </div>
              <div class="login_link text-center my-2">
                <div class="link">
                  Already a member ? <a class="link_login">Log in</a>
                </div>
              </div>
              <div class="login_or_break d-flex justify-content-center my-3">
                <div class="login_text_or text-uppercase text-center">
                  or
                </div>
              </div>
              <div class="continue_with_facebook my-3">
                <button type="button" class="facebook_btn btn btn-primary w-100">Continue with Facebook</button>
              </div>
              <div class="continue_with_instagram my-3">
                <button type="button" class="instagram_btn btn btn-primary w-100">Continue with Instagram</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </body>
</html>
