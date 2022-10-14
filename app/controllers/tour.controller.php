<?php
require_once './app/models/artist.model.php';
require_once './app/models/show.model.php';
require_once './app/views/tour.view.php';


class TourController
{
    private $ArtistModel;
    private $ShowModel;
    private $TourView;

     function __construct()
    {
        $this->helper= new AuthHelper();
        $this->ShowModel = new ShowModel();
        $this->ArtistModel = new ArtistModel();
        $this->TourView = new TourView($this->helper->getUser());


    }

    public function showTour()
    {  
        $shows = $this->ShowModel->getAllShows();
        $artists = $this->ArtistModel->getAllArtists();
        $this->TourView->showTour($artists, $shows);
    }

    public function showHome()
    {
        $this->helper->checkLoggedIn();
        $this->TourView->showHome();
    }
}
?>