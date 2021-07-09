<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\BrandModel;
use App\Models\ItemTypesModel;

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
        $navbar = BrandModel::with('type')->get();
        $type = ItemTypesModel::all();
        View::share('navbar', $navbar);
        View::share('type', $type);
    }
}
