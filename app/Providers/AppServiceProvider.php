<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\About;
use App\Contact;
use App\Socialmedia;
use App\Category;


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
         $about=About::all();
        view()->share('data',$about);
    
         $contact=Contact::all();
        view()->share('contactdata',$contact);

        $socialmedia=Socialmedia::all();
        view()->share('ssdata',$socialmedia);

         $cat=Category::all();
        view()->share('data4',$cat);

         
    }

}


