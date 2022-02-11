<?php
include("./dbconnect.php");

echo "created";


$formaat = $_POST["formaat"];
$saus = $_POST["saus"];
$toppings = $_POST["toppings"];
$peterselie = $_POST["peterselie"];
$oregano = $_POST["oregano"];
$chiliFlakes = $_POST["chiliFlakes"];
$zwartePeper = $_POST["zwartePeper"];

var_dump($peterselie);



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `orders` (`formaat`, `saus`, `toppings`, `peterselie`, `oregano`, `chiliFlakes`, `zwartePeper`)
                            VALUES (:formaat, :saus, :toppings, :peterselie, :oregano, :chiliFlakes, :zwartePeper)");
    $stmt->bindParam(':formaat', $formaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':toppings', $toppings);
    $stmt->bindParam(':peterselie', $peterselie);
    $stmt->bindParam(':oregano', $oregano);
    $stmt->bindParam(':chiliFlakes', $chiliFlakes);
    $stmt->bindParam(':zwartePeper', $zwartePeper);
    $stmt->execute();
} 
catch(PDOException $e) {
    echo $e->getMessage();
}

header("Refresh:3; url=read.php");
?>