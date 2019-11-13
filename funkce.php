<?php
  function loadData($dataFile){
    $dataRow = file($dataFile);
    foreach ($dataRow as $row) {
      $data[] = explode(",",$row);
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
      if (trim($row[7])==$party){
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
