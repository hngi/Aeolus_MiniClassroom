<?php

namespace App\Http\Middleware;
//Illuminate-Foundation-Http-Middleware-CheckForMaintenance-Mode as Middleware
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while the maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
