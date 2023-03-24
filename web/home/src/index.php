<?php
$url = $_GET['url'];
if(isset($url)){

    $ch = curl_init($url);
    echo curl_exec($ch);
 }else{
    echo ""; 
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Dorang landing page.">
    <meta name="author" content="Devcrud">
    <title>Yekolo Temari</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Dorang main styles -->
	<link rel="stylesheet" href="assets/css/dorang.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    
    <!-- page navbar -->
    <nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Explore</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><img src="assets/imgs/yekolo.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page"></a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item search">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
    </nav><!-- end of page navbar -->

  

    <!-- page header -->
    <header class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <h1 class="header-title">What Happens Tomorrow?</h1>
            <p class="header-subtitle">“Sometimes, You Have To Demo A Threat To Spark A Solution!”
                Barnaby Jack, 1977-2013</p>

            <button class="btn btn-theme-color modal-toggle"><i class="ti-control-play text-danger"></i> Watch Video</button>

        </div>
    </header><!-- end of page header -->

    <!-- modal -->
    <div class="modalBox">
        <div class="modalBox-body">
            <iframe width="100%" height="450px" class="border-0" 
            src="#">
            </iframe>
        </div>          
    </div><!-- end of modal -->

    <!-- page container -->
    <div class="container page-container">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Adventure</h6>
            <p class="mb-5">Let share with you the adventures we had...</p>
        </div>  

        <!-- row -->
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/yekolo.png" alt="" width="100px" height="400px">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">HackNight</h1>
                        <h6 class="subtitle"></p>
                        
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/chewata.png" alt="" width="100px" height="400px">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Chewata CTF</h1>
                        <h6 class="subtitle"></p>
                        
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="assets/imgs/hackfest.jpg" alt="" width="100px" height="400px">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">HackFest</h1>
                        <h6 class="subtitle"></p>
                      
                    </div>          
                </a>
            </div>          
        </div><!-- end of row -->

        <a href="#">Load More <i class="ti-angle-double-right angle"></i></a>


       
        

        <a href="#">All Posts <i class="ti-angle-double-right angle"></i></a>

    </div> <!-- end of page container -->

    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
        <div class="container">
            <div class="col-md-10 col-lg-8 m-auto">
                <h6 class="title mb-2">Contact Us</h6>
                <p class="mb-5">Feel Free To Drop Us A Line.</p>
                <form action="" class="form-group">
                    <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                    <input type="email" class="form-control" placeholder="Enter Email"requried>
                    <textarea name="comment" id="comment" rows="6"   class="form-control" placeholder="Write Something"></textarea>
                    <input type="submit" value="Send Message" class="form-control">
                </form>
            </div>

            <!-- footer -->
            <footer class="footer">
                <p class="infos">&copy; <script>document.write(new Date().getFullYear())</script>, Made with <i class="ti-heart text-danger"></i> by <a href="#">Yekolo Temari</a></p>       
                <span>|</span>  
                <div class="links">
                    <a href="#">Home</a>
                    <a href="#">Explore</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
            </footer><!-- end of footer -->

        </div><!-- end of container -->
    </div><!-- end of pre footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/dorang.js"></script>

</body>
</html>
