<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Offers </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_offer.php" method="post" enctype="multipart/form-data">
                 <h2>Add Offer</h2>
                 <input type="text" name="name" >Offer Name
                 <br>
                 <input type="text" name="price">Price
                 <br>
                 <input type="text" name="amount">Quantity
                 <br>
                 <input type="text" name="company">Company Name
                 <br>
                 <input type="file" id="file" name= "image" style='display:none;'>
                 <label for="file">Choose Offer image  </label>
                 <button name='upload_offer'>Upload Offer </button>
                 <br><br>
                 <a href="offers.php"> View All Offers </a>
             </form>
        </div>
    </center>
</body>
</html>