<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class PublicController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showCatalog1() {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        $prods = $this->_catalogModel->getProdsByCat($topCats->map->only(['catId']), 2, 'desc', true);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('products', $prods);
    }
}
