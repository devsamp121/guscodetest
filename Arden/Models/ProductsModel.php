<?php

namespace Arden\Models;

use Arden\Models\Model;

class ProductsModel extends Model
{
    public function __construct()
    {
        $this->data = [
             
            ["name" => "Product 1",
             "desc" => "New product details.",
             "image"=> "images/image1.jpg"
            ], 
            ["name" => "Product 2",
             "desc" => "New product details.",
             "image"=> "images/image2.jpg"
            ],
            ["name" => "Product 3",
             "desc" => "New product details.",
             "image"=> "images/image3.jpg"
            ],
        ];
    }

    public function getData()
    {
        return $this->data;
    }
}