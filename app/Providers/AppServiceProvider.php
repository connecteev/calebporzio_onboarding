<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Calebporzio\Onboard\OnboardFacade;
use App\User;

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
        OnboardFacade::addStep('Complete Profile')
            ->link('/profile')
            ->cta('Complete')
            ->completeIf(function (User $user) {
                //return $user->profile->isComplete();
                return $user->profile > 0;
            });

        OnboardFacade::addStep('Create Your First Post')
            ->link('/post')
            ->cta('Create Post')
            ->completeIf(function (User $user) {
                //return $user->posts->count() > 0;
                return $user->post > 0;
            });
    }
}
