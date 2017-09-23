<?php

//
///////////////Задание №1
//
    function task1($arr, $returnStr = false) {
        if ($returnStr === false) {
            foreach ($arr as $str) {
                echo "<p>$str</p>";
            }
        } else {
            return implode(" ", $arr);
        };
    };

//
///////////////Задание №2
//
    function task2($arr, $str) {
        if (($str != '+') && ($str != '-') && ($str != '*') && ($str != '/')) {
            echo 'Неизвестный оператор!';
        } else {
            $exp = implode($str, $arr);
            echo "$exp = ";
            eval('echo '. $exp . ';');
        };
        echo '<br>';
    }

//
///////////////Задание №3
//

    function task3(string $str, float...$nums) {
        if (($str != '+') && ($str != '-') && ($str != '*') && ($str != '/')) {
            echo 'Неизвестный оператор!';
        } else {
            $exp = implode($str, $nums);
            echo "$exp = ";
            eval('echo '. $exp . ';');
        };
        echo '<br>';
    };

//
///////////////Задание №4
//

    function task4($int1, $int2) {
        if (!is_int($int1) || !is_int($int2)) {
            die ('Неверный аргумент!');
        };
        echo '<table rules="all" border="1" cellpadding="5" >';
        for ($i = 0; $i <= $int1; $i++){
            echo "<tr>";
            for ($j = 0; $j <= $int2; $j++) {
                if ($i === 0){
                    echo "<td>$j</td>";
                } elseif ($j === 0) {
                    echo "<td>$i</td>";
                } elseif (($j % 2 === 0) && ($i % 2 === 0)) {
                    echo "<td>(" . $i*$j . ")</td>";
                } elseif (( $j % 2 === 1) && ($i % 2 === 1)) {
                    echo "<td>[" . $i*$j . "]</td>";
                } else {
                    echo "<td>" . $i*$j . "</td>";
                };
            }
            echo "</tr>";
        }
        echo "</table>";
        echo '<br>';
    };

//
///////////////Задание №5
//

    function isPalindr(string $str) {
        if (!is_string($str)) {
            die("Неверный аргумент!");
        };

        $charArr = preg_split('//u', mb_strtolower(str_replace(" ", "", $str)), -1, PREG_SPLIT_NO_EMPTY);
        $oldStr = implode('', $charArr);
        $newStr = implode('', array_reverse($charArr));

        if ($newStr === $oldStr){
            return true;
        }

        return false;
        echo '<br>';
    };


    function task5(string $str) {
        if (!is_string($str)) {
            die("Неверный аргумент!");
        };
        if (isPalindr($str)) {
            echo $str . ' - это палиндром';
        } else {
            echo $str . ' - это не палиндром';
        }

        echo '<br>';
    };

//
///////////////Задание №6
//
    function task6() {
        echo date('d, m, Y, H:i');
        echo '<br>';
        echo strtotime("now");
        echo '<br>';
        echo strtotime("24.02.2016 00:00:00");
    };

//
///////////////Задание №7
//

    function task71(string $str) {
        if (!is_string($str)) {
            die("Неверный аргумент!");
        };
        echo "$str ->" . preg_replace("/К\B/u", '', $str);
        echo '<br>';
    };

    function task72(string $str) {
        if (!is_string($str)) {
            die("Неверный аргумент!");
        };
        echo "$str ->" . preg_replace("/^[Дд]ве\s{1}|\s{1}[Дд]ве\s{1}/u", ' Три ', $str);
        echo '<br>';
    };

//
///////////////Задание №8
//
    function task8 (string $str) {
        if (!is_string($str)) {
            die("Неверный аргумент!");
        };
        preg_match('/(?<=RX packets:)\s*[0-9]+/ui', $str, $matches);

        if (strpos($str, ':)') != false) {
            return smile();
        }
        if ($matches > 1000) {
            echo "Сеть есть";
        } else {
            echo " Сети нет";
        };
        echo '<br>';
    };

    function smile(){
        echo <<<SMILE
    <pre>
            OOOOOOOOOOO
         OOOOOOOOOOOOOOOOOOO
      OOOOOO  OOOOOOOOO  OOOOOO
    OOOOOO      OOOOO      OOOOOO
  OOOOOOOO  #   OOOOO  #   OOOOOOOO
 OOOOOOOOOO    OOOOOOO    OOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOO  OOOOOOOOOOOOOOOOOOOOOOOOO  OOOO
 OOOO  OOOOOOOOOOOOOOOOOOOOOOO  OOOO
  OOOO   OOOOOOOOOOOOOOOOOOOO  OOOO
    OOOOO   OOOOOOOOOOOOOOO   OOOO
      OOOOOO   OOOOOOOOO   OOOOOO
         OOOOOO         OOOOOO
             OOOOOOOOOOOO
</pre>
SMILE;
    };

//
///////////////Задание №9
//

    function task9(string $name) {
        if (!is_string($name)) {
            die ("Неверный аргумент!");
        };

        if (!file_exists($name . ".txt")) {
            die ("Файла $name.txt не существует.");
        }

        echo file_get_contents($name . ".txt");
        echo '<br>';
    };

//
///////////////Задание №10
//

    function task10(string $text2) {
        if (!is_string($text2)) {
            die ("Incorrect argument.");
        };

        if (file_put_contents('anothertext.txt', $text2, FILE_APPEND)) {
            echo 'Ok!';
        };

    };
