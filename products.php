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
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Vendor</th>
      </tr>
    </thead>
    <tbody>
      <?php
   require_once("connection.php");
   $sql = "select p.*, VendorName, ItemDescription from Product p join Vendor v on p.VendorID = v.VendorID join Description d on p.DescriptionID = d.DescriptionID order by ProductName asc";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
     // output data of each row
     while ($row = $result->fetch_assoc()) {
   ?>
      <tr>
        <td>
          <?= $row["ProductID"] ?>
        </td>
        <td>
          <?= $row["ProductName"] ?>
        </td>
        <td>
          <?= $row["ItemDescription"] ?>
        </td>
        <td>
          <?= $row["Price"] ?>
        </td>
        <td>
          <?= $row["VendorName"] ?>
        </td>
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