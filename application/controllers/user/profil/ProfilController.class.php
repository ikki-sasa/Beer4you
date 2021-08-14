<?php

class ProfilController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        //si on ne trouve pas de session de connection
         if(!empty($_SESSION)) {  
            //on redirige vers l'accueil
            $http->redirectTo('/');
        };
        //on instancie notre classe user du model
        $userModel = new Usermodel();
        //on appel la fonction pour récupérer l'utilisateur connecté on stock dans une variable
        $UserModel->signUp(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['password'],
            $_POST['address'],
            $_POST['city'],
            $_POST['zip']
            );
        //on instancie notre classe order du model
        $orderModel = new Ordermodel();
        //on appel la fonction pour récupérer toutes les commandes on stock dans une variable
        
        //on retourne un tableau des deux variables
        
    }
    
    public function httpPostMethod(Http $http, array $formFields)
    {
        //on instancie notre classe user du model
        $userModel = new Usermodel();
        //on appel la fonction de modification des infos de l'utilisateur
        
        //on redirige vers /user/profil
        $http->redirectTo('user');
    }
}