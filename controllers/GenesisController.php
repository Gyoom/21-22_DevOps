<?php

class GenesisController{

	public function __construct() {

	}
			
	public function run(){	

		# Tableau de l'évolution du cours de PHP à l'IPL
		$phpCourses[2009] = 'PHP structuré en modules avec accès à SQLite comme base de données';
		$phpCourses[2010] = 'PHP structuré en modules avec accès à MySQL comme base de données';
		$phpCourses[2011] = 'PHP structuré en modules avec PDO OO accédant à MySQL comme base de données';
		$phpCourses[2012] = 'PHP structuré en MVC avec PDO OO accédant à MySql comme base de données';
		$phpCourses[2013] = 'PHP structuré en MVC avec PDO OO accédant à MySql comme base de données';
		$phpCourses[2014] = 'PHP structuré en MVC avec PDO OO accédant à MySql comme base de données';
		$phpCourses[2015] = 'PHP OO structuré en MVC avec PDO OO accédant à MySql comme base de données';

		# Un contrôleur se termine en écrivant une vue
		require(VIEW_PATH . 'genesis.php');
	}
	
	

}
