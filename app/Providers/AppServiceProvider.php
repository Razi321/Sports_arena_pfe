<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\membership;
use App\Gym;
use App\User;
use App\Course;
use App\Feedback;
use App\Post;
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

            $posts= Post::orderBy('created_at','desc')->paginate(5);


            $view->with('posts', $posts);
        });


        View::composer( '*', function ($view) {

            $feedback = Feedback::all();


            $view->with('feedback', $feedback);
        });


        View::composer( '*', function ($view) {

            $users = User::orderBy('created_at','desc')->paginate(10);


            $view->with('users', $users);
        });



        View::composer( '*', function ($view) {

            $gyms = Gym::orderBy('created_at','desc')->paginate(5);


            $view->with('gyms', $gyms);
        });
        schema::defaultStringLength(191);
    }
}
