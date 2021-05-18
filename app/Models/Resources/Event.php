<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $table = 'events';
    protected $primaryKey = 'eventsID';
    // eventsID non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['eventsID'];
    public $timestamps = false;

    public function getPrice() {
        $price = $this->eventPrice;

        $discount = ($price * $this->eventDiscount) / 100;
        $price = round($price - $discount, 2);

        return $price;
    }

}
