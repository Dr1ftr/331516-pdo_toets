<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>pdo-workbench</title>
  </head>
  <body>

    <div class="row">
    <div class="col-4"></div>
    <div class="col-4"><div class="container">
      <h1>Maak uw eigen pizza</h1>
        <div class="form">
            <form action="/create.php" method="post">

                <label for="formaat">Bodemformaat</label><br>
                <select name="formaat" id="formaat" required>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="35">35</option>
                    <option value="40">40</option>
                </select>
                <br>
                <br>

                <label for="saus">Saus</label><br>
                <select name="saus" id="saus" required>
                    <option value="tomatenSaus">Tomaten saus</option>
                    <option value="extraTomatenSaus">Extra tomanen saus</option>
                    <option value="spicyTomatenSaus">Spicy tomaten saus</option>
                    <option value="BBQSaus">BBQ saus</option>
                    <option value="crémeFraiche">Créme fraiche</option>
                </select>
                <br>
                <br>

                <label for="toppings">Pizzatoppings</label><br>
                  <input type="radio" name="toppings" value="vegan">vegan<br>
                  <input type="radio" name="toppings" value="vegetarisch">vegetarisch<br>
                  <input type="radio" name="toppings" value="vlees">vlees<br>
                <br>
                <br>
                
                Kruiden
                <div class="form-check">
                    <input type="hidden" name="peterselie" value="0">
                    <input name="peterselie" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">Peterselie<br>
                    <input type="hidden" name="oregano" value="0">
                    <input name="oregano" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">Oregano<br>
                    <input type="hidden" name="chiliFlakes" value="0">
                    <input name="chiliFlakes" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">Chili flakes<br>
                    <input type="hidden" name="zwartePeper" value="0">
                    <input name="zwartePeper" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">Zwarte peper<br>
                </div>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
  </div>
    <div class="col-4"></div></div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>