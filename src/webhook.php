<?php
//принимаем данные из POST

$entityBody = file_get_contents('php://input');



// отправляем данные в csv




$fp = fopen('file.csv', 'w');

foreach ($entityBody as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);



