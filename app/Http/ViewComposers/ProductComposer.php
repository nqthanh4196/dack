<?php

namespace App\Http\ViewComposers;
use App\Repositories\UserRepository;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductComposer
{
    public function getProduct(View $view)
    {
        $pro = Product::paginate(12);
        $view->with('pro',$pro); 
    }

}