<?php

//Функция вывода массива фигур в таблицу
function drawTable($cols=8, $rows=8, $figures)
 {
   echo "<table border='1' width=\"200\">";
    for ($tr=1; $tr <= $rows; $tr++) {
      echo "<tr>";
      for ($td=1; $td <= $cols; $td++){
          $str = $figures[$tr-1][$td-1];
          $state = $str{strlen($str)-1}; // получаем последний символ (состояние фигуры)
          if ($state == '0'){ //если состояние 0, то не выводим фигуру
              $str = '';
          }else{
              $str{strlen($str)-1} = '';
          }
          echo "<td>" . $str . "</td>";

      }
      echo "</tr>";
    }
    echo "</table>";
 }
 ?>