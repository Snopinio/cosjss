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
    $db = new mysqli('localhost', 'root', '' ,'elo');
    
        //uwaga:dopasowac do swojej bazy!
    $query = "SELECT * FROM product";

    $result = $db->query($query);

    var_dump($result);

    $db->close();
    ?>
</body>
</html>