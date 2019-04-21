<?php

/**
 *   ___       _
 *  / _ \  ___| |_ ___  _ __  _   _
 * | | | |/ __| __/ _ \| '_ \| | | |
 * | |_| | (__| || (_) | |_) | |_| |
 *  \___/ \___|\__\___/| .__/ \__, |
 *                     |_|    |___/.
 * @author  : Supian M <supianidz@gmail.com>
 * @link    : www.octopy.xyz
 * @license : MIT
 */

namespace App\Provider;

use Octopy\Support\Route;
use Octopy\Provider\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = \App\HTTP\Controller::class;

    /**
     * @return void
     */
    public function map()
    {
        Route::namespace($this->namespace, function () {
            Route::load('Web.php');

            Route::prefix('api', function () {
                Route::load('Api.php');
            });
        });
    }
}
