<?php
/**
 * Created by PhpStorm.
 * User: appen
 * Date: 2020/3/23
 * Time: 18:29
 */

namespace Oceanus\OceanusunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class OceanusunitServiceProvider extends ServiceProvider
{
    public function register() {
        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ocunit'   //集成视图
        );
    }

    public function boot() {

    }

    private function registerRoutes() {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        });
    }

    private function routeConfiguration() {
        return [
            //            'domain' => config('telescope.domain', null),
            'namespace'  => 'Oceanus\OceanusunitLaravel\Http\Controllers',
            'prefix'     => 'oceanusunit',
            'middleware' => 'web',
        ];
    }
}