<?php include "includes/connection.php"; ?>
<?php 
$sell_id = $_GET['seller_id'];

$_check = 0;
$check_ph = 0;
session_start();
if (isset($_SESSION['email'])) {
  //  echo $_SESSION['email'];
  $_check = 1;
  $user_id = $_SESSION['user_id'];
}

//  retrieve phone to check seller or not

if (isset($_SESSION['phone'])) {
  //  echo $_SESSION['phone'];
  $check_ph = 1;
}
?>

<!-- INCLUDE HEADER -->
<?php include "includes/header.php"; ?>

<body>

    <!-- INCLUDE NAVBAR -->

    <?php include "includes/navbar.php"; ?>





    <div class="container top_container">
        <div class="row">
            <div class="col-lg-4">
                <img class="profile_pic" src="data:image/jpeg;base64,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" alt="profile pic">
            </div>
            <div class="col-lg-8">
                <div class="hello">
                    <!-- <h2>Hello ANONYMOUS</h2> -->
                </div>
                <div class="heading your_details">
                    <h3>My Details</h3>

                </div>
                <div>

                    <p> <b>
                            <h5> E Mail : <?php  echo $_SESSION['email'] ; ?></h5>
                        </b>  </p>
                    <p> <b>
                            <h5> Phone No : <?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'] ; ?> </h5>
                        </b></p>
                    <p> <b>
                            <h5> Address : <?php if(isset($_SESSION['address'])) echo $_SESSION['address'].' , '. $_SESSION['room_number'] ; ?> </h5>
                        </b></p>
                </div>
                <a href="">
                    <button type="button" class="btn btn-secondary">Edit Details</button>

                </a>



            </div>
        </div>


    </div>



    <div id="posted_add" class="container">
        <div class="heading my_products_heading">
            <h2>My Products</h2>
        </div>




        <div class="container">

            <div id="show_product" class="row">

                <?php

                $result = myquery(3, 1);
                if ($result->rowCount() > 0) {   //start of if 
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {    //start of while
                        $price = $row['price'];
                        $description = $row['description'];
                        $image1 = $row['image1'];

                ?>


                        <div class="col-md-6 col-lg-4 product_block">
                            <div class="product-description">
                                <img class="product-img" src="../add_product/<?php echo $image1; ?> " alt="" width="280px">
                                <div class="product-price" style="color: red;">
                                    <h4>price: <?php echo $price; ?></h4>
                                </div>
                                <div class="product-info">
                                    <p class="card-text" style="color: red;"><?php echo $description; ?>
                                    </p>

                                </div>
                                <a href="">
                                    <button type="button" class="btn btn-primary">Edit Product</button>
                                    <button type="button" class="btn btn-danger">Delete Product</button>
                                </a>


                            </div>
                        </div>



                <?php


                    }  //end of while loop
                }  //end of if
                else {
                    echo ("<h1 style='color: green;'>Sorry No product to show till now..  😅</h1>");
                }
                ?>


            </div>
        </div>







    </div>
    <!-- end of posted add container -->










    <!-- INCLUDE FOOTER -->
    <?php include "includes/footer.php"; ?>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh5AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>








    <script>
    $(document).ready(function() {

      var check = <?php echo $_check; ?>

      if (check) {

        $("#login_logout").html('<a  class="nav-link " href="../login/logout.php"><i class="fa fa-fw fa-user"></i> LogOut</a>');
        $("#tog_Register").html('<a class="nav-link " href="../seller_dashboard/seller_dash.php?seller_id=<?php echo $user_id ?>"><i class="fa fa-pencil"></i>My Profile</a>');
        

        
        $("#post_add_btn").on('click', function() {
          $("#post_add").attr("href", "../add_product/controller.php");
        });

      }

    });
  </script>



</body>

</html>