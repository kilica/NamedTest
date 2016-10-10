<?php

namespace Kilica\Test\Module;

use BEAR\Package\PackageModule;
use Koriym\DbAppPackage\DbAppPackage;
use Ray\Di\AbstractModule;
use josegonzalez\Dotenv\Loader as Dotenv;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        Dotenv::load([
            'filepath' => dirname(dirname(__DIR__)) . '/.env',
            'toEnv' => true
        ]);
        $this->install(new PackageModule);
//        $this->install(new DbAppPackage($_ENV['DB_DSN'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_READ']));

        $this->bind()->annotatedWith('test')->toInstance($_ENV['TEST_KEY']);
    }
}
