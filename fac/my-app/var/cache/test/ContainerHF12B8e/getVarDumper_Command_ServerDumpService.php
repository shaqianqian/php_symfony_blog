<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'var_dumper.command.server_dump' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php';
include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php';

$this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Bundle\DebugBundle\Command\ServerDumpPlaceholderCommand(($this->privates['var_dumper.dump_server'] ?? $this->load('getVarDumper_DumpServerService.php')), array('cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.cli_dumper'] ?? $this->privates['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0))), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))));

$instance->setName('server:dump');

return $instance;
