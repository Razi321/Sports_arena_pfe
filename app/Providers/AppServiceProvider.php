<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Gym;
use Illuminate\Support\Facades\View;
use phpDocumentor\Reflection\Types\Integer;
use \Illuminate\Http\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {


        View::composer( '*', function ($view) {

            $gyms = Gym::orderBy('created_at','desc')->paginate(5);


            $view->with('gyms', $gyms);
        });
        schema::defaultStringLength(191);
    }
}
