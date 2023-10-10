<?php



namespace App\Providers;



use Illuminate\Support\ServiceProvider;
use App\Models\StanstillGroup;
use Flat3\Lodata\Facades\Lodata;



use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider

{

    /**

     * Register any application services.

     */

    public function register(): void

    {

        //

    }



    /**

     * Bootstrap any application services.

     */

    public function boot(): void

    {

        if(!App::runningInConsole()){

            Lodata::discover(StanstillGroup::class);

        }



    }

}


