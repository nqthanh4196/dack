<?php

namespace App\Http\ViewComposers;
use App\Repositories\UserRepository;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Classify;
use App\Categories;

class ClassifyComposer
{
    public function getClassify(View $view)
    {
        $data = Classify::all();
        $cate= Categories::all();
        $view->with(['data'=>$data,'cate'=>$cate]) ;
         $cates= Categoriess::all();

    }
}