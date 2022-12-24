<?php

namespace Budgetlens\LaravelBuckaroo\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        config()->set('buckaroo', [
            'website_key' => 'websiteKey',
            'secret_key' => 'secretKey',
            'test' => true
        ]);
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageAliases($app)
    {
        return [
            'Buckaroo' => \Budgetlens\LaravelBuckaroo\Facades\Buckaroo::class
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Budgetlens\LaravelBuckaroo\ServiceProvider::class
        ];
    }
}
