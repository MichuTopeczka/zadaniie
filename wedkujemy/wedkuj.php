<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wędkujemy</title>
    <link href="style_1.css" rel="stylesheet">
</head>
<body>
    <header>
<h1>Portal dla wędkarzy</h1>
    </header>
    <div id="lewo">
        <h2>Ryby drapieżne naszych wód </h2>
        <ul>
        <?php
        $db = new mysqli('localhost','root','','wedkowanie');

        $sql = "SELECT nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1";
          $wynik = $db->query($sql);
                  while($wiersz = $wynik->fetch_assoc()){
                      $nazwa = $wiersz['nazwa'];
                      $wystepowanie = $wiersz['wystepowanie'];
                     echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";

                  }
                  $db->close();
                                 ?>
        </ul>
</div>

<div id="prawo"> 
    <img src = "ryba1.jpg" alt= "Sum">
     <br> <a href=kwerendy.txt id= "kwerendy">Pobierz kwerendy

</div>
<footer>
<p> Strone wykonał 02273011077 </p>
</footer>
</body>
</html>