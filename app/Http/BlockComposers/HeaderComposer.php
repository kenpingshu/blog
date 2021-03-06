<?php
namespace App\Http\BlockComposers;

use Illuminate\Contracts\View\View;

class HeaderComposer extends BlockComposers
{
    public function __construct() 
    {
        parent::__construct(BlockComposers::LOCATION_HEADER);
        $this->composers = $this->generateComposers();
    }

    public function compose(View $view)
    {   
        foreach ($this->composers as $composer_name){
            $class = "\\App\\Http\\BlockComposers\\Header\\".$composer_name;
            $composer = new $class();
//            var_dump($composer->getData());exit;
            $view->with($composer_name, $composer->getData());
        }
        $view->with("header_composers", $this->composers);
    }
    
    protected function generateComposers()
    {
        return ["Navigation"];
    }
}
