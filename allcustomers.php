<?php require_once("header.php"); ?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Man Clothes</title>
  </head>
  <body>
    <table class="table table-striped">
  <thead>
    <tr>
     <th>Customer ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone Number</th>
     <th>Email</th>
    </tr>
  </thead>
  <tbody>
   <?php
    require_once("connection.php");
    $sql = "SELECT * FROM Customer";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     // output data of each row
    while($row = $result->fetch_assoc()) {
   ?>
  <tr>
    <td><?=$row["CustomerID"]?></td>
    <td><?=$row["CustomerName"]?></td>
    <td><?=$row["CustomerEmail"]?></td>
    <td><?=$row["CustomerPhone"]?></td>
    <td><?=$row["CustomerAddress"]?></td>
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
