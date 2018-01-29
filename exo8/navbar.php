<!--navbar div-->
<div class="container-fluid">
  <nav class="navbar">
    <div class="row">
      <div class="container-fluid">
        <div class="navbar navbar-header ">
          <button type="button" class="navbar-toggle navbar-dbleu  btn-primary" data-toggle="collapse" data-target="#MyBurger" aria-expanded="false" style="margin-left: 20px; margin-right: 20px;margin-top: 15px;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand text-white logo_dim">
            <a href="./index.php">
                  <img src="./img/logo-icon-white.png" alt="logo" style="vertical-align:middle"/>
                  <div>BONSAI</div>
              </a>
          </div>
        </div>
        <span class="icon-bar"></span>
          <div class="collapse navbar-collapse navbar-dbleu text-white" id="MyBurger">
            <ul class="nav navbar-nav navbar-right" style="'Cutive Mono', monospace;font-size: 16px; font-weight:lighter; text-align: center">
              <?php
                if(isset($_SESSION['username'])){
               ?>
                 <li id="services"><a href="member.php"><?php echo $_SESSION['username'];?></a></li>
                 <li id="services"><a href="logout.php">log-out</a></li>
               <?php
                }else{
               ?>
                 <li id="services"><a href="inscription_user.php">Sign-up</a></li>
                 <li id="services"><a href="login_user.php">Log-in</a></li>
               <?php
                }
               ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
