<?php

echo "Deleted";

include "./dbconnect.php";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
    $sql = "DELETE FROM orders WHERE ID = :ID";

   // Prepare statement
    $stmt = $conn->prepare($sql);
    $ID = (INT)$_GET['ID'];

    $stmt->bindParam(':ID', $ID);

  // use exec() because no results are returned
    $stmt->execute();

} catch(PDOException $e) {
  echo $e->getMessage();
}

$conn = null;


header("Refresh:0; url=read.php");
?>