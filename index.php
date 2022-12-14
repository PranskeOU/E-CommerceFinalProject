<!doctype html>
<html lang="en">
<head> <?php require_once("header.php"); ?>
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
<body style="font-family: Verdana; color:#aaaaaa;">
    <div style="font-family:Stencil Std, fantasy; font-weight:bold; letter-spacing: .2rem; background-color:#e5e5e5;padding:15px;text-align:center;color: black;">
        <h1>MAN CLOTHES</h1>
    </div>
    <div style="overflow:auto">
        <div class="menu">
            <a id="blacksweatpants" onclick="document.getElementById('image').src='https://cdn.shopify.com/s/files/1/0089/7912/0206/products/LOTFEELPJ541_21_-MO_800x.jpg?v=1638346603';
                                             document.getElementById('title').innerHTML = 'Black Sweatpants';
                                             document.getElementById('price').innerHTML = '$20';
                                             getHref();">Black Sweatpants</a>
            <a id="graychino" onclick="document.getElementById('image').src='https://n.nordstrommedia.com/id/sr3/246b6407-c608-4c7c-8030-5f0791bed104.jpeg?h=365&w=240&dpr=2';
                                       document.getElementById('title').innerHTML = 'Gray Chino';
                                       document.getElementById('price').innerHTML = '$20';
                                       getHref();">Gray Chino</a>
            <a id="lightgraysweatpants" onclick="document.getElementById('image').src='https://images.lululemon.com/is/image/lululemon/LM5942S_032798_1';
                                                 document.getElementById('title').innerHTML = 'Light Gray Sweatpants';
                                                 document.getElementById('price').innerHTML = '$23';
                                                 getHref();">Light Gray Sweatpants</a>
            <a id="tansweatshirt" onclick="document.getElementById('image').src='https://freshblanks.com/media/2021/08/basic-tan-crewpull.jpg';
                                           document.getElementById('title').innerHTML = 'Tan Sweatshirt';
                                           document.getElementById('price').innerHTML = '$18';
                                           getHref();">Tan Sweatshirt</a>
            <a id="bluequarterzip" onclick="document.getElementById('image').src='https://cdn.shopify.com/s/files/1/0831/9103/products/ford2_650x.jpg?v=1643222678'
                                            document.getElementById('title').innerHTML = 'Blue Quarter Zip';
                                            document.getElementById('price').innerHTML = '$23';
                                            getHref();">Blue Quarter Zip </a>
            <a id="blackpufferjacket" onclick="document.getElementById('image').src='https://d4zpg1jklewne.cloudfront.net/steak/spree-variant/2019-1572892255122/mens-leather-puffer-jacket-in-black-product.jpg';
                                               document.getElementById('title').innerHTML = 'Black Puffer Jacket';
                                               document.getElementById('price').innerHTML = '$36';
                                               getHref();">Black Puffer Jacket</a>
            <a id="blackpuffervest" onclick="document.getElementById('image').src='https://m.media-amazon.com/images/I/71Gvo3cts3L._AC_UY1000_.jpg';
                                             document.getElementById('title').innerHTML = 'Black Puffer Vest';
                                             document.getElementById('price').innerHTML = '$35';
                                             getHref();">Black Puffer Vest</a>
            <a id="darkgrayjacket" onclick="document.getElementById('image').src='https://superstarjackets.com/wp-content/uploads/2022/03/Leonardo-DiCaprio-Grey-Suede-Bomber-Leather-Jacket-1-1.jpg';
                                            document.getElementById('title').innerHTML = 'Dark Gray Jacket';
                                            document.getElementById('price').innerHTML = '$25';
                                            getHref();">Dark Gray Jacket</a>
            <a id="blackquarterzip" onclick="document.getElementById('image').src='https://m.media-amazon.com/images/I/81-ib10h7gL._AC_UY1000_.jpg';
                                             document.getElementById('title').innerHTML = 'Black Quarter Zip';
                                             document.getElementById('price').innerHTML = '$16';
                                             getHref();">Black Quarter Zip</a>
            <a id="graysweatpants" onclick="document.getElementById('image').src='https://n.nordstrommedia.com/id/sr3/c7976e34-da7d-4949-8aca-aaa4c1d6c8a0.jpeg?h=365&w=240&dpr=2';
                                            document.getElementById('title').innerHTML = 'Gray Sweatpants';
                                            document.getElementById('price').innerHTML = '$20';
                                            getHref();">Gray Sweatpants</a>
        </div>
        <p id="title"></p>

        <script>
            function getHref() {
            var product = document.getElementById('title').innerHTML;
            var href = "order" + product.replace(/\s/g, '') + ".php";
            document.getElementById('title').textContent = href;
            return href;
            }
        </script>
        <
        <div class="main">
         <h2 id="title">Black Sweatpants</h2>
            <img id="image" src="https://cdn.shopify.com/s/files/1/0089/7912/0206/products/LOTFEELPJ541_21_-MO_800x.jpg?v=1638346603" width="490" height="490">
            </div>
        <div class="right">
            <h2>Price</h2>
            <p id="price">$20</p>
         <a class="btn btn-primary" href="order.php" role="button">Order</a>
        </div>
    </div>

    <div style="background-color:#A78C59;text-align:center;padding:10px;margin-top:7px;">© copyright JuanNickLogan.oak</div>
  </body>
</html>