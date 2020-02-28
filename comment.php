<?php
    if(isset($_POST['submit'])){ 
        $message = $_POST['message'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rate = $_POST['rate'];
     

        $sqlInsert = "INSERT INTO comment (message, name, email, rate,username) VALUES ('$message','$name','$email','$rate','0')";

        $result = $con->query($sqlInsert);
        if($result){
            echo "<script> alert('Comment Complete'); </script>";
        }
        else{
            echo "Error during insert: " .$con->error;
        }
    } 
?>
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Comment Is Now!!</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="" method="post">
                            <div class="row">

                                <!--Message-->
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="message" class="form-control" placeholder="Enter your Message">
                                    </div>
                                </div>

                                <!--Name-->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>

                                <!--Email-->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your E-mail">
                                    </div>
                                </div>

                                <!--Score-->
                                
								<div class="col-sm-6">	
                                <div class="form-group">
									<input type="file" name="rate" id=""class="form-control-file" accept="img/customer*">  
								</div>    
						</div>

                            
                                <div class="form-group mt-3">
                                    <button type="submit" name="submit" class="button button-contactForm boxed-btn">Comment</button>
                                </div>
                            
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!-- ================ contact section end ================= -->