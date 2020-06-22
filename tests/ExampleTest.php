<?php

namespace Ahaneef29\Myfirstpackage\Tests;

use Orchestra\Testbench\TestCase;
use Ahaneef29\Myfirstpackage\MyfirstpackageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MyfirstpackageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
