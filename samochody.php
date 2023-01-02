<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajmujemy samochody</title>
    <link rel="stylesheet" href="styl.css" type="text/css">
</head>

<body>
    <div id="banner">
        <h1>Wynajem Samochodów</h1>
    </div>
    <div id="left">
        <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
        <!--SKRYPT 1-->
        <?php
        $conn = mysqli_connect('localhost','root','','Wynajem');
        $q = mysqli_query($conn, 'SELECT id,model,kolor FROM `Samochody` WHERE marka="Toyota" AND rocznik="2014"');
        while($a = mysqli_fetch_array($q))
        {
            echo ($a['id'] . " Toyota ".$a['model'].".Kolor: " . $a['kolor']);
        }
        ?>
        <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
        <!--SKRYPT 2-->
        <?php
        $q = mysqli_query($conn, 'SELECT id,marka,model,rocznik FROM `Samochody`');
        while($a = mysqli_fetch_array($q))
        {
            echo ($a['id'] . ". " . $a['marka'] . " " . $a['model'] . " " . $a['rocznik']. "<br>");
        }
        ?>
    </div>
    <div id="center">
        <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
        <!--SKRYPT 3-->
        <?php
        $q = mysqli_query($conn, 'SELECT samochody.id, samochody.model, zamowienia.telefon FROM samochody JOIN zamowienia ON samochody.id = zamowienia.Samochody_id;');
        while($a = mysqli_fetch_array($q))
        {
            echo ($a['id'] . ". " . $a['model'] . " " . $a['telefon'] . "<br>");
        }
        ?>
    </div>
    <div id="right">
        <h2>NASZA OFERTA</h2>
        <ul>
            <li>Fiat</li>
            <li>Toyota</li>
            <li>Opel</li>
            <li>Mercedes</li>
        </ul>

        <p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
        <p>autor strony: 01234567890</p>
    </div>
</body>

</html>