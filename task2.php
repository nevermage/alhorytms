<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$f = file('input.txt');
foreach ($f as $i => $line)
{
    $a[$i] = intval($line);
    $i++;
}
$c = 0;
ob_start();
for ($j = 1; $j < count($a); $j++)
{
    for ($i = 1; $i < count($a); $i++)
    {
        if ($a[$i] < $a[$i - 1])
        {
            $t = $a[$i];
            $a[$i] = $a[$i - 1];
            $a[$i - 1] = $t;
            $c++;
        }
    }
}
echo $c;
file_put_contents('output.txt', ob_get_contents());
ob_end_clean();
