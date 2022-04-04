<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://github.com/Rafael2026/learn_bootstrap/blob/main/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>

  <table>

    <tr>
      <td>Título</td>
      <td>Platafroma</td>
      <td>Nota</td>
      <td>Argumento</td>
    </tr>

    <?php

      require_once("Series.php");

      for ($i = 0; $i < count($series); $i++) {

        echo "<tr>";

        for ($j = 0; $j < count($series[$i]); $j++) {
          echo "<td>" .$series[$i][$j] ."</td>";
        }

        echo "</tr>";
      }

    ?>

  </table>

</body>

</html>