<?php
error_reporting(E_ALL);
$limit = readline("Enter limit:  ");
$sequence = generate_fib_sequence($limit);
show_sequence($sequence);

function generate_fib_sequence($limit)
{
    $a = 0;
    $b = 1;
    $array = [];
    $array[] = $a + $b;
    while (true){

        $v = $a + $b;
        if ($v >= $limit) {
            break;
        }

        $array[] = $v;
        $a = $b;
        $b = $v;
    }

    return $array;
}

function show_sequence($sequence, $i = 0)
{
     foreach ($sequence as $value) {
        $i++;
        echo "> Position $i: " . $value . "\n";
    }

}
