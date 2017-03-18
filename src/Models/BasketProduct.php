<?php

namespace Miciew\Shop\Basket\Models;

use \Illuminate\Database\Eloquent\Model;

class BasketProduct extends Model
{
    protected $table = 'mic_basket_products';

    public function basket()
    {
        return $this->hasOne( config('miciew_shop.models.basket.eloquent') );
    }


}