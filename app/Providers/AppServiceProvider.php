<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\setting;
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

      $admin_menu_list = [
        'dashboard' => 'Dashboard',
        'customer-portal' => 'Customer Portal',
        'user' => 'User',
        'page' => 'Page',
        'newsletter' => 'Newsletter',
        'settings' => 'Settings',
      ];

       View::share( 'admin_menu_list', $admin_menu_list);

    }
}
