<?php
// служебные массивы

// var_dump($_ENV) это массив, который содержит какие-то элементы окружения

// var_dump($_REQUEST)
// содержит все данные по запросу: POST + GET

// var_dump($_SERVER)
// как и _REQUEST содержит POST+GET
// это данные, которые уходит и приходят на сервер
echo '<pre>'; //  тег <pre> HTML для вывода отладочного вывода, чтобы улучшить читаемость
var_dump($_SERVER);

// var_dump($GLOBALS)
// включает в себя ВСЕ: GET, POST, _SERVER, REQUEST, etc

// в адресной строке все, что идет после знака "?", называется get parameters
// get parameters всключены в массив $_GET ====> var_dump($_GET)


/*

http://localhost:8080/dashboard/test/php%20starter/

http:   ====> для абсолютных ссылок
//localhost:8080
/dashboard/test/php%20starter/  ====> URI
*/

$url = 'http://'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'];
echo '<br>';
echo '<br>';
echo $url;

?>