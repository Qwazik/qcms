<?php

namespace Engine\Service\Database;

use Engine\Service\AbstractProvider;
use Engine\Core\Connection;

/**
 * Class Provider
 * @package Engine\Service\Database
 */
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'db';
    /**
     * @return mixed
     */
    public function init()
    {
        $db = new Connection();

        $this->di->set($this->serviceName, $db);
    }
}