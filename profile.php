<?php
	session_start();
	include("connect.php");

    if(!isset($_GET['cid'])||$_GET['cid']==""){
        header("Location: index.php");
    }
    else{
        $pid = $_GET['cid'];
    }
    $sql="SELECT * FROM customer WHERE id =$pid";
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
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/customer/<?php echo $prd->picture; ?>" alt="">
					
				</div>

				<form class="login100-form validate-form" action="updateprofile.php" method="post">
					<span class="login100-form-title">
						MOMIJI Profile
					</span>
                        <div class="form-group">
                            <label for="name" class="control-label col-md-3">FirstName:</label>
                            <div class="col-md-12">
                                <input type="text" name="txtName" class="form-control" placeholder="กรุณาใส่ชื่อ" value="<?php echo $prd->firstname;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="control-label col-md-3">LastName:</label>
                            <div class="col-md-12">
                                <input type="text" name="txtLastname" class="form-control" placeholder="กรุณาใส่นามสกุล" value="<?php echo $prd->lastname;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label col-md-3">Email:</label>
                            <div class="col-md-12">
                                <input type="text" name="txtEmail" class="form-control" placeholder="E-mail" value="<?php echo $prd->email;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="control-label col-md-3">Address:</label>
                            <div class="col-md-12">
                                <input type="text" name="txtAddress" class="form-control" placeholder="เพิ่มที่อยู่" value="<?php echo $prd->address;?>">
                            </div>
                        </div>
					
						<div class="form-group">
								<div class="col-md-12">	
									<input type="file" name="filepic2" id=""class="form-control-file" accept="image/*">  
								</div>    
						</div>

						<div class="form-group">
							<div class="col-md-12 col-md-offset-3">
								<input type="hidden" name="hdnUserId" value="<?php echo $prd->id;?>">
								<input type="hidden" name="hdnUserPic" value="<?php echo $prd->picture;?>">
								<button type="submit" name="submit" class="login100-form-btn">Edit Profile</button>
							</div>
						</div>
						
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							------ >>> Home <<< ------
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>
</body>
</html>