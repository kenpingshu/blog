<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        view()->composer(
            'template', 'App\Http\BlockComposers\HeaderComposer'
        );
        view()->composer(
            'page_style.two._two', 'App\Http\BlockComposers\RightComposer'
        );
    }
    
    public function register() 
    {
        ;
    }
}
