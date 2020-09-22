<?php
    require_once "pdo.php";
    session_start();

    if ( isset($_SESSION['error']) ) {
        echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
        unset($_SESSION['error']);
    }
?>

<html>
<head>
</head>
<body style="font-family: sans-serif;">
<h1>Cool Application</h1>
<?php 
    if ( isset($_SESSION["success"]) ) {
        echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
        unset($_SESSION["success"]);
    }  ?>
 
    
    <p>Please see <a href="descc.php?product_id=29">description</a> of product</p>
               
</body>
</html>



