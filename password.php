<?php require_once("header.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Man Clothes</title>
  </head>
  <style>
        .login-form {
            width: 300px;
            margin: 0 auto;
            font-family: Tahoma, Geneva, sans-serif;
        }
        .login-form h1 {
            text-align: center;
            color: #4d4d4d;
            font-size: 24px;
            padding: 20px 0 20px 0;
        }
        .login-form input[type="password"],
        .login-form input[type="text"] {
            width: 100%;
            padding: 15px;
            border: 1px solid #dddddd;
            margin-bottom: 15px;
            box-sizing:border-box;
        }
        .login-form input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #535b63;
            border: 0;
            box-sizing: border-box;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
        }
        </style>
  <body>
    <div class="login-form">
      <form action="auth" method="POST">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="button" id="send" value="Enter" />
        <script>
          $(document).on('click', '#send', function(e) {
          var values = $('#password').val();
          if(values == 1234) {
            location ="allcustomers.php";
          }
          } )
        </script>
      </form>
    </div>
  </body>
</html>
