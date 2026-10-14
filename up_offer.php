<?php

include('config.php');


if(isset($_POST['update_offer'])){
    $ID=$_POST['id'];
    $NAME =$_POST['name'];
    $PRICE = $_POST['price'];
    $AMOUNT = $_POST['amount'];
    $COMPANY = $_POST['company'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up ="offers_images/".$image_name;
    $update ="UPDATE offers SET name='$NAME' ,price='$PRICE' ,amount='$AMOUNT',company='$COMPANY',image='$image_up' WHERE id=$ID";
    mysqli_query($con,$update);
    if(move_uploaded_file($image_location,'offers_images/'. $image_name)){
        echo "<script>alert('Product updated successfully

' )</script>";
    }else{
        echo "<script>alert('A problem occurred, the product was not updated

   ')</script>";
    }
}
header('location: offers.php');
?>