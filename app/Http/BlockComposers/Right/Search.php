<?php
namespace App\Http\BlockComposers\Right;

class Search {
    protected $data ;


    public function __construct() 
    {
        $this->data = new \stdClass();
    }
    
    public function getData()
    {
        $this->data->title = "搜尋";
        return $this->data;
    }
}
