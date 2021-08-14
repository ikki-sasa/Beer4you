<?php

class AdminController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
             if(empty($_SESSION, $_ADMIN)) {    
            $http->redirectTo('/');
        };  
            
            
        $beerModel = new BeerModel();
        
        $BeerModel->listAllBeers();
        $userModel = new UserModel();
        
         $userModel->listAllUsers();
        
        return [
                'beer'=>$beer,
                'user'=>$users
            ];
    }
    
    public function httpPostMethod(Http $http, array $formFields)
    {
    	
    }
}