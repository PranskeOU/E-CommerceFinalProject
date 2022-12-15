<?php require_once("header.php"); ?>
<!doctype html>

<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Man Clothes</title>
</head>
<body> 
<?php  
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
 case 'Edit':
      $sqlEdit = "update Customer set CustomerName=?, CustomerEmail=? where CustomerID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ssi", $_POST['icust_name'], $_POST['icust_email'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Customer edited.</div>';
   break;
   case 'Delete':
        $sqlDelete = "Delete From Customer where CustomerID=?";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->bind_param("i", $_POST['cid']);
        $stmtDelete->execute();
   echo '<div class="alert alert-success" role="alert">Customer Deleted.</div>';
  }
} else {
  echo "";
    }
  ?>

  <table class="table table-striped">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
     while ($row = $result->fetch_assoc()) {
   ?>
      <tr>
        <td>
          <?= $row["CustomerID"] ?>
        </td>
        <td>
          <?= $row["CustomerName"] ?>
        </td>
        <td>
          <?= $row["CustomerEmail"] ?>
        </td>
        <td>
          <?= $row["CustomerPhone"] ?>
        </td>
        <td>
          <?= $row["CustomerAddress"] ?>
        </td>

                 <td>
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editcustinfo<?=$row["CustomerID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editcustinfo<?=$row["CustomerID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editcustinfo<?=$row["CustomerID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editcustinfo<?=$row["CustomerID"]?>Label">Edit customer information</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editcustinfo<?=$row["CustomerID"]?>Name" class="form-label">Customer Name</label>
                          <input type="text" class="form-control" id="editcustinfo<?=$row["CustomerID"]?>Name" aria-describedby="editcustinfo<?=$row["CustomerID"]?>Help" name="icust_name" value="<?=$row['CustomerName']?>">
                          <label for="editcustinfo<?=$row["CustomerID"]?>Name" class="form-label">Athlete's Club</label>
                          <input type="text" class="form-control" id="editcustinfo<?=$row["CustomerID"]?>Name" aria-describedby="editcustinfo<?=$row["CustomerID"]?>Help" name="icust_email" value="<?=$row['CustomerEmail']?>">
                          <div id="editcustinfo<?=$row["CustomerID"]?>Help" class="form-text">Enter customer's information.</div>
                        </div>
                        <input type="hidden" name="iid" value="<?=$row['CustomerID']?>">
                        <input type="hidden" name="saveType" value="Edit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="cid" value="<?=$row["CustomerID"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <button type="submit" class="btn btn-light" onclick="return confirm('Are you sure?')"> Delete </button>
              </form>
       </td>
        <?php
     }
   } else {
     echo "0 results";
   }
   $conn->close();
   ?>
      </tr>
    </tbody>
  </table>

</body>

</html>
