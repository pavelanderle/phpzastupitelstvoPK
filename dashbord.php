<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashbord Zastupitelé PK</title>
  </head>
  <body>
    <?php
      include("funkce.php");
     ?>
     <form class="" action="dashbord.php" method="post">
      <p>
        <label for="party">Zadej politickou stranu:</label>
        <input type="text" name="party" >
      </p>

      <p>
        <label for="party">Zadej příjmení zastupitele:</label>
        <input type="text" name="name" >
      </p>
       <input type="submit" value="Zobraz">
     </form>

     <?php
        if(isset($_POST["party"]) && !empty($_POST["party"])){
          $dataByParty=filterByParty(loadData("zastupitele.csv"),$_POST["party"]);
          echo "<h2>Zastupitele PK zastupující ".$_POST["party"]."</h2>";
          dataToTab($dataByParty);
        }



      ?>


  </body>
</html>
