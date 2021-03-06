<?php

declare(strict_types=1);

namespace Hofmannsven\Modernizr\Tests;

use Hofmannsven\Modernizr\ModernizrServiceProvider;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;

class ModernizrCommandTest extends TestCase
{
    /**
     * Load package service provider.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            ModernizrServiceProvider::class,
        ];
    }

    /** @test */
    public function the_command_creates_a_file()
    {
        $this->markTestSkipped('Must be revisited.');
        // $this->artisan('modernizr:generate');
    }

    /** @test */
    public function the_command_prints_the_output_to_the_console()
    {
        $this->markTestSkipped('Must be revisited.');
        // $this->artisan('modernizr:generate')->expectsOutput('');
    }
}
