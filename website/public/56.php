<?php

const ONE = 1;
const TWO = ONE * 2;

class C
{
    const THREE = TWO + 1;
    const ONE_THIRD = ONE / self::THREE;
    const SENTENCE = 'The value of THREE is ' . self::THREE;

    public function f($a = ONE + self::THREE)
    {
        return $a;
    }
}

echo (new C)->f() . "\n";
echo C::SENTENCE;




function f($req, $opt = null, ...$params) {
    // $params is an array containing the remaining arguments.
    printf('$req: %d; $opt: %d; number of params: %d'."<br>",
        $req, $opt, count($params));
}

f(1);
f(1, 2);
f(1, 2, 3);
f(1, 2, 3, 4);
f(1, 2, 3, 4, 5);


class X {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ,
        ];
    }
}

var_dump(new X(42));
