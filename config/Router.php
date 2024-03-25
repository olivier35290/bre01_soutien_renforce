<?php

require 'controllers/GameController.php';
require 'controllers/AdminGameController.php';

class Router  
{
    public function handleRequest(array $get) : void 
    {
        if (!isset($get['route'])) 
        {
            $gameController = new GameController();
            $gameController->showGameListPage();
           
        } 
        else if (isset($get['route']) && $get['route'] === 'game') 
        {
            $gameController = new GameController();
            $gameController->showGamePage();
           
        } 
        else if (isset($get['route']) && $get['route'] === 'admin-game') 
        {
            $adminGameController = new AdminGameController();
            $adminGameController->showAdminGamePage();
            
        } 
        else 
        {
            echo "Route non valide";
        }
    }
}
