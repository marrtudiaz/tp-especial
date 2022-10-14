<?php
require_once './app/models/show.model.php';
require_once './app/views/show.view.php';
require_once './app/views/artist.view.php';
require_once './app/models/artist.model.php';
require_once './app/helpers/auth.helper.php';

class ShowController
{
    private $model;
    private $view;
    private $ArtistModel;

    public function __construct()
    {
        $this->helper= new AuthHelper();
        $this->model = new ShowModel();
        $this->view = new ShowsView($this->helper->getUser());
        $this->ArtistModel = new ArtistModel();
        $this->ArtistView = new ArtistView($this->helper->getUser());
        
    }
    function addShow()
    {
        // TODO: validar entrada de datos
        if ((isset($_POST['name'])) && (isset($_POST['date'])) && (isset($_POST['price']))) {
            $name = $_POST['name'];
            $id_artist = $_POST['id_artist'];
            $date = $_POST['date'];
            $price = $_POST['price'];
            $id = $this->model->insertShow($name, $id_artist, $date, $price);
            header("Location: " . BASE_URL . "shows");
        }
    }

    function deleteShow($id_show)
    {
        $this->helper->checkLoggedIn();
        $this->model->deleteShowById($id_show);
        header("Location: " . BASE_URL . "shows");
    }
    function showFormShow()
    {
        
        $shows = $this->model->getAllShows();
        $artists = $this->ArtistModel->getAllArtists();
        $this->view->showFormShows($shows, $artists);
    }

    function editShow($id_show)
    {

        if ((isset($_POST['name'])) && (isset($_POST['date'])) && (isset($_POST['price']))) {
            $name = $_POST['name'];
            $id_artist = $_POST['id_artist'];
            $date = $_POST['date'];
            $price = $_POST['price'];
            $this->model->updateShowById($name, $id_artist, $date, $price, $id_show);
            header("Location: " . BASE_URL . "shows");
        }
    }
    public function showShowsFromArtist($id_artist)
    {
     
        $artistShows = $this->model->ShowArtistShowsById($id_artist);
        $this->view->showShowsFromArtist($artistShows);
    }
    public function ShowShowDetail($id_show)
    {
        
        $showDetail = $this->model->ShowShowDetail($id_show);
        $this->view->showShowDetail($showDetail);
    }
}
