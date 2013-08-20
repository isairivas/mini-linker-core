<?php

/**
 * controlador Padre del modulo de backend "admin"
 * aqui se pueden inciar configuraciones que afectana el modulo en general
 *
 * @author isai rivas
 */

class Module_Admin_Controller_Parent extends Lib_Mvc_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->moduleConfigurations();
        $this->createMenu();
    }
    
    private function moduleConfigurations(){
        
        /* se elige el layout de mooncake (admin) */
        Application::$view->setLayout('mooncake');
        
        /* Se agrega titulo por default para el modulo */
        Application::set('view-title','Admin');
        Application::set('view-subtitle','Admin');
        
        /* Agregar navegacion default */
        $navegacion = array(
            'Home' => '/admin'
        );
        Application::set('navegation',$navegacion);
    }
    
    private function createMenu(){
        $general = new Lib_View_Component_Menu('General','/','icon-home');
        $general->addChild(new Lib_View_Component_Menu('Dashboard', '/admin', 'icol-dashboard'));
        $general->addChild(new Lib_View_Component_Menu('Calendar', '/admin', 'icol-calendar-2'));
        
        $general2 = new Lib_View_Component_Menu('Configuraciones','/','icon-cogs');
        $general2->addChild(new Lib_View_Component_Menu('Dashboard', '/admin', 'icol-dashboard'));
        $general2->addChild(new Lib_View_Component_Menu('Calendar', '/admin', 'icol-calendar-2'));
        
        
        Application::set('__view-menu', array($general,$general2));
    }
}

