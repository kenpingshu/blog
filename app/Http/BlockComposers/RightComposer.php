<?php
namespace App\Http\BlockComposers;

use Illuminate\Contracts\View\View;

class RightComposer extends BlockComposers
{
    public function __construct() 
    {
        parent::__construct(BlockComposers::LOCATION_RIGHTBAR);
        $this->composers = $this->generateComposers();
    }
    
    public function compose(View $view)
    {   
        foreach ($this->composers as $composer_name){
            $class = "\\App\\Http\\BlockComposers\\Right\\".$composer_name;
            $composer = new $class();
//            var_dump($composer->getData());exit;
            $view->with($composer_name, $composer->getData());
        }
        $view->with("right_composers", $this->composers);
    }
    
    protected function generateComposers()
    {
        return ["Search",'Category','Widget'];
    }
}
