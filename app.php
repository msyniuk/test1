<?php
include "lib.inc.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 8;
$rows = ($rows) ? $rows : 8;
// Инициализация массива с типами, цветами и состояниями фигур
$chess = [
    'figure' => ['Пешка', 'Тура', 'Конь', 'Слон', 'Ферзь', 'Король'],
    'fcolor' => ['Ч', 'Б'],
    'state' => [0, 1]
]
?>
<!-- Область основного контента -->
<h1>ДЗ № 4. Размещение фигур из массива в таблицу</h1>
<h2>Задайте размер поля</h2>
<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
    <label>Количество колонок: </label>
    <br />
    <input name='cols' type='text' value="" />
    <br />
    <label>Количество строк: </label>
    <br />
    <input name='rows' type='text' value="" />
    <br />
    <br />
    <input type='submit' value='Раскидать фигуры по полю' />
</form>
<!-- Таблица -->
<?php
// Заполнение массива фигур
for ($i=0; $i <= $rows-1; $i++){
    for ($j=0; $j <= $cols-1; $j++){
        $str = $chess['figure'][rand(0,5)].' '. $chess['fcolor'][rand(0,1)].' '. $chess['state'][rand(0,1)];
        $figures[$i][$j] = $str;
    }
}
//Вызов функции создания таблицы
drawTable($cols, $rows, $figures);

?>
<!-- Таблица -->

