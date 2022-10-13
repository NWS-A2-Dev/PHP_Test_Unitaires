<?php

function is_even($nbr)
{
    if ($nbr % 2 == 0)
        return ("pair");
    
    return ("impair");
}

echo is_even(10) . PHP_EOL;
echo is_even(1) . PHP_EOL;
echo is_even(0) . PHP_EOL;

echo check("pair", is_even(10));

?>