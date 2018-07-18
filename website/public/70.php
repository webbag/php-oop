<?php
declare(strict_types=1);


// Coercive mode
function sumOfInts(string ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1, 3, 4, 5, 6));



function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

echo '<pre style="color:blue">';
print_r(arraysSum([2,2], [3,3], [4,4]));
echo '</pre>';




// Fetches the value of $_GET['user'] and returns 'nobody'
// if it does not exist.
$username = $_GET['user'] ?? 'nobody';
var_dump($username);
// This is equivalent to:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
var_dump($username);


// Coalescing can be chained: this will return the first
// defined value out of $_GET['user'], $_POST['user'], and
// 'nobody'.
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
var_dump($username);


// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1



class A {private $x = 'QX';}

// Pre PHP 7 code
$getX = function() {return $this->x;};
$getXCB = $getX->bindTo(new A, 'A'); // intermediate closure
echo $getXCB();

// PHP 7+ code
$getX = function() {return $this->x;};
echo $getX->call(new A);




function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.5, 2.5));

