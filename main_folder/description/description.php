<?php
require_once "pdo.php";

// Guardian: Make sure that user_id is present
if ( ! isset($_GET['product_id']) ) {
  $_SESSION['error'] = "Missing product_id";
  header('Location: app.php');
  return;
}

$stmt = $pdo->prepare("SELECT * FROM product where product_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['product_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for product_id';
    header( 'Location: app.php' ) ;
    return;
}

// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}

$a = htmlentities($row['product_name']);
$b = htmlentities($row['price']);
$c = htmlentities($row['purchase_year']);
$d = htmlentities($row['brand']);
$e = htmlentities($row['description']);
$f = htmlentities($row['image1']);
$g = htmlentities($row['image2']);
$h = htmlentities($row['image3']);
$seller_id = $row['seller_id'];

$product_id = $row['product_id'];

$select_stmt = $pdo->prepare("SELECT * FROM seller where seller_id = :id");
$select_stmt->execute(array(":id" => $seller_id));
$row1 = $select_stmt->fetch(PDO::FETCH_ASSOC);
if ( $row1 === false ) {
    $_SESSION['error'] = 'No value for phone_no.';
    header( 'Location: app.php' ) ;
    return;
}
$i = htmlentities($row1['phone']);
$user_id = $row1['user_id'];

$s = $pdo->prepare("SELECT * FROM user where user_id = :u_id");
$s->execute(array(":u_id" => $user_id));
$row2 = $s->fetch(PDO::FETCH_ASSOC);
if ( $row2 === false ) {
    $_SESSION['error'] = 'No value for phone_no.';
    header( 'Location: app.php' ) ;
    return;
}
$j = htmlentities($row2['first_name']);
$k = htmlentities($row2['last_name']);

?>