<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	
    	 if(!empty($_SESSION)) {
    	     $http->redirectTo('/');
    	 }
    }
    
    public function httpPostMethod(Http $http, array $formFields)
    {
     
    	 
    	
    	 $userModel = new UserModel();
    	 
    	 $userModel->findWithEmailPassword($_POST['email'], $_POST['password']);
    	
    	 $http->redirectTo('/');
    }
}