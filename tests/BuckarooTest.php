<?php

namespace Budgetlens\LaravelBuckaroo\Tests;

use Buckaroo\BuckarooClient;

class BuckarooTest extends TestCase
{
    /** @test */
    public function itCanWorkWithAppInstance()
    {
        $this->assertInstanceOf(BuckarooClient::class, app('Buckaroo'));

        $this->assertInstanceOf(BuckarooClient::class, $this->app['Buckaroo']);
    }
}
