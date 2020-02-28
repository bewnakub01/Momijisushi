<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

			<?php
				//รับข้อมูลจาก Form Register
				include("connect.php");
				if(isset($_POST['submit'])){ //check is it is posted back
					// รับข้อมูลจาก Form
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$username = $_POST['username'];
					$password = md5($con->real_escape_string($_POST['password']));
					$email = $_POST['email'];

					$sqlInsert = "INSERT INTO customer (firstname, lastname, username, password,email,active,address,picture) VALUE('$firstname','$lastname','$username','$password','$email','0','','0.png')";

					$result = $con->query($sqlInsert);
					if($result){
						//เมื่อ Register สำเร็จ
						echo "<script> alert('Register Complete'); </script>";
						header("location: login.php");
					}
					else{
						echo "Error during insert: " .$con->error;
					}
				} 
			?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						MOMIJI Register
					</span>

					<div class="form-group row">
						<label for="firstname" class="col-md-3">Firstname</label>
						<div class="col-md-9">
							<input type="text" name="firstname" class="form-control" placeholder="กรุณาใส่ชื่อ">
						</div>
					</div>
		
					<div class="form-group row">
						<label for="lastname" class="col-md-3">Lastname</label>
						<div class="col-md-9">
							<input type="text" name="lastname" class="form-control" placeholder="กรุณาใส่นามสกุล">
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-md-3">E-mail</label>
						<div class="col-md-9">
							<input type="email" name="email" class="form-control" placeholder="E-mail">
						</div>
					</div>

					<div class="form-group row">
						<label for="username" class="col-md-3">Username</label>
						<div class="col-md-9">
							<input type="text" name="username" class="form-control" placeholder="UserName">
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-md-3">Password</label>
						<div class="col-md-9">
							<input type="password" name="password" class="form-control"placeholder="PassWord">
						</div>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							สมัครสมาชิก
						</button>
					</div>
					
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	

	


</body>
</html>