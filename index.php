<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Snacks B1</title>
</head>

<style>
* {
  width: 80%;
  margin: auto;
  text-align: center;
  margin-top: 50px;
  font-size: 20px;
}

.snack2 {
  margin-top: 50px;
}
</style>
<body>

  <?php

  //   Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  // Olimpia Milano - Cantù | 55-60

  $terzaGiornata = [
    [
      "squadraCasa" => "La Contea",
      "squadraOspite" => "Montebello",
      "puntiCasa" => 99,
      "puntiOspite" => 53,
    ],
    [
      "squadraCasa" => "Montorso",
      "squadraOspite" => "Arzignano",
      "puntiCasa" => 78,
      "puntiOspite" => 77,
    ],
    [
      "squadraCasa" => "Zermeghedo",
      "squadraOspite" => "Montecchio",
      "puntiCasa" => 46,
      "puntiOspite" => 103,
    ],
    [
      "squadraCasa" => "Chiampo",
      "squadraOspite" => "Trissino",
      "puntiCasa" => 91,
      "puntiOspite" => 88,
    ],
  ];


  for ($i=0; $i < count($terzaGiornata); $i++) {

    echo $terzaGiornata[$i]["squadraCasa"]
    . ' - '
    . $terzaGiornata[$i]["squadraOspite"]
    . ' | '
    . $terzaGiornata[$i]["puntiCasa"]
    . ' - '
    . $terzaGiornata[$i]["puntiOspite"]
    . '<br>';
  }



  ?>

  <br>

  <div class="snack2">

    <?php

    //Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    //che name sia più lungo di 3 caratteri,
    //che mail contenga un punto e una chiocciola e
    //che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"


    $name = $_GET["name"];

    $mail = $_GET['mail'];

    $age = $_GET["age"];

    if(

    strlen($name)>= 3 &&

    strpos($mail ,"@") == !false &&

    strpos($mail ,".") == !false &&

    is_numeric($age) == true)

    {
      echo "Accesso effettuato";

    }else{
      echo "Accesso negato";
    }



    ?>
  </div>

</body>
</html>
