<?php

namespace PHPAcademyHomework\Core;

/**
 * Class View
 * @package PHPAcademyHomework\Core
 */
abstract class View
{
    /**
     * @var string
     */
    protected $className;

    /**
     * @return string
     */
    protected abstract function parseClassName(): string;

    /**
     * @param string $name
     * @param $value
     * @return void
     */
    protected abstract function createProperty(string $name, $value): void;
}