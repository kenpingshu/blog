<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\BlockComposers\Header;


class Navigation {
    
    protected $data ;


    public function __construct() 
    {
        $this->data = new \stdClass();
    }
    
    public function getData()
    {
        $nav_list = [
            
            [
                "name" => "關於我",
                "link" => url("/about")
            ],
            [
                "name" => "Service",
                "link" => url("/service"),
            ],
            [
                "name" => "Contact",
                "link" => url("/contact")
            ]
        ];
        $logo = [
            "name" => "臉都歪了",
            "link" => url("/")
        ];
        $this->data->nav_list = $nav_list;
        $this->data->logo = $logo;
        return $this->data;
    }
}
