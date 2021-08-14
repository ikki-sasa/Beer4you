<?php

class RegisterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	

    

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
        $userModel = new UserModel();
       
        $userModel->signUp(
                        $_POST['firstname'],
                        $_POST['lastname'],
                        $_POST['email'],
                        $_POST['password'],
                        $_POST['address'],
                        $_POST['city'],
                        $_POST['zip']
                    );
        
        $http->redirectTo('/');
    }
    
}