<?php

    // perfect number checker v1.0

 

    // returns true if the number is perfect

    // perfect numbers are equal to their proper divisors

    $number = $_GET['number'];
    echo $value;

    function is_perfect($num)

    {

        for ($n = 2; $n <= sqrt($num); $n++)

        {

            if (!($num % $n))

            {

                $d += $n;

                if ($n <> $num / $n)

                    $d += $num / $n;

            }

        }

        return ++$d == $num;

    }

    

    // * example use - display perfect numbers below 100 * //

    for ($n = 1; $n < $number; $n++)

        if (is_perfect($n))

            echo $n . '<br />';        

?>