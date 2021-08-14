<?php

class ProfilController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        //si on ne trouve pas de session de connection
        if(empty($_SESSION)) {
            //on redirige vers l'accueil
            $http->redirectTo('/user/login');
        }   
        //on instancie notre classe user du model
        $userModel = new UserModel();
        //on appel la fonction pour récupérer l'utilisateur connecté on stock dans une variable
        $user = $userModel->findOneUser($_SESSION['user']['id']);
        //on instancie notre classe order du model
        $orderModel = new OrderModel();
        //on appel la fonction pour récupérer toutes les commandes on stock dans une variable
        $orders = $orderModel->getAllOrdersByUser($_SESSION['user']['id']);
        //on retourne un tableau des deux variables
        return [
            "user"=>$user,
            "orders"=>$orders
        ];
    }
    
    public function httpPostMethod(Http $http, array $formFields)
    {
        //on instancie notre classe user du model
        $userModel = new UserModel();
        //on appel la fonction de modification des infos de l'utilisateur
        $userModel->changeUserProfil($_POST, $_SESSION['user']['id']);
        //on redirige vers /user/profil
        $http->redirectTo('/user/profil');
    }
}