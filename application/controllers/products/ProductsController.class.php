<?php

class ProductsController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    
    	 $beerModel = new BeerModel();
    	
    	 $beers = $beerModel->listAllBeers();
    	 
    	 return [
            'beers'=>$beers
        ];
    	 
    }
    public function httpPostMethod(Http $http, array $formFields)
    {
    	
    }
}