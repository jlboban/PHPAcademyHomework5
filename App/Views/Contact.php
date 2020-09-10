<?php

namespace PHPAcademyHomework\App\Views;

require_once 'Core/Interfaces/IViewable.php';
require_once 'Core/View.php';

use PHPAcademyHomework\Core\Interfaces\IViewable;
use PHPAcademyHomework\Core\View;

/**
 * Class Contact
 * @package PHPAcademyHomework\App\Views
 */
class Contact extends View implements IViewable
{
    /**
     * Contact constructor.
     */
    public function __construct()
    {
        $this->className = $this->parseClassName();
    }

    /**
     * @return mixed|string
     */
    public function viewAction()
    {
        return isset($this->prefix) ? $this->prefix->getCurrentDate() . $this->className : $this->className;
    }

    /**
     * @return mixed|string
     */
    protected function parseClassName(): string
    {
        $nameArr = explode('\\', self::class);
        return end($nameArr);
    }

    /**
     * @param string $name
     * @param $value
     */
    public function createProperty(string $name, $value): void
    {
        $this->{$name} = $value;
    }
}
