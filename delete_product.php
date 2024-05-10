<?php
  include 'db_connection.php';
  $name = $_GET['pname'];
  $sql = "delete from product where pname = '$name'; ";
  $result = $conn->query($sql);
?>