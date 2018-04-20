
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="50x50">
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="auth.css">
    <title>Snapping | Submit </title>

  </head>

  <body>
    <div class="navigation">
      <div class="logo"><img src="images/logo001.png"></div>
     <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li> 
               <!-- More  <li><a href="#collections">Collections</a></li> -->
                <li><a href="categories.php">Categories</a></li>
               <!-- More  <li><a href="#about">About</a></li> -->
            <!-- More 
                <select id="more" name="more">
                    <option value="licence">License</option>
                    <option value="photographers">Photographers</option>
                    <option value="top-users">Top Users</option>
                    <option value="contests">Contests</option>
                    <option value="terms-of-use">Terms of Use</option>
                </select>
        -->
                <li><a href="submit.php" id="btn">Submit a Snap</a></li>
                <li class="line-segment"><a></a></li>
                <li class="auth"><a href="signup.php" id="btn">Sign Up</a></li>
                <li><a href="login.php" id="btn">Log In</a></li>
         </ul>
     </div>
    </div>
<div id="mobileNav" class="overlay">

  <!-- Button to close the overlay navigation -->

    <a class="nav-toggle" href=#>
  <span></span>
  <span></span>
  <span></span>
</a>
<nav>
  <ul>
                <li><a href="index.php">Home</a></li> 
                <li><a href="categories.php">Categories</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Licence</a></li>
                <li><a href="#">Photographers</a></li>
                <li><a href="top-users.php">Top Users</a></li>
                <li><a href="contests.php">Contests</a></li>
                <li><a href="submit.php">Submit a Snap</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Log In</a></li>  
</ul>
</nav>
<code>
  clicking on "a" toggles class "open" on "a"
</code>
               
  </div>
</div>
    <div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
                <div class="company-details ">
                  
                    <div class="shadow"></div>
                    <div class="wrapper-1">
                        <div class="logo">
                        </div>
                        <h1 class="title">Snappi.ng</h1>
                        <div class="slogan">Non-cheesy, High Quality Images <br> for Nigerians by Nigerians</div>
                    </div>

                </div>
                <div class="signup-form ">
                    <div class="wrapper-2">
                        <div class="form-title">Submit your Snap!</div>
                        <div class="form">
                           <form method="POST" enctype="" action="submit.php">
                                <p class="content-item">
                                    <label>Choose File
                                      <input type="hidden" name="size" value="1000000">
                                           <div class="form-item"> <input type="file" placeholder="" name="image">
                                         <br> </div>
                                    </label>
                                </p>
                                <div class="button">
                                 <button class="btn" name="image_upload">Upload</button></div>
                         </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

  </body>
</html>