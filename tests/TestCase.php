<?php

namespace ItsMalikJones\BladeIconic\Tests;

use ItsMalikJones\BladeIconic\BladeIconicServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconicServiceProvider::class,
        ];
    }
}
