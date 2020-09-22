<?php
  $_check=0;
 session_start() ;
 if(isset($_SESSION['email']))
 {
  //echo $_SESSION['email'];
  $_check=1;

 }

?>





<?php include 'description.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="desc_style.css" rel="stylesheet">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
    <!--font - awesome -->
    <script src="https://use.fontawesome.com/edd5b16454.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body>
    <!--navbar - begins -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">ALSY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../new_home/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action 1</a>
          <a class="dropdown-item" href="#">Action 2</a>
          
          <a class="dropdown-item" href="#">Action 3</a>
        </div>
      </li>
    </ul>
      <!--li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li-->
    <ul class="navbar-nav mr-auto">
    <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" id="navBarSearchForm"type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </ul>
    <ul class="navbar-nav mr-auto float-right">
      <li id="login_logout" class="nav-item ">
        <a class="nav-link " href="../login/login_page.php"><i class="fa fa-fw fa-user"></i> LogIn</a>
      </li>
      <li class="dandi">|</li>
      <li class="nav-item ">
        <a class="nav-link " href="../login/register_page.php"><i class="fa fa-pencil"></i> Register</a>
      </li>
    </ul>
    <li class="nav-item ">
        <button id="post_add_btn" class="btn">
        <a id="post_add" class="nav-link float-right postaddbutton"  href="../login/login_page.php">Post An Add</a>
        </button>
      </li>
  </div>
</nav>

    
    
    <!--decription-page-->
    <div class="container-fluid">
      <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active ">
                        <img src="../add_product/<?php echo $f; ?> " class="d-block w-100 fix_height" alt="product_image_1">
                      </div>
                      <div class="carousel-item ">
                        <img src="../add_product/<?php echo $g; ?>" class="d-block w-100 fix_height" alt="product_image_2">
                      </div>
                      <div class="carousel-item ">
                        <img src="../add_product/<?php echo $h; ?>" class="d-block w-100 fix_height" alt="product_image_33">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                <!--p class="Product_Category"> NEW</p--><!--bicycle or laptop etc.-->
                <h2 class="glow"> <?php echo $a; ?></h2>
                <p class="Product_Price"><i class="fas fa-rupee-sign"></i>$ <?php echo $b; ?> </p>
                <p><b>Name : </b><?php echo $j; ?> <?php echo $k; ?></p>
               
               <div id="contact_no">
                  <p  ><b>Contact No : </b><span style="color: orange;"><?php echo $i; ?></span></p>
                </div>
                
                <p><b>Brand : </b> <?php echo $d; ?> </p>
                <p><b>Year of Purchase : </b><?php echo $c; ?></p>
                <p><b>Description : </b><br> <?php echo $e; ?>  </p>
                
                <button type="button" class="btn  btnc cart">Buy Now</button>
            </div>
        </div>
        



    </div>










  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>







<script>
$(document).ready(function(){

  var check= <?php  echo $_check ; ?>
  
  if(check)
 {
  
  $("#login_logout").html('<a  class="nav-link " href="../login/logout.php"><i class="fa fa-fw fa-user"></i> LogOut</a>');
  
  $("#post_add_btn").on('click',function(){
    $("#post_add").attr("href","../add_product/controller.php");
    
  });
 
 }
 if(check==0){
  $("#contact_no").html('<p><b>Contact No :  </b><a href="../login/login_page.php"><span style="color: orange;">Log In To View</span></a></p>');
 }

 

});

 
</script>





</body>
</html>
