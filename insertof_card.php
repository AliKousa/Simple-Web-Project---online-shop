<?php
include('config.php');
if(isset($_POST['addd'])){
    $NAME= $_POST['name'];
    $PRICE= $_POST['price'];
    $AMOUNT=$_POST['amount'];
    $COMPANY=$_POST['company'];
    $insert= "INSERT INTO addcard (name,price,amount,company,date) VALUES('$NAME','$PRICE','$AMOUNT','$COMPANY',current_date)";
    mysqli_query($con,$insert);
    header('location: card.php');
}
?>