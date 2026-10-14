<?php

include('config.php');


if(isset($_POST['upload_offer'])){
    $NAME =$_POST['name'];
    $PRICE = $_POST['price'];
    $AMOUNT = $_POST['amount'];
    $COMPANY = $_POST['company'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up ="offers_images/".$image_name;
    $insert="INSERT INTO offers (name , price , amount , company , image) VALUES ('$NAME','$PRICE','$AMOUNT','$COMPANY', '$image_up')";
    mysqli_query($con ,$insert);
    if(move_uploaded_file($image_location,'offers_images/'. $image_name)){
        echo "<script>alert('Offers added successfully

')</script>";
    }else{
        echo "<script>alert('A problem occurred, the offer was not uploaded

')</script>";
    }
}
header('location: offer_index.php');
?>