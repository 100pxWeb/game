<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\TavernController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\TavernController.php';

$this->services['App\Controller\TavernController'] = $instance = new \App\Controller\TavernController();

$instance->setContainer(($this->privates['service_locator.aqxUcvZ'] ?? $this->load(__DIR__.'/getServiceLocator_AqxUcvZService.php'))->withContext('App\\Controller\\TavernController', $this));

return $instance;
