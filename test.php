<?php
function check($a, $b)
{
    if ($a == $b)
    {
        echo "[01;32mSuccess ![0m " . PHP_EOL;
    }
    else
    {
        echo "[01;31mFail ![0m Expected $a, got $b" . PHP_EOL;
    }
}

function add($a, $b)
{
    return ($a + $b);
}

function sub($a, $b)
{
    return ($a - $b);
}

function mult($a, $b)
{
    return ($a * $b);
}

function div($a, $b)
{
    if ($b == 0)
        return ("error");
    return($a / $b);
}

function mod($a, $b)
{
    if ($b == 0)
        return ("error");
    return($a % $b);
}

echo "Aditions" . PHP_EOL;
check(42, add(21, 21));
echo PHP_EOL;

echo "Soustractions" . PHP_EOL;
check(42, sub(84, 42));
check(-21, sub(0, 21));

echo "Division" . PHP_EOL;
check(42, div(84, 2));
check("error", div(1, 0));
?>