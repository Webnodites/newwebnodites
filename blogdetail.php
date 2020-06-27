<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();
$bid = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog Detail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
   
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/style.css">
  
    <script src="js/blog.js"></script>
    <link  rel="shortcut icon" href="Images/logo/favicon.png">

</head>

<body>
    <header>
		<div class="logo"><img id="img1" src="Images/logo/wlogo.png"></div>
		<nav>
			<ul>
                <li><a href="index.html"  > Home</a></li>
                <li><a href="about.html"  > Who We Are</a></li>
                <li><a href="services.html" > Services</a></li>
                <li><a href="portfolio.html" > Portfolio </a></li>
                <li><a href="blog.php"  > Blog </a></li>
                <li><a href="contact.html" > Contact </a></li>
			</ul>

		</nav>
		<div class="menu-toggle"><i class="fa fa-bars"></i></div>
    </header>
 
  <?php
           $q = "select * from blog where id = $bid";
           $res = mysqli_query($con, $q);
           foreach ($res as $blog) {
                         
           ?>   
<div class="page ng-scope" id="top"> 
        
    <div class="page-section bg-dark-alfa-50 parallax-3 port-banner">
        <div class="relative container align-left">
           <div class="row">
              <div class="col-md-8">
                 <h1 class="allpagetitle font-alt mb-20 mb-xs-0 ng-binding"><?php echo $blog['title'];?></h1>
              </div>
              <div class="col-md-4 mt-30">
                
              </div>
           </div>
        </div>
     </div>

     <section class="blogdetail section">
        <div class="container">
          <div class="row">

            <div class="col-lg-8 blogdet">
                <p class="mb-5">
                 <img src="Images/blog/<?php echo $blog['img'];?>" alt="blog image" class="img-fluid blogimg">
                </p>
              <h2 class="mb-3"><?php echo $blog['title'];?></h2>
              <p><i class="fa fa-calendar"></i> <?php echo $blog['date'];?></p><br>

              <?php echo $blog['longdes'];?>
          
              
              <div class="about-author d-flex p-4 row">
                <div class="bio mr-5 col-lg-3 col-md-3">
                   <img src="Images/bloguser/<?php echo $blog['userimg'];?>" alt="user image" class="img-fluid">
                </div>
                <div class="desc col-lg-9 col-md-9">
                  <h3><?php echo $blog['user'];?></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur.</p>
                </div>
              </div>
  
  
              <div class="pt-5 mt-5">
                <div class="int_heading text-left ">
                  <h4><span></span>6 Comments</h4>                    
                </div>
                <ul class="comment-list">
                  <li class="comment row">
                    <div class="bio col-lg-3">
                      <img src="Images/blog/person_2.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body col-lg-9">
                      <h3>John Doe</h3>
                      <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit </p>
                      <div class="reply text-right">
                          <a href="" class="int_btn ">Reply</a>
                      </div>
                    </div>
                  </li>
                  
                   <li class="comment row">
                    <div class="bio col-lg-3">
                      <img src="Images/blog/person_2.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body col-lg-9">
                      <h3>John Doe</h3>
                      <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit </p>
                      <div class="reply text-right">
                          <a href="" class="int_btn ">Reply</a>
                      </div>
                    </div>
                  </li>
                  
                </ul>
                <!-- END comment-list -->
                
                <div class="comment-form ">
                  <div class="int_heading text-left ">
                  <h4><span></span>Leave A comment</h4>                    
                </div>
                  <form action="#" class="">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>
  
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-left">
                          <a href="" class="int_btn ">Post</a>
                      </div>
  
                  </form>
                </div>
              </div>
           



            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 side-bar pl-lg-5 ftco-animate">
              
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
  
              <div class=" section recent ftco-animate">
               <div class="int_heading slider-title">
                  <h4><span></span>Recent Blogs</h4>                    
                </div>
                <div class="singleblog">
                  <a href=""> <img class="blogimg" src="Images/blog/image_1.jpg"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><span class="fa fa-calendar"></span> Nov. 14, 2019</div>
                      <div><span class="fa fa-user"></span> Admin</div>
                      
                    </div>
                  </div>
                </div>
                 <div class="singleblog">
                  <a href=""> <img class="blogimg" src="Images/blog/image_1.jpg"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><span class="fa fa-calendar"></span> Nov. 14, 2019</div>
                      <div><span class="fa fa-user"></span> Admin</div>
                      
                    </div>
                  </div>
                </div>
                 <div class="singleblog">
                  <a href=""> <img class="blogimg" src="Images/blog/image_1.jpg"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><span class="fa fa-calendar"></span> Nov. 14, 2019</div>
                      <div><span class="fa fa-user"></span> Admin</div>
                      
                    </div>
                  </div>
                </div>

               
              </div>
  
            </div>
  
          </div>
        </div>
      </section> 
<?php } ?>



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

    <section id="contact" style="padding: 0;">
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
                            <h4 class="foot">Copyright &copy; 2020 <a href="index.html"><strong style="color: #00e6e6 "> Webnodites </strong></a> Designed By <a href="index.html"><strong style="color: #00e6e6 "> Webnodites </strong></a>
                            </h4>
                    </div>
    
                </div>
    
            <!--- Side Bar --->
      
        
        </div>



     
      </section>
       <script src="js/validate.js"></script>
       <script src="js/jquery.min.js"></script>
       <script src="js/jquery-migrate-3.0.1.min.js"></script>
      
       
      
       <script src="js/jquery.waypoints.min.js"></script>
       <script src="js/jquery.stellar.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
       <script src="js/aos.js"></script>
       
       <script src="js/scrollax.min.js"></script>
     
       <script src="js/main.js"></script>
</body>
</html>