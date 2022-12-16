<!doctype html>
<html lang="en">

<head>
    <?php require_once("header.php"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            display: flex;
            margin-left: 10px;
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
            width: 25%;
            text-align: center;
            background: #415665;
            height: 260px;
            margin-top: 7px;
            border-radius: 15px;
            padding: 20px;
            font-size: 18px;
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
            width: auto;
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
                $totalPrice = 23 * $_POST['quantity'];
                $productID = 7;
                $sql = "insert into `Order` (ProductID, CustomerID, Quantity, TotalPrice) values (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iiid", $productID, $_POST['custID'], $_POST['quantity'], $totalPrice);
                $stmt->execute();
                break;
        }
    }
    ?>
    <div style="overflow:auto">

        <div class="menu">
            <form onsubmit="return redirectMe();" action="" method="post">
                <label><strong>Price: $23</strong></label>
                <br />
                <br />
                <label for="custID">Customer ID: </label>
                <input type="text" id="custID" name="custID">
                <br />
                <label for="quantity">Quantity:</label>
                <input style="margin-bottom:5px;" type="text" id="quantity" name="quantity">
                <br />
                <input class="btn btn-primary" style="border-color: dimgray; background-color:dimgray; margin-top: 7px;"
                    type="submit" name="saveType" value="Confirm Order"></input>
            </form>
            <script>
                function redirectMe() {
                    window.location.replace("confirm.php");
                    return false;
                }
            </script>


        </div>

        <div class="main">
            <h2 id="title">Dark Gray Jacket</h2>
            <img id="image"
                src="https://superstarjackets.com/wp-content/uploads/2022/03/Leonardo-DiCaprio-Grey-Suede-Bomber-Leather-Jacket-1-1.jpg"
                width="470" height="470">
        </div>
    </div>
    <div style="background-color:#A78C59;text-align:center;padding:10px;margin-top:7px;">© copyright
        JuanNickLogan.oak</div>
</body>

</html>