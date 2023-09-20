<?php
//-----------------------------------------------
//Task 1: Looping with Increment using a Function
echo "\n<h3>Task 1: Looping with Increment using a Function</h3>";
function evenNnumber($start, $step, $end)
{
    echo "\nforLoop<br>\n";
    for ($i = $start; $i <= $end; $i += $step) {
        echo " " . $i . " ";
    }
    echo "\n<br>whileLoop<br>\n";
    $i = $start;
    while ($i <= $end) {
        echo " " . $i . " ";
        $i += $step;
    }
    echo "\n<br>DoWhileLoop<br>\n";
    $j = $start;
    do {
        echo " " . $j . " ";
        $j += $step;
    } while ($j <= $end);
}
evenNnumber(0, 2, 20);

//----------------------------
//Task 2: Skip Multiples of 5
echo "\n<h3>Task 2: Skip Multiples of 5</h3>\n";
function skipping()
{
    for ($i = 0; $i <= 50; $i++) {
        if ($i % 5 == 0)
            continue;
        echo " " . $i . " ";

    }
}
skipping();

//--------------------------
//Task 3: Break on Condition
echo "\n<h3>Task 3: Break on Condition</h3>\n";
function fibonacci()
{
    $first = 0;
    $second = 1;
    $result = 0;
    for ($i = 0; $i < 10; $i++) {
        if ($i == 0) {
            echo " " . $first . " ";
        } elseif ($i == 1) {
            echo " " . $second . " ";
        } elseif ($first + $second > 100 || $result > 100) {
            break;
        } else {
            $result = $first + $second;
            echo " " . $result . " ";
            $first = $second;
            $second = $result;
        }
    }
}
fibonacci();

//--------------------------
//Task 4: Fibonacci Series printing using a Function
echo "\n<h3>Task 4: Fibonacci Series printing using a Function</h3>\n";
function fibonacci2($limit)
{
    $first = 0;
    $second = 1;
    $result = 0;
    for ($i = 0; $i < $limit; $i++) {
        if ($i == 0)
            echo " " . $first . " ";
        elseif ($i == 1)
            echo " " . $second . " ";
        else {
            $result = $first + $second;
            echo " " . $result . " ";
            $first = $second;
            $second = $result;

        }
    }
}
fibonacci2(15);
?>