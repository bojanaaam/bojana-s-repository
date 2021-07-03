<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porudžbina</title>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <style media="screen">
        body{
            background-color: #fdc1a9;
            margin-top: 80px;
            margin-left: 400px;
            font-size: 17px;
            font-family: "Dosis", Arial, Helvetica, sans-serif;
            text-align: center;
        }
        .php-wrapper{
            height: 550px;
            width: 800px;
            background-color: white;
        }
    </style>
</head>

<body>

<div class="php-wrapper">

<?php

if(isset($_POST['submit'])){
    $ime = $_POST['ime'];
    echo "<br/><br/>Hvala " . "<strong>". $ime . "</strong>!<br/><br/>";
    $torta = $_POST['ukus'];
    $velicina = $_POST['velicina'];
    $oblik = $_POST['oblik'];
    $napomena = $_POST['napomena'];
    echo "Vaša porudžbina je primljena!<br/><br/>";
    echo "Detalji porudžbine:<br/><br/>"."<strong>". $torta . "</strong><br/>Veličina: " . "<strong>" . 
    $velicina . "</strong><br/>Oblik: " . "<strong>". $oblik . "</strong><br/>Napomena: " . 
    $napomena . "<br/><br/>";

    if ($torta == 'Sacher torta') {
        $cena = 2000;
    } elseif ($torta == 'Torta od šargarepe') {
        $cena = 1500;
    } elseif ($torta == 'Krempita') {
        $cena = 1600;
    } elseif ($torta == 'Čoko vanila torta') {
        $cena = 1800;
    } elseif ($torta == 'Opera torta') {
        $cena = 2000;
    } elseif ($torta == 'Voćna opera') {
        $cena = 1800;
    } elseif ($torta == 'Doboš torta') {
        $cena = 2200;
    } elseif ($torta == 'Pavlova torta') {
        $cena = 1800;
    } elseif ($torta == 'Voćna torta') {
        $cena = 1800;
    }
    
    if ($velicina == '1kg') {
        $kg = 1;
    } elseif ($velicina == '1.5kg') {
        $kg = 1.5;
    } elseif ($velicina == '2kg') {
        $kg = 2;
    }
    
    $total = $cena * $kg;
    echo "Iznos za plaćanje: " . "<strong>". $total . "din</strong><br/><br/>";

    $mail = $_POST['mail'];
    $telefon = $_POST['telefon'];
    $adresa = $_POST['adresa'];
    echo "Kontakt podaci:<br/><br/>E-adresa: " . "<strong>" . $mail . "</strong><br/>Kontakt telefon: " . 
    "<strong>". $telefon . "</strong><br/>Adresa: " . "<strong>".$adresa . "</strong><br/><br/>";
    $datum = date("d-m-Y", strtotime($_POST['datum']));
    $vreme = $_POST['vreme'];
    echo "Uskoro će Vam na mejl stići potvrda o raspoloživosti termina za dostavu za izabrani datum " . 
    "<strong>" . $datum . "</strong>, vreme " ."<strong>" . $vreme . "</strong>.<br/><br/>";
    echo "<strong>Vaš ŠEĆER! </strong><br/><br/>";

}
?>

</div>

</body>
</html>