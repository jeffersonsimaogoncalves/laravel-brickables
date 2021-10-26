<?php

namespace Okipa\LaravelBrickables\Tests;

use Okipa\LaravelBrickables\BrickablesServiceProvider;
use Okipa\LaravelBrickables\Facades\Brickables;
use Orchestra\Testbench\TestCase;

abstract class BrickableTestCase extends TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [BrickablesServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return ['Brickables' => Brickables::class];
    }

    /** @SuppressWarnings("Missing") */
    protected function setUp(): void
    {
        parent::setUp();
        include_once __DIR__ . '/../database/migrations/create_bricks_table.php.stub';
        (new \CreateBricksTable())->up();
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    protected function executeWebMiddlewareGroup(): void
    {
        // Hack in order to provide the $error variable in views.
        $this->app['router']->get('test', ['middleware' => 'web']);
        $this->call('GET', 'test');
    }
}
