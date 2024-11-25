<?php

namespace Cloudstorage\App\Commands;

abstract class Command
{
    abstract public function getName(): string;

    abstract public function getDescription(): string;

    abstract public function execute(array $args);
}
