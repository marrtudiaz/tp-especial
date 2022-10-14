<?php
 require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class TourView {
        private $smarty;
    
           public function __construct($user) {
                $this->smarty = new Smarty(); 
                $this->smarty->assign('user', $user);
            }
    
        
    
        function showTour($artists,$shows) {
            // asigno variables al tpl smarty
            $this->smarty->assign('artists', $artists);
            $this->smarty->assign('shows', $shows);
            // mostrar el tpl
            $this->smarty->display('./showsList.tpl');
        }
        
      
        function ShowHome(){
            $this->smarty->display('./home.tpl');   
        }
    }
?>