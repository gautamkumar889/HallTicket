<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewDataProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    
    {
       view()->composer(

            ['layouts.app','Hallticket.view1','HallTicket.view2','HallTicket.view3'],
            'App\Http\ShareData'
        );
    }
}
