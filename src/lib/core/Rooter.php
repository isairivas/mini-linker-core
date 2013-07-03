<?php
/**
 * 
 * Proyect Name: mini-linker-core
 * Linkerweb Corporation.
 * 
 * description: framework sencillo para la creacion de sitios pequenos pero bien
 *               estructurados y con buenas practicas
 *  
 * 
 * @author Uriel isai Rodriguez rivas <isairivas@gmail.com>
 * 
*/

/* 
* Clase encargada para despachar los controladores y las acciones
* segun corresponda la url
*/
class Lib_Core_Rooter {
	
	protected $defaultController = LINKER_DEFAULT_CONTROLLER;
	protected $defaultAction = LINKER_DEFAULT_ACTION;
	protected $defaultModule = LINKER_DEFAULT_MODULE;
	
	protected $controller = '';
	protected $action = '';
	protected $module = '';
	
	function __construct() {
		
		$this->controller = $this->defaultController;
		$this->action = $this->defaultAction;
		$this->module = $this->defaultModule;
		
	}
	
	/** 
	* despacha la peticion
	*/
	public function dispatch(){
		$this->readRequest();
		if(file_exists( PATH_APP.'/modules/'. $this->module .'/controllers/'. $this->controller.'.php')){
			$controller = $this->controller;
		}
		
		// registrar el controlador y la accion
		$request = array('module' => $this->module,'controller' => $controller,'action' => $this->action ); 
		Application::set('request', $request);
		
		$classControllerName = 'Module_'.ucfirst($this->module).'_Controller_'.$controller;
		$object = new $classControllerName();
		// mandar llamar accion
		$action = $this->action;
		$object->$action();
	}
	
	/** 
	* se encarga de leer la peticion de tipo GET para obtener
	* el controlador y la accion a redirigir
	*/
	public function readRequest(){
		
		if(isset($_GET['section'])){
			$this->controller = ucfirst($_GET['section']);
		}
		if(isset($_GET['action'])){
			$this->action = $_GET['action'];
		}
		if(isset($_GET['module'])){
			$this->module = $_GET['module'];
		}
	}
	
	
}

