<?php
    echo "Updated";
    include "./dbconnect.php";


if (isset($_POST['formaat'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `formaat` = :formaat WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':formaat', $_POST['formaat']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['saus'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `saus` = :saus WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':saus', $_POST['saus']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['kleur'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `kleur` = :kleur WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':kleur', $_POST['kleur']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}


if (isset($_POST['toppings'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `toppings` = :toppings WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':toppings', $_POST['toppings']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['peterselie'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `peterselie` = :peterselie WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':peterselie', $_POST['peterselie']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['oregano'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `oregano` = :oregano WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':oregano', $_POST['oregano']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['chiliFlakes'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `chiliFlakes` = :chiliFlakes WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':chiliFlakes', $_POST['chiliFlakes']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['zwartePeper'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `orders` SET `zwartePeper` = :zwartePeper WHERE `orders`.`ID` = :ID";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':ID', $_POST['ID']);
        $stmt->bindParam(':zwartePeper', $_POST['zwartePeper']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}


$conn = null;

var_dump($_POST);

header("Refresh:0.5; url=read.php");


?>