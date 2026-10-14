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
    <title>  report </title>
    <style>
        h3{
            margin-top:20px;
            font-family:'cairo',sans-serif;
            font-weight: bold;
        }
        main{
            width: 40%;
            margin-top:30px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: #3498DB;
            color:  white;
            text-align: center;

        }
        tbody{
            text-align: center;
        }

    </style>
</head>
<body>
    <center>
    <h3>
Reserved products report

    </h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con,"SELECT * FROM addcard");
    while($row =mysqli_fetch_array($result)){
        echo"
        <center>
        <main>
            <table class='table'>
                 <thead>
                    <tr>
                        <th scope='col'>Product name</th>
                        <th scope='col'>Product price</th>
                        <th scope='col'>Date</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td>$row[name]</td>
                       <td>$row[price]</td>
                       <td>$row[date]</td>
                    </tr>
                 </tbody>
            </table>
        </main>
        </center>
        ";}?>
        <center>
            <a href="index.php">Back to the main page

</a>
        </center>
</body>
</html>