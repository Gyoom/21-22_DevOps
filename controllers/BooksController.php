<?php

class BooksController{

	public function __construct() {
	
	}
			
	public function run(){	
		
		# Variable HTML dans la vue
		$books = '';
		
		# Sélection de tous les livres sous forme de tableau
		$books = Db::getInstance()->getBooks();
		
		# Ecrire ici la vue
		# $books contient un tableau d'objets de la classe Livre
		require(VIEW_PATH . 'books.php');
	}
}
