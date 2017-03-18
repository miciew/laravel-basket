<?php

namespace Miciew\Shop\Repositories;

use Illuminate\Contracts\Auth\Guard;
use \Miciew\Shop\Basket\Contracts\Basket as BasketContract;

class Basket implements BasketContract
{
    /**
     * @var Guard
     */
    protected $guard;

    /**
     * Basket constructor.
     *
     * @param $guard
     */
    public function __construct( Guard $guard )
    {
        $this->guard = $guard;
    }


    public function items()
    {
        return $this->guard->basket->all();
    }

    public function get()
    {
        // TODO: Implement current() method.
    }

    public function remove( $ids )
    {
        // TODO: Implement remove() method.
    }

    public function add( $product, $price, $quantity = 1 )
    {
        // TODO: Implement add() method.
    }

    public function addMany( $products )
    {
        // TODO: Implement addMany() method.
    }

    public function order()
    {
        // TODO: Implement owner() method.
    }


}