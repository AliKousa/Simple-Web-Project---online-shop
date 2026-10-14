<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online  |  add product</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                 <h2> Online Shop </h2>
                 <img src="online shop.jpg" alt="logo" width="300px">
                 <input type="text" name="name" > Product Name
                 <br>
                 <input type="text" name="price"> Price
                 <br>
                 <input type="text" name="amount">Quantity
                 <br>
                 <input type="text" name="company">Company name
                 <br>
                 <input type="file" id="file" name= "image" style='display:none;'>
                 <label for="file">Choose product image </label>
                 <button name='upload'>Add Product </button>
                 <br>
                 <a href="offer_index.php">Offers page </a>
                 <br><br>
                 <a href="products.php"> View All Products</a>
                 <br><br>
                 <a href="report.php">Report </a>
            </form>
        </div>
    </center>
</body>
</html>