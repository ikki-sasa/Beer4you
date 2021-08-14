'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////
let basket = new Basket();

//Gestion affichage menu profil connexion
let state = false;

//au surbol du boutton user il supprime la classe hide qui cache le petit menu
$('#userButton').on('mouseover', function() {
	$('.under-nav-list').removeClass('hide');
});
//quand on sort du survol on remet la class hide qui recache le menu
$('.under-nav-list').on('mouseout', function() {
	$('.under-nav-list').addClass('hide');
});
//lorsque l'on clique sur le boutton version mobile on montre le menu
$('#burger-button').on('click', showNav);
//lorsqu'on reclique sur le header il referme
$('header').on('click', hideNav);
//$('main').on('click', hideNav);

//fonction pour montrer notre petit menu utilisateur
function showNav(event) {
	event.preventDefault();
	
	if (state == false) {
		$('.nav-column').fadeIn('slow');
		state = true;
	} else {
		$('.nav-column').fadeOut('slow');
		state = false;
	}
}

//fonction pour cacher notre petit menu utilisateur
function hideNav(event) {
	event.preventDefault();
	if(state == true) {
		$('.nav-column').fadeOut('slow');
		state = false;
	}
}

/* GESTION DU PANIER */

//si notre navigateur est sur la page products

	//gestion d'évenement du click sur le bouton (.addToBasket)
		
		//on récupère l'id et le name grace au data passée dans les balises du formulaire ainsi que la quantité (valeur) en fonction de l'id du produit et le prix dans les data de celui-ci on stock tout dans 4 variable
	
		//si la quantité n'est pas un nomble ou qu'il est vide
		
			// on supprime la classe hide de #errorPopUp
			
			//on met une chaine de charactère vide à la valeur de l'id de cette biere
			
		//sinon
			
			//n appel la fonction d'ajout au panier en y passant nos 4 variables établies au début de notre fonction
			
			//on supprime la classe hide de #productPopUp
			
			//on écrit la quantitée dans #beerNumber
			
			//on met une chaine de charactère vide à la valeur de l'id de cette biere
			
	
	//gestion d'évenement du click sur .closePopUp
		
		//on ajoute la classe hide à #productPopUp
		
		//on ajoute la classe hide à #errorPopUp
		
	
//si notre navigateur est sur la page basket

	//appel de la fonction d'affichage des articles du panier
	
	//gestion d'événement sur le click du boutton .trash-beer
	
		//suppression du comportement par défaut
		
		//on récupère le data index de celui-ci et on stock dans une variable id
		
		//appel de la fonction de suppression du panier
		
		
//si notre navigateur est sur la page payment

	//appel de la fonction du chargement du panier (argument #orders)
	
//si notre navigateur est sur la page success

	//appel de la fonction qui va supprimer le panier du localStorage