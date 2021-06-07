<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
//        $sizes = [];
        $all_sizes = [];
        $array_models = ['App\Models\Cloths_size','App\Models\Gloves_size','App\Models\Ring_size','App\Models\Shoes_sizes'];
        foreach ($array_models as $model)
        {
            $size = $model::all();
            $model_key = explode("\\",$model);
//            dd($model_key);
            $all_sizes[$model_key[2]] = $size;
//            array_push($sizes,$size);

        }

//        $sizes = [];
        $menu = Menu::all();

        view()->share(compact('menu','all_sizes'));

    }
}
