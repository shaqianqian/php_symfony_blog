<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.fixtures.loader' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
include_once $this->targetDirs[3].'/src/DataFixtures/AppFixtures.php';
include_once $this->targetDirs[3].'/src/DataFixtures/ORM/Fixtures.php';

$this->privates['doctrine.fixtures.loader'] = $instance = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);

$instance->addFixtures(array(0 => ($this->privates['App\DataFixtures\AppFixtures'] ?? $this->privates['App\DataFixtures\AppFixtures'] = new \App\DataFixtures\AppFixtures()), 1 => ($this->privates['App\DataFixtures\ORM\Fixtures'] ?? $this->privates['App\DataFixtures\ORM\Fixtures'] = new \App\DataFixtures\ORM\Fixtures())));

return $instance;