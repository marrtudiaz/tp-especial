<?php
require_once './app/controllers/show.controller.php';
require_once './app/controllers/artist.controller.php';
require_once './app/controllers/tour.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora




// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'showsFromArtist':
        $ShowController = new ShowController();
        $id = $params[1];
        $ShowController->showShowsFromArtist($id);
        break;
    case 'showDetail':
        $ShowController = new ShowController();
        $id = $params[1];
        $ShowController->showShowDetail($id);
        break;
    case 'shows':
        $TourController = new TourController();
        $TourController->showTour();
        break;
        
    case 'home':
        $TourController = new TourController();
        $TourController->showHome();
        break;
    case 'artists':
        $ArtistController = new ArtistController();
        $ArtistController->showArtists();
        break;
    case 'addShow':
        $ShowController = new ShowController();
        $ShowController->addShow();
        break;
    case 'addArtist':
        $ArtistController = new ArtistController();
        $ArtistController->addArtist();
        break;
    case 'deleteShow':
        // obtengo el parametro de la acción
        $ShowController = new ShowController();
        $id = $params[1];
        $ShowController->deleteShow($id);
        break;
    case 'deleteArtist':
        $ArtistController = new ArtistController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $ArtistController->deleteArtist($id);
        break;
    case 'formEditArtist':
        $ArtistController = new ArtistController();
        // obtengo el parametro de la acción
        $ArtistController->showFormArtist();
        $id = $params[1];
        $ArtistController->editArtist($id);
        break;
    case 'formEditShow':
        $ShowController = new ShowController();
        // obtengo el parametro de la acción   
        $ShowController->showFormShow();
        $id = $params[1];
        $ShowController->editShow($id);
        break;
    default:
        echo ('404 Page not found');
        break;
}
