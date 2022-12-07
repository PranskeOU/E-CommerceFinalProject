<?php require_once("header.php"); ?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <table class="table table-striped">
  <thead>
    <tr>
     <th>Order ID</th>
     <th>Customer Name</th>
     <th>Product Name</th>
     <th>Quantity</th>
     <th>Total Price</th>
    </tr>
  </thead>
  <tbody>
   <?php
    require_once("connection.php");
    $sql = "SELECT o.OrderID, c.CustomerName, p.ProductName, o.Quantity, o.TotalPrice from `Order` o JOIN Product p ON o.ProductID = p.ProductID JOIN Customer c on c.CustomerID = o.CustomerID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     // output data of each row
    while($row = $result->fetch_assoc()) {
   ?>
  <tr>
    <td><?=$row["OrderID"]?></td>
    <td><?=$row["CustomerName"]?></td>
    <td><?=$row["ProductName"]?></td>
    <td><?=$row["Quantity"]?></td>
    <td><?=$row["TotalPrice"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
 </tbody>
 </table>
   
  </body>
</html>
