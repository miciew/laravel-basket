<?php

namespace Miciew\Shop\Basket\Contracts;


interface Basket
{
    public function items();

    public function get();

    public function remove($ids);

    public function add( $product, $price, $quantity = 1 );

    public function addMany( $products );

    public function order();
}