<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <table>

    <tr>
      <td colspan="3">Título</td>
      <td colspan="3">Platafroma</td>
      <td colspan="3">Nota</td>
      <td colspan="3">Argumento</td>
    </tr>

    <?php

      require_once("Series.php");

      for ($i = 0; $i < count($series); $i++) {

        echo "<tr>";

        for ($j = 0; $j < count($series[$i]); $j++) {
          echo ("<td colspan='3'>" .$series[$i][$j] ."</td>");
        }

        echo "</tr>";
      }

    ?>

  </table>

</body>

</html>
