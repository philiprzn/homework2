<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.09.2017
 * Time: 14:52
 */

require ('functions.php');

//
///////////////Задание №1
//

echo "<h2>Task1</h2>";

$arr = ['one', 'two', 'three'];

task1($arr);
echo task1($arr, true);

echo "<br><br>";

//
///////////////Задание №2
//

echo "<h2>Task2</h2>";

task2([1, 2, 3], "+");
task2([4, 5, 6], "-");
task2([2, 3, 5], "*");
task2([9, 5, 2], "/");
task2([1, 2, 3], "=");

//
///////////////Задание №3
//

echo "<h2>Task3</h2>";

task3("+",1,2,3);
task3("-",2,3.4,4.5,6);
task3("*",1,2,3.4,5.6,7);
task3("/",1,2,3,0.4,5,0.6);
task3("s",1,2,3,4);

//
///////////////Задание №4
//

echo "<h2>Task4</h2>";
task4(5,6);
task4(5,16);

//
///////////////Задание №5
//

echo "<h2>Task5</h2>";
task5('Я иду с мечем судия');
task5('saippuakivikauppias');
task5('Это Не палиндром');
task5('Кот сука за кусток');
task5(' 1 2 3 ');

//
///////////////Задание №6
//

echo "<h2>Task6</h2>";
task6();

//
///////////////Задание №7
//

echo "<h2>Task7</h2>";
task71('Карл у Клары украл Кораллы Караул на Карнавале ');
task72('Две бутылки Две лимонада');

//
///////////////Задание №8
//

echo "<h2>Task8</h2>";
task8('RX pockets:950381 errors:0 dropped:0 overruns:0 frame:0.');
task8('RX pokets:999 errors:0 dropped:0 overruns:0:) frame:0.');
task8('RX pockets:1001 errors:0 dropped:0 overruns:0 frame:0.');


////
/////////////////Задание №9
////
//echo "<h2>Task9</h2>";
//task9('test');
//task9('notTest');

//
///////////////Задание №10
//

echo "<h2>Task10</h2>";
task10('Hello again!');