<?php

namespace Arden\Views;

class ProductsView extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {

        // Render opening times
        foreach($this->data as  $val) {
            echo "<p><b>Product Name: </b>". $val["name"]. "<p>";
            echo "<p><b>Description: </b>". $val["desc"]. "<p><br/>";
            echo "<b>Image: </b><img src='". $val["image"]. "' width='40' height='40' > ";
            echo "<br />";
        }
    }
}
