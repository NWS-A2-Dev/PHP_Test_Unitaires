<?php
function contains_a($str)
{
    $c = 0;

    while ($c < strlen($str))
    {
        if ($str[$c] == 'a')
            return true;
        ++$c;
    }

    return (false);
}

function is_even($nbr)
{
    if ($nbr % 2 == 0 && $nbr != 0)
        return ("pair");
    
    return ("impair");
}

function check($a, $b)
{
    if ($a == $b)
    {
        echo " [01;32mSuccess ![0m " . PHP_EOL;
    }
    else
    {
        echo " [01;31mFail ![0m " . PHP_EOL;
    }
}

check("pair", is_even(10));
check("impair", is_even(1));
check("impair", is_even(0));

?>