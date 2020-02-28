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
					include_once("connect.php");
					if(isset($_POST['submit'])){
						//mysqli_escapre_string =>ป้องกันการถูก SQL Injection
						$username = $con->real_escape_string($_POST['username']);
						$password = md5($con->real_escape_string($_POST['password']));

						$sql = "SELECT * FROM customer WHERE username='$username' AND password='$password'";

						//mysql_suqry
						$result = $con->query($sql);
						//print_r($result);

						if($result->num_rows>0){
							//เก็บค่าลง Session
							//Fetch data
							$row=$result->fetch_array();
							$_SESSION['id']=$row['id'];
							$_SESSION["name"]=$row['firstname'] . " " . $row['lastname'];
							$_SESSION['username']=$row['username'];
							
							//Warp Home
							header("location: index.php");
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
						MOMIJI Login
					</span>

					<div class="form-group row">
						<label for="username" class="col-md-3">Username  </label>
						<div class="col-md-9">
							<input type="text" name="username" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-md-3">Password  </label>
						<div class="col-md-9">
							<input type="password" name="password" class="form-control">
						</div>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							เข้าสู่ระบบ
						</button>
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
						<a class="txt2" href="Register.php">
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