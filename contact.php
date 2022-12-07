<?php require_once("header.php"); ?>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image: url('https://res.cloudinary.com/teepublic/image/private/s--bxj92afB--/t_Resized%20Artwork/c_fit,g_north_west,h_954,w_954/co_000000,e_outline:48/co_000000,e_outline:inner_fill:48/co_ffffff,e_outline:48/co_ffffff,e_outline:inner_fill:48/co_bbbbbb,e_outline:3:1000/c_mpad,g_center,h_1260,w_1260/b_rgb:eeeeee/c_limit,f_auto,h_630,q_90,w_630/v1564609475/production/designs/5473319_0.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: white;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition-duration: 0.4s;
  margin: 4px 2px;
  text-align: center;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>
<?php 
  require_once("connection.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Submit':
      $sqlAdd = "insert into Customer (CustomerName, CustomerPhone, CustomerEmail, CustomerAddress) values (?,?,?,?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("ssss", $_POST['custname'], $_POST['phonenumber'], $_POST['email'], $_POST['address']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New instructor added.</div>';
      break;
    }
  }
  ?>

<div class="container">
  <form action="/action_page.php" method="post">
    <label for="custname">Name (First and Last name)</label>
    <input type="text" id="custname" name="custname" placeholder="Your full name...">
    
     <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email...">
    
    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Your address...">
  
    <label for="phonenumber">Phone number</label>
    <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number...">
    
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>

    <input class="teal" type="submit" value="Submit">
  </form>
</div>

</body>
</html>
