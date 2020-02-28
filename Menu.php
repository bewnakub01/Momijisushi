
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Menu</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- best_burgers_area_start  -->

    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Sushi Menu</span>
                        <h3>Best Ever Sushi</h3>
                    </div>
                </div>
            </div>

            <form action="result.php" method="post" class="gb">
            <div class="col-md-12">
                <input type="text" class="form-control" name="txtSearch" placeholder="Search">
            </div>

            <div class="col-md-12">
                <button name="submit" class="btn btn-block btn-success">
                    <i class="glyphicon glyphicon-search"></i> Search
                </button>
            </div>

    </form>

            <div class="row">
            <?php
            $sql = "SELECT * FROM product ORDER BY id";
            $result = $con->query($sql);
                    if(!$result){
                        echo "ERROR ";
                    }
                    else{
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
            ?>    
            <!--Menu-->
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/images/<?php echo $prd->picture ?>" style="width:166px;height:166px" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $prd->name; ?></h3>
                            <p><?php echo $prd->description; ?></p>
                            <span><strong>Price: <?php echo $prd->price ?></strong></span>
                            
                            <p>
                                <a href="#" class="btn btn-success">Add to basket</a>
                            </p>

                            <?php
                                if(isset($_SESSION['id'])){
                                ?>
                                <p>
                                    <a href="editproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-warning">Edit
                                        <i class="glyphicon glyphicon-pencil"></i> 
                                    </a>
                                    <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete">Delete
                                        <i class="glyphicon glyphicon-trash" id="lnkDelete"></i> 
                                    </a>
                                </p>
                                <?php
                                }
                                ?>

                        </div>
                    </div>
                </div>
                <?php
        }
    }
    ?>
            </div>
            

        </div>
    </div>
    <!-- best_burgers_area_end  -->

    <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="img/sushi2/in8.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                            <span>2,300 Bath</span>
                                <h3>Uni Hokkaido</h3>
                                <p>สิ่งล้ำค่า เป็นของหายากจากท้องทะเล ผ่านความพิถีพิถัน <br> และชำนาญในทุกขั้นตอน</p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="img/sushi2/in9.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                            <span>1,900 Bath</span>
                                <h3>The Last Salmon</h3>
                                <p>เนื้อแซลมอนนุ่มละเอียดชุ่มชื้น มีน้ำและไขมันในปริมาณที่สูงกว่าปลาแซลมอนทั่วไป <br>อร่อยที่สุดในด้านความเป็น Full Firm คือ เนื้อปลาจะแน่นกว่า ไขมันน้อยกว่า </p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- features_room_end -->

    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Testimonials</span>
                        <h3>Happy Customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                <img src="img/instragram/5.jpg" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                <img src="img/instragram/10.jpg" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                <img src="img/instragram/7.jpg" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                <img src="img/instragram/9.jpg" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->