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
    <title> offers </title>
    
</head>
<body>
    <center>
        <h3>All Offers Are Available</h3>
    </center>
    <?php
    include('config.php');
    $result=mysqli_query($con,"SELECT * FROM offers");
    while ($row=mysqli_fetch_array($result)) {
        echo"
        <center>
        <main>
        <div class='card' style='width: 15rem;'>
            <img src='$row[image]' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$row[name]</h5>
                <p class='card-text'>$row[price]</p>
                <p class='card-text'>$row[amount]</p>
                <h5 class='card-title'>$row[company]</h5>
                <a href='delete_offer.php? id=$row[id]' class='btn btn-danger'>Delete</a>
                <a href='update_offer.php? id=$row[id]' class='btn btn-primary'>Update</a>
             </div>
        </div>
        </main>
        <center>
        ";
    }
    ?>
    <style>
        h5{
            font-family: 'Cairo', sans-serif;
            font-size: 15px;
        }
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            font-size: 30px;
        }
        .card{
            float: right;
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
            padding:4px;
        }   
        .card img{
            width:90%;
            height:140%;
            padding:10px;
        }
        main{
            width:70%;
        }
</body>
</html>