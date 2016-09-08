<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    private function prepareForTests() {
        // e-mail will look like will be send but it is just pretending
        Mail::pretend(true);
        // if you want to test the routes
        Route::enableFilters();
    }

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
