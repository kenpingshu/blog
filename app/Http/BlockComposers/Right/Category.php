<?php
namespace App\Http\BlockComposers\Right;

class Category {
    protected $data ;


    public function __construct() 
    {
        $this->data = new \stdClass();
    }
    
    
    
    public function getData()
    {
        $this->data->title = "文章分類";
        $this->data->categories = [
            [
                "name" => "PHP",
                "link" => "/category/1" 
            ],
            [
                "name" => "Laravel",
                "link" => "/category/2"
            ],
            [
                "name" => "隨筆",
                "link" => "/category/3"
            ]
        ];
        return $this->data;
    }
}
