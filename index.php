<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
</head>
<body>
    
    <?php
        //host, login, haslo, nazwa_bazy
    $db = new mysqli('localhost', 'root', '','elo');
    
        //uwaga:dopasowac do swojej bazy!
    $query = "SELECT * FROM product";

    //wyslij zapytanie do bayz - zapisz wynik do result
    $result = $db->query($query);

    //wyciagaj w petli wiersz po wierszu
    while($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $price = $row['price'];
    echo "$name za $price zł <br>";
     }

    $db->close();
    ?>
</body>
</html>

