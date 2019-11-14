<!Doctype html>
<html>
  <head>
    <title>Dashboard</title>
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
    <div class="main_container">
      <div class="sidebar">
        <div class="sidebar_outer theme bg-sidebar_bg w-100">
          <div class="sidebar_nav">
            <a class="nav_brand position-relative" href="#">
              <span class="icon d-inline-block position-absolute"></span>
              <span class="brand_text">Gentelella Alela!</span>
            </a>
          </div>
          <div class="profile flex-row">
            <div class="profile_pic">
              <img class="theme bg-white rounded-circle p-1" src="images/profile-pic.jpg" alt="">
            </div>
            <div class="profile_info">
              <div class="welcome_text">Welcome,</div>
              <div class="profile_name text-capitalize">john doe</div>
            </div>
          </div>
          <div class="sidebar_menu mt-3">
            <div class="menu_section">
              <div class="title text-uppercase">general</div>
              <div class="accordion side_menu" id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <a class="card-link menu_item position-relative mb-2" href="#">
                      <span class="menu_icon home_icon d-inline-block position-absolute"></span>
                      <span class="menu_name">Home</span>
                    </a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <a class="card-link menu_item position-relative mb-2" href="#">
                      <span class="menu_icon forms_icon d-inline-block position-absolute"></span>
                      <span class="menu_name">Products</span>
                    </a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <a class="card-link menu_item position-relative mb-2" href="#">
                      <span class="menu_icon ui_elements_icon d-inline-block position-absolute"></span>
                      <span class="menu_name">Lists</span>
                    </a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <a class="card-link menu_item position-relative mb-2" href="#">
                      <span class="menu_icon tables_icon d-inline-block position-absolute"></span>
                      <span class="menu_name">Posts</span>
                    </a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFive">
                    <a class="card-link menu_item position-relative mb-2" href="#">
                      <span class="menu_icon data_presentation_icon d-inline-block position-absolute"></span>
                      <span class="menu_name">Settings</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar_footer flex-row">
            <div class="sidebar_footer_item">
              <a class="settings_icon position-relative" href="#"></a>
            </div>
            <div class="sidebar_footer_item">
              <a class="fullpage_icon position-relative" href="#"></a>
            </div>
            <div class="sidebar_footer_item">
              <a class="lock_icon position-relative" href="#"></a>
            </div>
            <div class="sidebar_footer_item">
              <a class="logout_icon position-relative" href="#"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="nav_top position-static">
  			<div class="nav_container d-flex align-items-center">
  				<div class="left py-3 pl-3">
  					<div class="left_container w-100 flex align-items-center justify-content-start">
  						<button class="hamburger border-0 position-relative" id="nav-tog-button">
  	            <span class="icon-bar position-absolute"></span>
  	            <span class="icon-bar position-absolute"></span>
  	            <span class="icon-bar position-absolute"></span>
              </button>
  					</div>
  				</div>
  				<div class="right">
            <div class="right_container d-flex">
              <div class="messages ml-auto">
                <div class="dropdown h-100">
                  <a class="messages_nav_btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="user_image">
                          <img src="images/profile-pic.jpg" alt="">
                        </span>
                        <span class="user_details d-inline-flex flex-row">
                          <span class="user_name text-capitalize">John doe</span>
                          <span class="time font-italic ml-auto">3 minutes ago</span>
                        </span>
                        <div class="message_content">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="user_image">
                          <img src="images/profile-pic.jpg" alt="">
                        </span>
                        <span class="user_details d-inline-flex flex-row">
                          <span class="user_name text-capitalize">John doe</span>
                          <span class="time font-italic ml-auto">3 minutes ago</span>
                        </span>
                        <div class="message_content">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="user_image">
                          <img src="images/profile-pic.jpg" alt="">
                        </span>
                        <span class="user_details d-inline-flex flex-row">
                          <span class="user_name text-capitalize">John doe</span>
                          <span class="time font-italic ml-auto">3 minutes ago</span>
                        </span>
                        <div class="message_content">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item text-capitalize text-center" href="#">
                        See all Alerts
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="profile_nav mx-2">
                <div class="dropdown">
                  <a class="profile_nav_btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="theme bg-white rounded-circle" src="images/profile-pic.jpg" alt="">
                    <span class="user_name text-capitalize">john doe</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item text-capitalize" href="#">Profile</a>
                    <a class="dropdown-item text-capitalize" href="#">Settings</a>
                    <a class="dropdown-item text-capitalize" href="#">help</a>
                    <a class="dropdown-item text-capitalize" href="#">log out</a>
                  </div>
                </div>
              </div>
            </div>
  				</div>
  			</div>
    	</div>
      <div class="main_body">

      </div>
    </div>
  </body>
</html>
