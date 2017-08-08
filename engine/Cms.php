<?php

namespace Engine;

use Engine\DI\DI;

class Cms
{
    /**
     * Cms constructor
     * @var DI
     */
    private $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run()
    {
        print_r($this->di);
    }
}