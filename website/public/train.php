<?php

/**
 * Example 1
 */
trait Hello
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait World
{
    public function sayWorld()
    {
        echo 'World';
    }
}

class MyHelloWorld
{
    use Hello, World;

    public function sayExclamationMark()
    {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();

/**
 * Example 2
 */
trait Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

class DbPostgres extends ArrayObject
{
    use Singleton;
}

class  DbMysql
{
    use Singleton;
}

//echo '<pre style="color:blue">';
//ReflectionClass::export(World);
//echo '</pre>';

var_dump(DbPostgres::getInstance());
var_dump(DbMysql::getInstance());

/**
 * Example 3
 */
trait Game
{
    function play()
    {
        echo "Playing a game";
    }
}

trait Music
{
    function play()
    {
        echo "Playing music";
    }
}

class Player
{
    use Game, Music {
        Game::play as gamePlay;
        Music::play insteadof Game;
    }
}

$player = new Player();
$player->play();
$player->gamePlay();

$oReflectionClass = new ReflectionClass(Player::class);
echo '<pre style="color:blue">';
print_r($oReflectionClass->getTraitNames());
print_r($oReflectionClass->getTraitAliases());
print_r($oReflectionClass->getTraits());
echo '</pre>';


/**
 * Example 4
 */
trait Message
{
    private $message;

    function alert()
    {
        $this->define();
        echo $this->message;
    }

    abstract function define();
}

class Messenger
{
    use Message;

    function define()
    {
        $this->message = "Custom Message";
    }
}

$messenger = new Messenger;
$messenger->alert(); //Custom Message