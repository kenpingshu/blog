<?php


namespace App\Http\BlockComposers;

use Illuminate\Contracts\View\View;

class HeaderComposer 
{
    private $composers;
    
    public function compose(View $view)
    {   
        $this->composers = $this->getComposers();
        foreach ($this->composers as $composer_name){
            $class = "\\App\\Http\\BlockComposers\\Header\\".$composer_name;
            $composer = new $class();
//            var_dump($composer->getData());exit;
            $view->with($composer_name, $composer->getData());
        }
        $view->with("header_composers", $this->composers);
        
        
    }
    
    private function getComposers(){
        return ["Navigation"];
    }
}
