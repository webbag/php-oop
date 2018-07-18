<?php


function testReturn1(): ?string
{
    return 'elePHPant';
}


function testReturn2(): ?string
{
    return null;
}


function test(?string $name)
{
    var_dump($name);
}

var_dump(testReturn1());
var_dump(testReturn2());
test('elePHPant');
test(null);
//test();


function swap(&$left, &$right): void
{
    if ($left === $right) {
        return;
    }

    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

$a = 1;
$b = 2;
var_dump(swap($a, $b), $a, $b);