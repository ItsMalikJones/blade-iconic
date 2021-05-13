<?php

namespace ItsMalikJones\BladeIconic\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use ItsMalikJones\BladeIconic\BladeIconicServiceProvider;

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
