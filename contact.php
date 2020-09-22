<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#2386FF">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Contact | Thapar ACM Student Chapter</title>
    <meta name="description" content="Thapar ACM Student Chapter Contact Page">
    <meta name="keywords" content="Thapar, Thapar ACM, Student Chapter, Contact Page">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Thapar Institute of Engineering &amp; Technology, Patiala</span>
              <!--<span><i class="icon-mail"></i>info@yourmail.com</span>-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <!--<li><a href="#"><i class="icon-twitter"></i></a></li>-->
                <li><a href="https://www.facebook.com/acmthapar/"><i class="icon-facebook2"></i></a></li>
                <li><a href="https://www.instagram.com/acmthapar/"><img src="img/insta.png" style="width:18px;"></a></li>
                <!--<li><a href="#"><i class="icon-youtube"></i></a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="Thapar ACM Student Chapter"><img src = "img/logo.png" style="height: 60px;"></a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">HOME</a></li>
              <li><a href="team.html">TEAM</a></li>
              <li><a href="academia.html">ACADEMIC PROGRAM</a></li>
              <li><a href="events.html">EVENTS</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">MORE</a>
                <ul class="dropdown-menu">
                  <li><a href="news.html">ANNOUNCEMENTS</a></li>
                  <li><a href="membership.html">MEMBERSHIP</a></li>
                  <!--<li><a href="courses.html">GALLERY</a></li>
                  <li><a href="course-single.html">Course Single</a></li>-->
                  <li><a href="gallery.html">GALLERY</a></li>
                  <li><a href = "about.html">ABOUT</a></li>
                </ul>
              </li>
              <li class = "active"><a href="contact.php">CONTACT</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Contact Us</h1>
            </div>
          </div>
        </div>
      </section>

      

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>Pages</h3>
                    <ul class="probootstrap-side-menu">
                      
                      <li><a href="index.html">Home</a></li>
                      <li><a href="academia.html">Academic Program</a></li>
                      <li><a href="team.html">Team</a></li>
                      <li><a href="events.html">Events</a></li>
                      <li><a href="about.html">About</a></li>
                      <li class="active"><a>Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Get In Touch</h2>
                  <?php
                  if(empty($_GET['err'])){
                    print("<p>Contact us using the form below.</p>");
                  }
                  elseif ($_GET['err'] == 'empty') {
                    print("<p><span style='color: red'>All Fields are Mandatory</span></p>");
                  }
                  elseif ($_GET['err'] == 'noerr') {
                    print("<p><span style='color: green'>We will get Back to You Shortly</span></p>");
                  }
                  ?>

                  <form action="include/request.inc.php" method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About ACM</h3>
                </p>Thapar ACM Student Chapter is a technical society of TIET, Patiala. Under the guidance of one of the most premier organizations in the computing world, ACM, we strive towards a single goal i.e. improving the coding culture at Thapar. With some of the most brilliant minds of Thapar working as the backbone of the society, we are leaving no stones unturned. Organizing classes and workshop for everyone in the college, as we firmly believe that “Learning knows no boundaries.” Our members have also been selected for internships in some amazing companies like Microsoft, Goldman Sachs, J.P. Morgan, etc. In the end, we are just a bunch of peeps who like to code, have fun and maybe, change the world?</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <!--<li><a href="#"><i class="icon-twitter"></i></a></li>-->
                  <li><a href="https://www.facebook.com/acmthapar/"><i class="icon-facebook2"></i></a></li>
                  <li><a href="https://www.instagram.com/acmthapar/"><i class="icon-instagram2"></i></a></li>
                 <!-- <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>-->
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="news.html">Announcements</a></li>
                  <li><a href="membership.html">Membership</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="academia.html">Academic Program</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Thapar Institute of Engineering &amp; Technology, Patiala, Punjab (140007)</span></li>
                  <a href = "mailto:contact@thaparacm.org"><li><i class="icon-mail"></i><span>contact@thaparacm.org</span></li></a>
                  <a href = "tel:+919999999999"><li><i class="icon-phone2"></i><span>+91 999 9999 999</span></li></a>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; <script>document.write(new Date().getFullYear());</script> <a href="#">Thapar ACM Student Chapter</a>.
                <br/> All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by Thapar ACM
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>