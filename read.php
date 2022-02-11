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

    <title>pdo-workbench</title>
</head>
<body>

    <h1>My car list</h1>

    <div class="container">
        <div class="text-center mt-5" style="border: 1px solid black;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Bodemformaat</th>
                        <th scope="col">saus</th>
                        <th scope="col">toppings</th>
                        <th scope="col">peterselie</th>
                        <th scope="col">oregano</th>
                        <th scope="col">chili flakes</th>
                        <th scope="col">zwarte peper</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        include "./dbconnect.php";
                    
                        try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT ID, formaat, saus, toppings, peterselie, oregano, chiliFlakes, zwartePeper FROM orders");
                                $stmt->execute();
                            
                                // set the resulting array to associative
                                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($stmt->fetchAll() as $k=>$v) {

                                echo 
                                    "<tr>
                                        <th scope='row'>{$v["ID"]}</th>
                                        <td>{$v["formaat"]}</td>
                                        <td>{$v["saus"]}</td>
                                        <td>{$v["toppings"]}</td>
                                        <td>{$v["peterselie"]}</td>
                                        <td>{$v["oregano"]}</td>
                                        <td>{$v["chiliFlakes"]}</td>
                                        <td>{$v["zwartePeper"]}</td>
                                        <td><a href='./update.php?ID={$v["ID"]}'>😎</a></td>
                                        <td><a href='./delete_script.php?ID={$v["ID"]}'>😪</a></td>
                                    </tr>";
                                }
                            } catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                            $conn = null;
                            echo "</table>";                
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form action="./index.php">
                <button class="executebutton">Nog een pizza</button>
            </form>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>