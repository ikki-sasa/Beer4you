<?php

class AddController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        if(empty($_SESSION) || $_SESSION['user']['role'] != "admin" ) {
            $http->redirectTo('/');
        }
    }
    
    public function httpPostMethod(Http $http, array $formFields)
    {
       
    }
}