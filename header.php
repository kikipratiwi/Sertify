<div class="navbar navbar-expand-lg navbar-dark nav-gradient nav-size-md gap fixed-top">
  
      <!-- Logo Brand Navbar -->  
      <div class="col-xl-2">
        <a href="#" class="navbar-brand" style="margin-left:80px"><img style="height: 40px;" src="assets/img//sertify-logotype.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
        <!-- Navbar -->
        <div class="col-xl-7 d-flex justify-content-center margin-top-xs collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
                <?php
                    if(!isset($_SESSION['login'])){
                        echo "<li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"login.php\">HOME</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"faq.php\">F.A.Q</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"how.php\">HOW IT WORKS</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"corporate.php\">CORPORATE</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"http://localhost:3000/certificate-verification.html\">VERIFIKASI</a>
                        </li>
                        <li class=\"nav-item\">  
                      </li>";
                    }else{
                        echo "<li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"dashboard-status.php\">HOME</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"faq.php\">F.A.Q</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"how.php\">HOW IT WORKS</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"corporate.php\">CORPORATE</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"http://localhost:3000/certificate-verification.html\">VERIFIKASI</a>
                        </li>
                        <li class=\"nav-item\">  
                      </li>";
                    }
                ?>
              
          </ul>
        </div>
        <!-- Button -->
            <ul class="col-xl-3 nav navbar-nav mt-4" style="margin-left:80px;">
                <?php
                    if(!isset($_SESSION['login'])){
                        echo "<li class=\"nav-item\">
                        <a class=\"button-rpeach font-weight-bold nav-link\" href=\"login.php\">LOGIN</a>
                      </li>
                      <li>
                        <a class=\"button-rpeach font-weight-bold nav-link\" href=\"index.php\">SIGNUP</a>
                      </li>";
                    }else {
                        echo "<li class=\"nav-item\">
                        <a class=\"button-rpeach font-weight-bold nav-link\" href=\"logout.php\">LOGOUT</a>
                        </li>";
                    }
                ?>
              </ul>
      </div>
