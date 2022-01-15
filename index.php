<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slink</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
    <div class="bg_bot">
        <header>
            <div id="nav_logo"><img src="./img/slink2.png" alt=""></div>
            <span id="nav_">Features</span>
            <span id="nav_pricing_">Pricing</span>
            <?php
              if(!isset($_SESSION['UserId'])){
              ?>
              <span id="nav_"><a href="signup.html">Sign up</a></span>
              <span id="nav_"><a href="login.html">Log in</a></span>
              <?php 
              }
              else{
                ?>
                <span id="nav_"><a href="logout.php">Log out</a></span>
                <?php
              }
            ?>
        </header>
        
        <div class="container_start"> 
            <div class="start_msg_">
                Share your files easly and quickly.
            </div>
            <div class="container_start__">
                <section>
                    Get Start for Free
                </section>
            </div>
        </div>
    </div>
    <div class="pricing__">
      <div class="card-deck">
        <div class="card">
          <div class="card-price"><span class="card-price_">$0</span>/month</div>
          <div class="card-body">
            <h5 class="card-title">Free</h5>
            <p class="card-text">Try our Slink for free.</p>
            <ul>
              <li>File size up to 10mb.</li>
              <li>Limited access / limited request.</li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted">Get Started for Free</small>
          </div>
        </div>
        <div class="card">
          <div class="card-price"><span class="card-price_">$20</span>/month</div>
          <div class="card-body">
            <h5 class="card-title">Premium</h5>
            <p class="card-text">Become our premium User to get our exclusive benefit.</p>
            <ul>
              <li>File size up to 100mb.</li>
              <li>Customer Support 24/7.</li>
              <li>Full accsess / full request.</li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted">Get Started</small>
          </div>
        </div>
      </div>
    </div>
      
      
    <script src=""></script>
      
    </body>
    </html>