<?php

namespace App\Http\BlockComposers;

use Illuminate\Contracts\View\View;

abstract class BlockComposers {
    
    
    const LOCATION_HEADER = 1;
    const LOCATION_RIGHTBAR = 2;
    const LOCATION_FOOTER = 3;


    protected $location;
    protected $composers;
    
    abstract protected function generateComposers();
    
    abstract public function compose(View $view);
    
    public function __construct($location) {
        $this->location = $location;
    }
}
