<?php

include('config.php');


if(isset($_POST['upload'])){
    $NAME =$_POST['name'];
    $PRICE = $_POST['price'];
    $AMOUNT = $_POST['amount'];
    $COMPANY = $_POST['company'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up ="images/".$image_name;
    $insert = "INSERT INTO prod (name , price , amount , company , image) VALUES ('$NAME','$PRICE','$AMOUNT','$COMPANY', '$image_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($image_location,'images/'. $image_name)){
        echo "<script>alert('Product added successfully  ')</script>";
    }else{
        echo "<script>alert('A problem occurred, the product was not uploaded

')</script>";
    }
}
header('location: index.php');
?>