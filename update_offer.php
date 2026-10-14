<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update offer</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include ('config.php');
    $ID =$_GET['id'];
    $up = mysqli_query($con, "select * from offers where id = $ID");
    $data= mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="up_offer.php" method="post" enctype="multipart/form-data">
                 <h2>update offers </h2>
                 <input type="text" name="id" value=<?php echo $data['id']?>>
                 <br>
                 <input type="text" name="name" value=<?php echo $data['name']?>>
                 <br>
                 <input type="text" name="price" value=<?php echo $data['price']?>>
                 <br>
                 <input type="text" name="amount" value=<?php echo $data['amount']?>>
                 <br>
                 <input type="text" name="company" value=<?php echo $data['company']?>>
                 <br>
                 <input type="file" id="file" name= "image" style='display:none;'>
                 <label for="file">update offer image   </label>
                 <button name='update_offer' | type='submit'>update offers </button>
                 <br><br>
                 <a href="offers.php"> view all offers </a>
            </form>
        </div>
    </center>
</body>
</html>