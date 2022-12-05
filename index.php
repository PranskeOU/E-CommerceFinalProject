<!doctype html>
<html lang="en">
<head> <?php require_once("header.php"); ?>
</head>
  <body>
   <?php
    require_once("connection.php");
    $sql = "SELECT * from customer";
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
