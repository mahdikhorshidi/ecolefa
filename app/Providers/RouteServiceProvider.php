<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();

        Route::domain('{school}.ecolefa.test')
            ->middleware(['web', 'setTheme:default','SchoolsMiddleware'])
            ->name('schools.')
            ->namespace($this->namespace . '\\Schools')
            ->group(base_path('routes/schools.php'));
        //
        Route::domain('{domain}.{tld}')
            ->middleware(['web', 'setTheme:default','SchoolsMiddleware'])
            ->name('schools.')
            ->namespace($this->namespace . '\\Schools')
            ->group(base_path('routes/schools.php'));
        //
        Route::prefix('dashboard')
            ->middleware(['web', 'auth'])
            ->name('dashboard.')
            ->namespace($this->namespace . '\\Dashboard')
            ->group(base_path('routes/dashboard.php'));

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::domain('ecolefa.test')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
