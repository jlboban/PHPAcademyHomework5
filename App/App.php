<?php

namespace PHPAcademyHomework\App;

use PHPAcademyHomework\Core\Utility\Prefix;
require_once 'Core/Utility/Prefix.php';
ini_set('display_errors', 1);

/**
 * Class App
 * @package PHPAcademyHomework\App
 */
final class App
{
    /**
     * @var string
     */
    private $namespacePath = "PHPAcademyHomework\App\Views\\";
    /**
     * @var string
     */
    private $filePath = "Views/";
    /**
     * @var string
     */
    private $ext = ".php";

    /**
     * App constructor.
     * @param string $randomClassName
     */
    public function __construct(string $randomClassName)
    {
        $this->callAction($randomClassName);
    }

    /**
     * @param string $className
     */
    public function callAction(string $className)
    {
        // Only require randomly selected file
        require_once "$this->filePath" . $className . $this->ext;

        // Class check and object instantiation
        if (class_exists($this->namespacePath . $className))
        {
            $class = $this->namespacePath . $className;
            $obj = new $class();

            $prefix = new Prefix();
            $prefix->setCurrentDate();

            $obj->createProperty("prefix", $prefix);

            if (property_exists($obj, "prefix"))
            {
                $action = 'viewAction';

                // Method check and call
                if (method_exists($obj, $action))
                {
                    echo $obj->$action();
                }
            }
        }
    }
}
