<?php

namespace Budgetlens\LaravelBuckaroo\Facades;

use Illuminate\Support\Facades\Facade;

class Buckaroo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Buckaroo';
    }
}
