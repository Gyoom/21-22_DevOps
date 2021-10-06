<?php
	# Prise du temps actuel au début du script
	$time_start = microtime(true);

	# Variables globales du site
	define('VIEW_PATH','views/');
    define('EMAIL','jeanluc.collinet@ipl.be');
	$date = date("j/m/Y");
	
	# Require des classes automatisé
	function loadClass($class) {
		require_once 'models/' . $class . '.class.php';
	}
	spl_autoload_register('loadClass');

	# Ecrire ici le header de toutes pages HTML
	require_once(VIEW_PATH . 'header.php');
	
	# Ecrire ici le menu du site de toutes pages HTML
	require_once(VIEW_PATH . 'menu.php');

	# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
	$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
	# Quelle action est demandée ?
    /**
     * @return GenesisController
     */
    function getControllerGenesis()
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }

    /**
     * @return BooksController
     */
    function getControllerBook()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    function getControllerContact()
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
    }

    /**
     * @return HomeController
     */
    function getControllerHome()
    {
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return $controller;
    }

    switch($action) {
        case 'genesis':
            $controller = getControllerGenesis();
            break;
        case 'books':
            $controller = getControllerBook();
            break;
        case 'contact':
            $controller = getControllerContact();
            break;
        default: # Par défaut, le contrôleur de l'accueil est sélectionné
            $controller = getControllerHome();
            break;
    }
	# Exécution du contrôleur correspondant à l'action demandée
	$controller->run();
	
	# Ecrire ici le footer du site de toutes pages HTML
	require_once(VIEW_PATH . 'footer.php');
	