<?php namespace App\Providers;

use App\Variable;
use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $nomEcole = Variable::whereKey('ECOLE_NOM')->first();
            if ($nomEcole) {
                view()->share('schoolName', $nomEcole);
            }
        } catch (QueryException $e) {
            //NOTHING
        }

        try {
            $logoEcole = Variable::whereKey('ECOLE_LOGO')->first();
            if ($logoEcole) {
                view()->share('schoolLogo', $logoEcole);
            }
        } catch (QueryException $e) {
            //NOTHING
        }
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }

}
