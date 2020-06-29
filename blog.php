<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="If you can dream it, we can design it.">
<meta name="keywords" content="">
<link rel="shortcut icon" href="Images/logo/favicon.png">
<title>Blog</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css"> 
<link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/blog.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/blog.js"></script>
</head>
<body>
   
<section id="section1"> 
          
    <header>
		<div class="logo"><img id="img1" src="Images/logo/wlogo.png"></div>
		<nav>
			<ul>
        <li><a href="index.html"> Home</a></li>
        <li><a href="about.html"> Who We Are</a></li>
        <li><a href="services.html"> Services</a></li>
        <li><a href="portfolio.html"> Portfolio </a></li>
        <li><a href="blog.php"> Blog </a></li>
        <li><a href="contact.html"> Contact </a></li>
			</ul>

		</nav>
		<div class="menu-toggle"><i class="fa fa-bars"></i></div>
    </header>


</section>
<div class="page ng-scope" id="top"> <!-- For Sticky Contact Section-->

<div class="page-section bg-dark-alfa-50 parallax-3 port-banner">
   <div class="relative container align-left">
      <div class="row">
         <div class="col-md-8">
            <h1 class="allpagetitle font-alt mb-20 mb-xs-0 ng-binding">Blog</h1>
         </div>
         <div class="col-md-4 mt-30">
           
         </div>
      </div>
   </div>
</div>

<section class="blog">  

  <div class="page-wrapper">
    <div class="post-slider">
      <i class="fa fa-chevron-left prev"></i>
      <i class="fa fa-chevron-right next"></i>
      <div class="int_heading slider-title">
        <h4><span></span>Trending Posts </h4>                    
      </div>
      <div class="post-wrapper">
        <?php
           $q = "select * from blog";
           $res = mysqli_query($con, $q);
           foreach ($res as $blog) {
                         
           ?>
        <div class="post">
          <img src="Images/blog/<?php echo $blog['img'];?>" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="blogdetail.php?id=<?php echo $blog['id'];?>"><?php echo substr($blog['title'],0,25);?>...</a>
            </h4>
            <i class="fa fa-user"> <?php echo $blog['user'];?></i>
                &nbsp;
            <i class="fa fa-calendar"> <?php echo $blog['date'];?></i>
          </div>
        </div>

         <?php
              } 
          ?>
        <div class="post"><img src="Images/coming.jpg" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="s.html">lorem ipsum</a>
            </h4>
            <i class="fa fa-user"> lorem ipsum</i>
              &nbsp;
            <i class="fa fa-calendar"> may 18,2020</i>
          </div>
        </div>
          
        <div class="post"><img src="Images/coming.jpg" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="s.html">lorem ipsum</a>
            </h4>
            <i class="fa fa-user"> lorem ipsum</i>
              &nbsp;
            <i class="fa fa-calendar"> may 18,2020</i>
          </div>
        </div>
        
        <div class="post"><img src="Images/coming.jpg" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="s.html">lorem ipsum</a>
            </h4>
            <i class="fa fa-user"> lorem ipsum</i>
              &nbsp;
            <i class="fa fa-calendar"> may 18,2020</i><
          </div>
        </div>
      </div>
    </div>
      
    <div class="content clearfix">
      <div class="main-content">
        <div class="int_heading slider-title">
          <h4><span></span>All Posts </h4>                    
        </div>
        <?php
           $q = "select * from blog";
           $res = mysqli_query($con, $q);
           foreach ($res as $blog) {
                         
           ?>
        <div class="post row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="Images/blog/<?php echo $blog['img'];?>" class="post-image">
          </div>  
          <div class="post-preview col-lg-8 col-md-8 col-sm-12">
            <h1><a href="blogdetail.php?id=<?php echo $blog['id'];?>"><?php echo $blog['title'];?></a></h1>
            <i class="fa fa-user"><?php echo $blog['user'];?></i>
                &nbsp;
            <i class="fa fa-calendar"> <?php echo $blog['date'];?></i>
            <p class="preview-text">
                <?php echo $blog['shortdes'];?>
                
            </p>
            <div class="read-more text-right">
                <a href="blogdetail.php?id=<?php echo $blog['id'];?>" class="int_btn ">Read More</a>
            </div>

          </div>
        </div>
        <?php
          }
        ?>
      
      </div>
        
      <div class="side-bar">

        <div class="section search">
          <div class="int_heading ">
          <h4><span></span>Search</h4>                    
        </div>
          <form action="abc.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search">
          </form>
        </div>

        <div class="section topics">
          <div class="int_heading slider-title">
          <h4><span></span>Topics</h4>                    
        </div>
            <ul>
              <li><a href="#">App</a></li>
              <li><a href="#">Gates</a></li>
              <li><a href="#">Web</a></li>
              <li><a href="#">Cloud</a></li>
              <li><a href="#">Software</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>  
  <!-- page wrapper -->
  <!-- footer -->
  </section>
</div>


</div>

    <div class="sidebar-contact">
        <div class="toggle"></div>
        <h2>REQUEST A CALL BACK</h2>
        <form action="contact.php" method="post" class="">
            <input type="text" class="only-alpha" name="name" placeholder="Name" required>
            <input type="email" class="" name="email" placeholder="Email" required>
            <input type="text" class="only-numeric" name="mobile" maxlength="10" placeholder="Phone Number" required>
            <textarea placeholder="Message" name="msg" required></textarea>
            <input type="submit" value="Send" name="requestcall">
        </form>
    </div>
  <section id="contact">
    <div class="page-section1 footer pb-60" style="background: #111111;">
        <section class="small-section bg-dark">
            <div class="container relative">
                <div class="text-left">
                    <h2 style="color: #808080;font-size:100px;line-height:100px;margin: 0px; cursor: pointer; font-family: 'Montserrat', sans-serif;">Don't be shy<br>
                        <a href="mailto:webnodites@gmail.com"><strong style="color: #98afc3;">Say </strong> <strong style="color: #00e6e6;">Hi.</strong></a>
                    </h2>
                    <br>
                </div>
                    <h6 class="footerp" style="font-size: 30px;margin-top: 0px;">We'd love to hear from you </h6>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="Images/icons/Call.png">
                    </div>
                    <h3 class="benefit-title font-alt">give us a call</h3>
                    <div class="benefits-descr">
                        <a href="tel:+918500792188"> +91-8500792188</a>
                    </div>
                </div>
                     
                <div class="benefit-item">
                    <div class="benefit-icon">
                       <img src="Images/icons/email.png">
                    </div>
                    <h3 class="benefit-title font-alt">Send us Email</h3>
                    <div class="benefits-descr">
                        <a href="mailto:webnodites@gmail.com" target="_blank">webnodites@gmail.com</a>
                    </div>
                </div>
                     
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="Images/icons/instagram.png">
                    </div>
                    <h3 class="benefit-title font-alt">Find us</h3>
                    <div class="benefits-descr">
                        <a href="https://www.instagram.com/webnodites/" target="_blank">webnodites</a>
                    </div>
                </div>
                     
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="Images/icons/whatsapp.png">
                    </div>
                    <h3 class="benefit-title font-alt">whatsapp</h3>
                    <div class="benefits-descr">
                        <a href="https://api.whatsapp.com/send?phone=+91-8500792188"  target="_blank">+91-8500792188</a>
                    </div>
                </div>
                     
            </div>
        </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footerlist">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Who we are</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="blog.html">Blog </a></li>
                                <li><a href="contact.html">Contact </a></li>      
                            </ul>
                        </div>
    
                    </div>
    
                    <div class="col-md-4" style="padding-top:10px ;">
                            <!-- Social Links -->
                        <div class="social-links mb-110 mb-xs-60" >
                            <a href="https://twitter.com/webnodites" title="Twitter" target="_blank"><img src="Images/icons/twitter_32.png"></a>
                            <a href="https://www.linkedin.com/in/webnodites/" title="LinkedIn+" target="_blank"><img src="Images/icons/linkedin_32.png"></a>
                            <a href="https://www.facebook.com/Webnodites-110977740623699" title="Facebook" target="_blank"><img src="Images/icons/facebook_32.png"></a>
                            <a href="https://github.com/Webnodites/webnodites" title="GitHub" target="_blank"><img src="Images/icons/github_32.png"></i></a>
                        </div>
                            <!-- End Social Links -->
                    </div>
                     <!-- Top Link -->
                        <div class="local-scroll" style="float: right; padding-top:10px;">
                            <a href="#top" class="link-to-top" title="Top of the Page"><img src="Images/icons/up2.png"></a>
                        </div>
                </div>
                <div class="footer-text">
                        <h4 class="foot">Copyright &copy; 2020 <a href="index.html"><strong style="color: #00e6e6 "> Webnodites </strong></a> Designed By <a href="index .html"><strong style="color: #00e6e6 "> Webnodites </strong></a>
                        </h4>
                </div>

            </div>

        <!--- Side Bar --->
  
    
    </div>
 
  </section>
</div>  

 <script src="js/validate.js"></script>
</body>
</html>