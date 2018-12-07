<?php
    /*
        String - строка
        BOOLEAN - условие true или false
        INTEGER - число
        OBJECT  -   объект
    */

    define( "__core__", __DIR__ );

    //require_once( __core__ . "/core/core.php" );
    require_once( __core__ . "/core/core.php" );
    /*

    Эта функция подключает файл к документу и если он является php
    кодом, то этот код выполняется.
    include("путь к файлу"); 

    Аналогичная функция, единственное отличие, если этот файл уже
    подключался в каком-либо скрипте, то он второй раз это делать не будет
    include_once("путь к файлу");

    виноват, были изменения.
    теперь он делает тоже самое, просто ошибка об отсуствии файла
    стала более глобальной.
    require("путь к файлу");

    аналогично include_once,
    require_once("путь к файлу");
    
    


    <?=(!isset($_GET['page']))? "active":""?>

    if(условие){вариант1} else { варант2 }

    $fullname = ($фамилия != "")? $фамилия:"без фамилии";




















    */
?>