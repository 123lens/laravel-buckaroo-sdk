<?php

namespace Budgetlens\LaravelBuckaroo\Tests;

use Buckaroo\BuckarooClient;
use Buckaroo\PaymentMethods\PaymentFacade;
use Buckaroo\Services\TransactionService;

class BuckarooTest extends TestCase
{
    /** @test */
    public function itCanWorkWithAppInstance(): void
    {
        $this->assertInstanceOf(BuckarooClient::class, app('Buckaroo'));

        $this->assertInstanceOf(BuckarooClient::class, $this->app['Buckaroo']);
    }

    /** @test */
    public function wrapsTransactionService(): void
    {
        $service = app('Buckaroo');
        $this->assertInstanceOf(TransactionService::class, $service->transaction('abc'));
    }

    /** @test */
    public function wrapsPaymentMethod(): void
    {
        $service = app('Buckaroo');
        $this->assertInstanceOf(PaymentFacade::class, $service->method('iDeal'));
    }
}
