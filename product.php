<?php 
include "db_connection.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid;
}
</style>
</head>
<body>
    <table>
       <tr>
         <th>
          Name
         </th>
         <th>price</th>
         <th> seller</th>
         <th> category</th>
         <th> delete</th>
         <th> update</th>
       </tr>
       <?php 
       $sql = "SELECT * FROM product ;";
       $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)) {
                        $row = mysqli_fetch_assoc($result);}
       
                        if (mysqli_num_rows($result) > 0) {
                            // Loop through each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['pname']}</td>";
                                echo "<td>{$row['price']}</td>";
                                echo "<td>{$row['seller']}</td>";
                                echo "<td>{$row['category']}</td>";
                                echo "<td><a href='delete_product.php?pname={$row['pname']}'>Delete</a></td>";
                                echo "<td><a href='delete_product.php?pname={$row['pname']}'>Update</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No products found</td></tr>";
                        }
       ?>
       

    </table>
</body>
</html>