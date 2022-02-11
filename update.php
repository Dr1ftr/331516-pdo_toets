<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>pdo_workbench</title>
</head>
<body>

    <?php 

        include "./dbconnect.php";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `orders` Where `ID` = :ID");
            $stmt->bindParam(':ID', $_GET['ID']);
            $stmt->execute();
        
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $v = $stmt->fetch();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }  
        
    ?>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <h1>Update bestelling</h1>
            <div class="container">
                <form action="/update_script.php" method="post">
                <input hidden type="text" name="ID" value="<?=$_GET['ID']?>">
                    <label for="formaat">Bodemformaat</label>
                    <select name="formaat" id="formaat">
                        <option value="<?php echo $v["formaat"]?>"><?php echo $v["formaat"]?></option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                    </select>
                    <br>

                    <label for="saus">saus</label>
                    <select name="saus" id="saus">
                        <option value="<?php echo $v["saus"]?>"><?php echo $v["saus"]?></option>
                        <option value="tomatenSaus">Tomaten saus</option>
                        <option value="extraTomatenSaus">Extra tomanen saus</option>
                        <option value="spicyTomatenSaus">Spicy tomaten saus</option>
                        <option value="BBQSaus">BBQ saus</option>
                        <option value="crémeFraiche">Créme fraiche</option>
                    </select>
                    <br>
                    <br>

                    <label for="toppings">Pizzatoppings</label><br>
                    <input type="radio" name="toppings" value="vegan" <?=$v['toppings'] ? "checked" : "" ?>>vegan<br>
                    <input type="radio" name="toppings" value="vegetarisch" <?=$v['toppings'] ? "checked" : "" ?>>vegetarisch<br>
                    <input type="radio" name="toppings" value="vlees" <?=$v['toppings'] ? "checked" : "" ?>>vlees<br>
                    <br>                
                    Kruiden
                    <div class="form-check">
                        <input type="hidden" name="peterselie" value="0">
                        <input name="peterselie" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" <?=$v['peterselie'] ? "checked" : "" ?>>Peterselie<br>
                        <input type="hidden" name="oregano" value="0">
                        <input name="oregano" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"<?=$v['oregano'] ? "checked" : "" ?>>Oregano<br>
                        <input type="hidden" name="chiliFlakes" value="0">
                        <input name="chiliFlakes" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" <?=$v['chiliFlakes'] ? "checked" : "" ?>>Chili flakes<br>
                        <input type="hidden" name="zwartePeper" value="0">
                        <input name="zwartePeper" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" <?=$v['zwartePeper'] ? "checked" : "" ?>>Zwarte peper<br>
                    </div>

                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>
        <div class="col-4"></div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>
</html>