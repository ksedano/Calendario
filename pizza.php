<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PIZZA</title>
  </head>
  <body>
  <form method="post">
    <input type="checkbox" name="massa" checked="true">Massa</input><br>
    <input type="checkbox" name="orenga" checked="true">Orenga</input><br>
    <input type="checkbox" name="tomaquet">Tomaquet</input><br>
    <input type="checkbox" name="formatge">Formatge</input><br>
    <input type="checkbox" name="pernil">Pernil dolç</input><br>
    <input type="checkbox" name="bacon">Bacon</input><br>
    <input type="submit" name="Enviar"><br>
  </form>
    <?php
      $preu=0.0;
      if($_POST[Enviar]==true){
        echo "";
        if ($_POST[massa]==false || $_POST[orenga]==false) {
          echo "Sense massa i orenga no es possible fer la pizza.";
        }if($_POST[massa]==true || $_POST[orenga]==true){
          $preu+=5.0;
        }if($_POST[tomaquet]==true){
          $preu+=0.5;
        }if($_POST[formatge]==true){
          $preu+=0.5;
        }if($_POST[pernil]==true){
          $preu+=0.5;
        }if($_POST[bacon]==true){
          $preu+=0.5;
        }if($_POST[massa]==true && $_POST[orenga]==true){
          echo "El preu de la pizza será ",$preu;
        }
      }
    ?>
  </body>
</html>