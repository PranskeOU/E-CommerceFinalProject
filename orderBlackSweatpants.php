<!doctype html>
<html lang="en">

<head>
    <?php require_once("header.php"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            /*background-image: url('https://res.cloudinary.com/teepublic/image/private/s--bxj92afB--/t_Resized%20Artwork/c_fit,g_north_west,h_954,w_954/co_000000,e_outline:48/co_000000,e_outline:inner_fill:48/co_ffffff,e_outline:48/co_ffffff,e_outline:inner_fill:48/co_bbbbbb,e_outline:3:1000/c_mpad,g_center,h_1260,w_1260/b_rgb:eeeeee/c_limit,f_auto,h_630,q_90,w_630/v1564609475/production/designs/5473319_0.jpg');
  */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        h2 {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
            text-align: center;
            background: #415665;
            height: 75px;

            border-radius: 15px;
            padding: 20px;
            font-size: 22px;
            color: #fff;
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
            .menu,
            .main,
            .right {
                width: 100%;
            }
        }
    </style>
</head>

<body style="font-family:Verdana;color:#aaaaaa;">
    <?php
    require_once("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        switch ($_POST['saveType']) {
            case 'Confirm Order':
                $totalPrice = 20 * $_POST['quantity'];
                $productID = 4;
                $sql = "insert into `Order` (ProductID, CustomerID, Quantity, TotalPrice) values (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iiid", $productID, $_POST['custID'], $_POST['quantity'], $totalPrice);
                $stmt->execute();
                break;
        }
    }
    ?>
    <div style="overflow:auto">

        <div class="main">
            <form onsubmit="return redirectMe();" action="" method="post">
                <label for="custID">Customer ID: </label>
                <input type="text" id="custID" name="custID">
                <br/>
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity">
                <br/>
                <input class="btn btn-primary" type="submit" name="saveType" value="Confirm Order">Confirm
                Order</input>
            </form>
            <script>
                function redirectMe() {
                    window.location.replace("confirm.php");
                    return false;
                }
            </script>


        </div>

        <div class="main">
            <h2 id="title">Black Sweatpants</h2>
            <img id="image"
                src="https://cdn.shopify.com/s/files/1/0089/7912/0206/products/LOTFEELPJ541_21_-MO_800x.jpg?v=1638346603"
                width="490" height="490">
        </div>
        <div class="right">
            <h2>Price</h2>
            <p id="price">$20</p>
        </div>
    </div>
    <div style="background-color:#A78C59;text-align:center;padding:10px;margin-top:7px;">© copyright
        JuanNickLogan.oak</div>
</body>

</html>