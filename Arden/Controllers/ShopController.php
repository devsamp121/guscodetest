<?php

namespace Arden\Controllers;
 
 use Arden\Controllers\BaseController;
use Arden\Models\OpeningTimesModel;
use Arden\Models\ProductsModel;

class ShopController extends BaseController
{
    public function __construct()
    {
        $model = new OpeningTimesModel();
        $this->modelData = $model->getData();
        
        $model = new ProductsModel();
        $this->productsData = $model->getData();
    }

    public function getModelData() {
        return $this->modelData;
    }

    public function getProductsData() {
        return $this->productsData;
    }
}