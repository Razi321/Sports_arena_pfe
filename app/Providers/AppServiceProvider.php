<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Gym;
use App\User;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use phpDocumentor\Reflection\Types\Integer;


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
     *
     */

    public function boot()
    {


        View::composer( '*', function ($view) {

            $feedbacks = Feedback::orderBy('created_at','desc')->paginate(5);


            $view->with('feedback', $feedbacks);
        });


        View::composer( '*', function ($view) {

            $users = User::orderBy('created_at','desc')->paginate(5);


            $view->with('users', $users);
        });



        View::composer( '*', function ($view) {

            $gyms = Gym::orderBy('created_at','desc')->paginate(5);


            $view->with('gyms', $gyms);
        });
        schema::defaultStringLength(191);
    }
}
