<?php

namespace App\Http\ViewComposers;
use App\Repositories\UserRepository;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Categories;

class CategoriesComposer
{
    public function getCategories(View $view)
    {
        $cate = Categories::all();
        $view->with('cate',$cate);
    }
}