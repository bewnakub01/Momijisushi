
<?php
    session_start();
    include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaidee Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Jaidee Shop</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="searchproduct.php">Search</a></li>
                    <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Product <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="showproduct.php?cat=1">Notebook</a></li>
                        <li><a href="showproduct.php?cat=2">Keyboard</a></li>
                        <li><a href="showproduct.php?cat=3">Mypc</a></li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(isset($_SESSION['id'])){
                    ?>

                    <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i>
                        Welcome <?php echo $_SESSION['name'] ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Shop</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-shopping-cart"></i> (0)
                        </a>
                    </li>
                    
                    <?php
                    }
                    else{
                    ?>

                    <li><a href="login.php">Login</a></li>
                    <li><a href="Register.php">Sign in</a></li>

                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    
    <form action="" method="post">
    <div class="contarner">
    <div class="row" class="col-md-2"></div>
    <h2>Search Product</h2>
        <select name="searchCol" class="form-control">
        <option value="1">ชื่อสินค้า</option>
        <option value="2">รายละเอียด</option>
        <option value="3">max price</option>
        </select>
    </div>


        <div class="form-group">
            <div class="col-md-8">
                <input type="text" class="form-control" name="txtSearch" placeholder="Search">
            </div>

            <div class="col-md-2">
                <button name="submit" class="btn btn-block btn-success">
                    <i class="glyphicon glyphicon-search"></i> Go!
                </button>
            </div>
        </div>
    </form>



    <?php
        if(isset($_POST['submit'])){
            $searchCol = $_POST['searchCol'];
            $search = $_POST['txtSearch'];

            $sql="SELECT * FROM product ";
            switch($searchCol){
                case 1:$sql .="WHERE name LIKE '%$search%'"; 
                    break;
                case 2:$sql .="WHERE description LIKE '%$search%'";
                    break;
                case 3:$sql .="WHERE price <=$search";
                    break;  
            }

            //wildcard % _
            // %cat %at% ==> cats cat that scratch  

            //Rangular Expression RegEx
            
            //Information Retrieval ==> กาาค้นหาสารสนเทศ
            //NLP: Natural Langueage Processing
    ?>
        <div class="row">
            <div class="col-md-12">
            <?php
            $result = $con->query($sql);
                    if(!$result){
                        echo "ERROR ";
                    }
                    else{
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                    <a href="productdetail.php?pid=<?php echo $prd->id; ?>">
                        <img src="img/product/<?php echo $prd->picture; ?>" alt="">
                    </a>
                        <div class="caption">
                            <h3><?php echo $prd->name; ?></h3>
                                <p><?php echo $prd->description; ?></p>
                                <p>
                                    <strong>Price: <?php echo $prd->price ?></strong>
                                </p>
                                <?php
                                if(isset($_SESSION['id'])){
                                ?>
                                <p>
                                    <a href="#" class="btn btn-success">
                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                    </a>
                                    <a href="editproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-waring">
                                        <i class="glyphicon glyphicon-pencil"></i> 
                                    </a>
                                    <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete">
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
        </div>
    <?php
        }
    ?>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>