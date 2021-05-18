<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class PublicController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showEvent() {
        // Prodotti della categoria selezionata, in sconto o meno
       $events = $this->_catalogModel->getAllEvents();

        return view('catalog')
                        ->with('events', $events);
    }
}
