class Basket {

	constructor() {
	    //on stock dans la propriété items l'appel de la fonction du chargement du basket
	    
	    //on appel la fonction d'affichage des articles du panier
	    
	}
	displayItemsBasket() {
	    //si on a des items présents dans notre panier
	    
	        //on supprime la classe hide dans l'élément #itemBasket
	       
	        //on écrit dans cet élément nos items
	        
	   } else {//sinon
	        //on ajoute à l'élément #itemBasket la classe hide
	        
	        // on écrit dans cette élément une chaine de charactère vide
	        
	   }
	}
	
	addToBasket(beerId, name, quantity, price) {   
	    //on transforme nos argument beerId et quantity en nombre entiers
	    
	    //on crée un objet item qui stockera nos arguments
		
	    //boucle sur notre propriété items
	    
	        //si les beerId (pour chaque index) de items sont les mêmes que notre argument beerId
	        
	            //on ajoute la quantité à notre quantity de notre propriété items
	            
	            //on sauvegarde notre panier (fonction)
				            
	            //on retourne le booléen true
	            
	        }
	    }
	    //mise à jour de items avec les nouvelles donnée sauvegardées dans l'objet
	    
	    //on sauvegarde notre panier (fonction)
	   
	}
	
	loadBasket() {
	    //on stock dans une variable items le resultat de la fonction de récupération du localstorage (fichier utilities)
	    
	    //si items est vide
	    
	        //items sera un tableau vide
	        
	   //on retourn items

	}
	
	saveBasket() {
	    //appel de la fonction de sauvegarde dans le localStorage (fichier utilities) 
	    
	    //on appel la fonction d'affichage des articles du panier
	    
	    //si notre navigateur est sur la page /basket
	    
	        //on appel la fonction d'affichage des articles du panier
	}
	
	displayCompleteBasket() {
	    console.log(document.body.offsetWidth);
	    //on initialise une variable totalprice à 0
	    
	    //si il y'a des items
	    
	        //on vide le body du tableau de #displayBasket
	        
	        //si la taille de l'écran est supérieur à 760
	        
	            //boucle qui parcous mes items
	            
	                //totalprice : addition de la quantité x prix
	                
	                //création de la balise tr on stock dans une variable tr
	                
	                //on ajoute à tr des td qui afficherons la quantité, le nom, la taille, le prix, quantité x le prix, et un boutton de suppression avec la classe trash-beer et un data-index qui sera l'index de notre boucle et un icon dans ce boutton <i class="fas fa-trash-alt"></i>
	                
	                //on ajoute à tbody du tableau de #displayBasket: tr
	                
	       //sinon
	                
	            //boucle qui parcous mes items
	            
	                //totalprice : addition de la quantité x prix
	                
	                //création de la balise tr on stock dans une variable tr
	                
	                //on ajoute à tr des td qui afficherons la quantité, le nom, la taille, quantité x le prix, et un boutton de suppression avec la classe trash-beer et un data-index qui sera l'index de notre boucle et un icon dans ce boutton <i class="fas fa-trash-alt"></i>
	                
	                //on ajoute à tbody du tableau de #displayBasket: tr      
	                
	       //on écrit le prix total dans #totalPrice
	       
	       //on appel la fonction de chargement du panier dans l'input (celle d'en dessous) avec comme argument #basketItem
	       
	   //sinon
	   
	    //on écrit dans #displayBasket votre panier est vide
	    
	    //on met en display none notre class .p-form
	    
	}
	loadBasketInInput(elmt) {
	    //on stock dans elmt la valeur des items que l'on transforme au format json
	    
	}
	removeToBasket(id) {
	    //on retire l'élément du tableau items (part rapport à l'argument id)
	    
	    //appel de la fonction de sauvegarde du panier
	    
	}
	
	clearBasket() {
	    //on clean les items avec un tableau vide
	    
	    //appel de la fonction de sauvegarde du panier
	    
	}
}