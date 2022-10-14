<?php
require_once './app/models/artist.model.php';
require_once './app/views/artist.view.php';

class ArtistController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->helper= new AuthHelper();
        $this->model = new ArtistModel();
        $this->view = new ArtistView($this->helper->getUser());
    }

    public function showArtists()
    {
       
        $artists = $this->model->getAllArtists();
        $this->view->showArtists($artists, $error = false);
    }

    function addArtist()
    {
    
        $this->helper->checkLoggedIn();
        // TODO: validar entrada de datos
        if ((isset($_POST['name'])) && (isset($_POST['type'])) && (isset($_POST['description']))) {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $description = $_POST['description'];
            $id = $this->model->insertArtist($name, $type, $description);
            header("Location: " . BASE_URL . "artists");
        }
    }
    function deleteArtist($id_artist)
    {
        $this->helper->checkLoggedIn();
        try {
            $this->model->deleteArtistById($id_artist);
            header("Location: " . BASE_URL . "artists");
        } catch (Exception $e) {
            $artists = $this->model->getAllArtists();
            $this->view->showArtists($artists, "Can't delete un artist that already has a show");
        }
    }
    function showFormArtist()
    {
        $this->view->showFormArtist();
    }
    function editArtist($id_artist)
    {
        if ((isset($_POST['name'])) && (isset($_POST['type'])) && (isset($_POST['description']))) {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $description = $_POST['description'];
            $this->model->updateArtistById($name, $type, $description, $id_artist);
            header("Location: " . BASE_URL . "artists");
        }
    }
}

?>
