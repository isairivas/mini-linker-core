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
        $general = new Lib_View_Component_Menu('Home','/','icon-home',true);
        $general->addChild(new Lib_View_Component_Menu('Home', '/admin', 'icol-application-home',true));
        
        $contenido = new Lib_View_Component_Menu('Contenidos','','icon-list');
        
        
        $conf = new Lib_View_Component_Menu('Opciones','/','icon-cogs',true);
        $conf->addChild(new Lib_View_Component_Menu('Usuarios', '/admin/usuarios', 'icol-user-business-boss'));
        $conf->addChild(new Lib_View_Component_Menu('Salir', '/admin/login/out', 'icol-disconnect',true));
        
        
        Application::set('__view-menu', array($general,$contenido,$conf));
    }
}

