<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
    
class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'composers.Categories', 'App\Http\ViewComposers\CategoriesComposer@getCategories'
        );

        View::composer(
            'composers.Product', 'App\Http\ViewComposers\ProductComposer@getProduct'
        );

        View::composer(
            'composers.Classify', 'App\Http\ViewComposers\ClassifyComposer@getClassify'
        );

        View::composer(
            'composers.Supplier', 'App\Http\ViewComposers\SupplierComposer@getSupplier'
        );

        View::composer(
            'composers.Comment', 'App\Http\ViewComposers\CommentComposer@getComment'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}