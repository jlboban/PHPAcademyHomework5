<?php

namespace PHPAcademyHomework\Core\Utility;

/**
 * Class Prefix
 */
class Prefix
{
    /**
     * @var null
     */
    private $currentDate = null;

    /**
     * @return string
     */
    public function getCurrentDate(): string
    {
        return $this->currentDate;
    }

    public function setCurrentDate(): void
    {
        $this->currentDate = date("d/m/Y");
    }
}
