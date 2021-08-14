<?php

class DetailController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	
    	 if(empty($_GET['productId'])) { 
			$http->redirectTo('/');	
		}
    	
    	 
    }
    
    public function httpPostMethod(Http $http, array $formFields)
    {
    
    }
}