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
    }
    
    public function register() 
    {
        ;
    }
}
