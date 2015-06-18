<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\CompetenceRepository',
            'App\Repositories\Impl\CompetenceRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\EntrepriseRepository',
            'App\Repositories\Impl\EntrepriseRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\EtudiantRepository',
            'App\Repositories\Impl\EtudiantRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\OffreStageRepository',
            'App\Repositories\Impl\OffreStageRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\PromotionRepository',
            'App\Repositories\Impl\PromotionRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\UserRepository',
            'App\Repositories\Impl\UserRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\ModerateurRepository',
            'App\Repositories\Impl\ModerateurRepositoryImpl'
        );
    }
}