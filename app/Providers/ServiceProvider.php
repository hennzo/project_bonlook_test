<?php namespace App\Providers;

use Slim\Container;

abstract class ServiceProvider
{
    /**
     * @var Slim\Container;
     */
    protected $container;
    /**
     * @param Container $container
     */
    public function __construct(Container &$container)
    {
        $this->container = $container;
    }
    
    abstract public function register();
}
