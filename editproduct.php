<!--Connect Database-->
<?php
    session_start();
    include("connect.php");
    if(!isset($_GET['pid'])||$_GET['pid']==""){
        header("Location: index.php");
    }
    else{
        $pid = $_GET['pid'];
    }
    $sql="SELECT * FROM product WHERE id =$pid";
    $result = $con->query($sql);
    if(!$result){
        echo "Error : " .$con->error;
    }
    else{
        if($result->num_rows>0){
            $prd =$result->fetch_object();
        }
        else{
            $prd=NULL;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Momiji</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="index.php?menu=menu">Menu</a></li>
                                        <li><a href="index.php?menu=about">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="index.php?menu=promotion">Blog</a></li>
                                                <li><a href="index.php?menu=comment">Comment</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?menu=contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="https://www.instagram.com/jjab27/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/Mrjab12">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100009302512405">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://aboutme.google.com/u/0/?referer=gplus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-xl-block">
                                    <!--<a class="#" href="#">+10 367 453 7382</a>-->

                                    <?php
                                    if(isset($_SESSION['id'])){
                                    ?>

                                    <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Welcome <?php echo $_SESSION['name']  ?>  <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php?cid=<?php echo $_SESSION['id'] ?>">Profile</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                    </li>
                                    <?php
                                    }
                                    else{
                                    ?>
                                    <li><a href="Login.php">Login</a></li>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>MOMIJI</span>
                                </div>
                                <h3>Sushi <br>
                                    Sushi&Sashimi</h3>
                                <h4>Japaness</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>MOMIJI</span>
                                </div>
                                <h3>Sushi <br>
                                    Sushi&Sashimi</h3>
                                <h4>Japaness</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

<!--Edit Product-->
<div class="container">
    <h2>Edit Product</h2>

    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail">
                <img src="img/images/<?php echo $prd->picture; ?>" alt="">
            </div>
        </div>

        <div class="col-md-6">
            <form action="updateproduct.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="control-label col-md-3">Name:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtName" class="form-control" value="<?php echo $prd->name;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="control-label col-md-3">Description:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtDescription" class="form-control" value="<?php echo $prd->description;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="control-label col-md-3">Price:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtPrice" class="form-control" value="<?php echo $prd->price;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="stock" class="control-label col-md-3">Stock:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtStock" class="form-control" value="<?php echo $prd->unintInStock;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="picture" class="control-label col-md-3">Produce Picture:</label>
                    <div class="col-md-9">
                        <input type="file" name="filepic" class="form-control-file" accept="img/images/*">  
                    </div>    
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <input type="hidden" name="hdnProductId" value="<?php echo $prd->id;?>">
                        <input type="hidden" name="hdnProductPic" value="<?php echo $prd->picture;?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>


    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                        New York
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    California
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit">Sign Up</button>
                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>
</html>