<!doctype html>
<html lang="en">
<head> <?php require_once("header.php"); ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
            text-align: center;
        }

            .menu a {
                background-color: dimgrey;
                padding: 8px;
                margin-top: 7px;
                display: block;
                width: 100%;
                color: white;
            }

        .main {
            float: left;
            width: 60%;
            padding: 0 20px;
        }

        .right {
            background-color: #e5e5e5;
            float: left;
            width: 20%;
            padding: 15px;
            margin-top: 7px;
            text-align: center;
        }

        @media only screen and (max-width: 620px) {
            /* For mobile phones: */
            .menu, .main, .right {
                width: 100%;
            }
        }
    </style>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<script>
function changeimage() {
document.getElementById('myimage').src = "compman.gif";
}
</script>
    <div style="background-color:#e5e5e5;padding:15px;text-align:center;color: black;">
        <h1>Man Clothes</h1>
    </div>
<img id ="blacksweatpants" onclick="changeimage()" src=""C:\Users\Juan Escalante\Downloads\BlackSweatpants.jpg"" width="100" height="100">
<img id ="graychino" onclick="changeimage()" src="" width="100" height="100">
<img id ="lightgraysweatpants" onclick="changeimage()" src="" width="100" height="100">
<img id ="tansweatshirt" onclick="changeimage()" src="" width="100" height="100">
<img id ="bluequarterzip" onclick="changeimage()" src="" width="100" height="100">
<img id ="blackpufferjacket" onclick="changeimage()" src="" width="100" height="100">
<img id ="bluepuffervest" onclick="changeimage()" src="" width="100" height="100">
<img id ="darkgrayjacket" onclick="changeimage()" src="" width="100" height="100">
<img id ="blackquarterzip" onclick="changeimage()" src="" width="100" height="100">
<img id ="graysweatpants" onclick="changeimage()" src="" width="100" height="100">
    <div style="overflow:auto">
        <div class="menu">
            <a href="#">Black Sweatpants</a>
            <a href="#">Gray Chino</a>
            <a href="#">Light Gray Sweatpants</a>
            <a href="#">Tan Sweatshirt</a>
            <a href="#">Blue Quarter Zip </a>
            <a href="#">Black Puffer Jacket</a>
            <a href="#">Black Puffer Vest</a>
            <a href="#">Dark Gray Jacket</a>
            <a href="#">Black Quarter Zip</a>
            <a href="#">Gray Sweatpants</a>
        </div>

        <div class="main">
            
            </div>

        <div class="right">
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
         <a class="btn btn-primary" href="order.php" role="button">Order</a>
        </div>
    </div>

    <div style="background-color:#A78C59;text-align:center;padding:10px;margin-top:7px;">© copyright JuanNickLogan.oak</div>



   <?php
    require_once("connection.php");
    $sql = "SELECT * from Customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["CustomerID"]?></td>
    <td><?=$row["CustomerName"]?></td>
    <td><?=$row["CustomerPhone"]?></td>
    <td><?=$row["CustomerEmail"]?></td>
    <td><?=$row["CustomerAddress"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </body>
</html>
