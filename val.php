<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con,"select * from prod where id=$ID");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm purchase

   </title>
    <style>
        input{
            display: none;
        }
        .main{
            width: 20%;
            padding: 30px;
            box-shadow: 1px 1px 10px silver;
            margin-top:50px;
            
        }
    </style>
</head>
<body>
    <center>
        <div class ="main">
            <form action="insert_card.php" method="post">
                <h2>Do you really want to buy the product?

    </h2>
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <input type="text" name="name" value='<?php echo $data['name']?>'>
                <input type="text" name="price" value='<?php echo $data['price']?>'>
                <input type="text" name="amount" value='<?php echo $data['amount']?>'>
                <input type="text" name="company" value='<?php echo $data['company']?>'>
                <input type="text" name="date" value='<?php "insert into addcard (date) value (current_date)";?>'>
                <button name="add" type="submit" class='btn btn-warning'> Confirm adding the product to the cart

   </button>
                <br>
                <a href="shop.php">back to the products page</a>
            </form>
        </dev>
    </center>
</body>
</html>