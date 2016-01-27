<?php
namespace App\Http\BlockComposers\Right;

class Widget {
    protected $data ;


    public function __construct() 
    {
        $this->data = new \stdClass();
    }
    
    public function getData()
    {
        $this->data->title = "小工具";
        $this->data->contents = "這是小工具這是小工具這是小工具這是小工具這是小工具這是小工具這是小工具這是小工具";        
        return $this->data;
    }
}
