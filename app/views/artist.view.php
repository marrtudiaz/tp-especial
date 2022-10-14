<?php
 require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class ArtistView {
        private $smarty;
    
    
        public function __construct($user) {
            $this->smarty = new Smarty(); 
            $this->smarty->assign('user', $user);
        }

    
        function showArtists($artists,$error) {
            // asigno variables al tpl smarty
            $this->smarty->assign('artists', $artists);
            $this->smarty->assign('error', $error);
            // mostrar el tpl
            $this->smarty->display('./artistList.tpl');
        }
        function showFormArtist() {        
            // mostrar el tpl
            $this->smarty->display('./editArtist.tpl');
        }
    }
    ?>