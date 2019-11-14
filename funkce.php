<?php
  function loadData($dataFile){
    $dataRow = file($dataFile); // funce file načte obsah souboru do pole položka pole -> řádka souboru 
    foreach ($dataRow as $row) {
      $data[] = explode(",",$row); // explode rozdělí každou řádku na položky dle znaku , výsledkem je pole
    }
    return $data;
  }

  function dataToTab($data){
    echo "<table>";
    foreach ($data as $row) {
      echo "<tr>";
      foreach ($row as $value) {
        echo "<td>$value</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  function filterByParty($data,$party){
    foreach ($data as $row) {
      if (trim($row[7])==$party){  // trim odstraní všechny bílé znaky
          $filter[] = $row;
      }
    }
    return $filter;
  }

  function filterByName($data,$name){
    // TODO:
    return $filter;
  }

  function filterByFunction($data,$function){
    // TODO
    return $filter;
  }

  function countNumParty($data){
    foreach ($data as $row) {
        $key=$row[7];
        $count["$key"]++;
      }
      return $count;
  }


  //dataToTab(loadData("zastupitele.csv"));
  //print_r(filterByParty(loadData("zastupitele.csv"),"KSČM"));
  //print_r(countNumParty(loadData("zastupitele.csv")));
 ?>
