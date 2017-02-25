<?php

namespace App\Http\ViewComposers;
use App\Repositories\UserRepository;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Supplier;

class SupplierComposer
{
    public function getSupplier(View $view)
    {
        $data = Supplier::all();
        
        $view->with(['data'=>$data]);
    }
}