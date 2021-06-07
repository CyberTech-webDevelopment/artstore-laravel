<?php

namespace App\Providers;

use App\Models\Colors;
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

        $all_sizes = [];
        $all_materials = [];

        $array_models = ['App\Models\Cloths_size', 'App\Models\Gloves_size', 'App\Models\Ring_size', 'App\Models\Shoes_sizes'];
        $array_models_material = ['App\Models\Bag_materials', 'App\Models\Cloth_materials', 'App\Models\Decoration_materials', 'App\Models\Photo_materials', 'App\Models\Sculpture_materials', 'App\Models\Shoes_materials',];
        foreach ($array_models as $model) {
            $size = $model::all();
            $model_key = explode("\\", $model);

            $all_sizes[$model_key[2]] = $size;

        }
        foreach ($array_models_material as $m) {
            $material = $m::all();
            $m_key = explode("\\", $m);

            $all_materials[$m_key[2]] = $material;

        }


        $menu = Menu::all();
        $all_colors = Colors::all();

        view()->share(compact('menu', 'all_sizes','all_materials','all_colors'));

    }
}
