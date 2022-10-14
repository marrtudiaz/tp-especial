
<?php
 require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class ShowsView {
        private $smarty;
    
        public function __construct($user) {
            $this->smarty = new Smarty(); 
            $this->smarty->assign('user', $user);
        }
        function showShows($shows) {
            // asigno variables al tpl smarty
            $this->smarty->assign('shows', $shows);
    
            // mostrar el tpl
            $this->smarty->display('./showsList.tpl');
        }    
        function showFormShows($shows,$artists) {
            // asigno variables al tpl smarty
            $this->smarty->assign('shows', $shows);
            $this->smarty->assign('artists', $artists);
            // mostrar el tpl
            $this->smarty->display('./editShow.tpl');
        }
        function showShowsFromArtist($artistShows){
            $this->smarty->assign('artistShows', $artistShows);
             // mostrar el tpl
            $this->smarty->display('./showsFromArtist.tpl');
        }
        function showShowDetail($showDetail){
            $this->smarty->assign('showDetail', $showDetail);
             // mostrar el tpl
            $this->smarty->display('./showDetail.tpl');
        }
    }

?>