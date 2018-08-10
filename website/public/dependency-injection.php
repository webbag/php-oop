<?php
/**
 * Created by PhpStorm.
 * User: kris
 * Date: 10.08.18
 * Time: 15:35
 */

require_once __DIR__ . '/../vendor/autoload.php';

class Mailer
{
    private $transport;

    public function __construct($transport)
    {
        $this->transport = $transport;
    }

    public function init()
    {
        echo __METHOD__;
    }
}

class NewsletterManager
{
    private $mailer;

    public function __construct(\Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function init()
    {
        echo __METHOD__;
    }

    // ...
}

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$containerBuilder = new ContainerBuilder();

$containerBuilder->setParameter('mailer.transport', 'sendmail');
$containerBuilder
    ->register('mailer', 'Mailer')
    ->addArgument('%mailer.transport%');

$containerBuilder
    ->register('newsletter_manager', 'NewsletterManager')
    ->addArgument(new Reference('mailer'));

$newsletterManager = $containerBuilder->get('newsletter_manager');
var_dump($newsletterManager->init());


$returnValue = str_rot13('Krzysztof Kromolicki');

var_dump($returnValue );