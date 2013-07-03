<?php
/**
 *
 * Proyect Name: mini-linker-core
 * Linkerweb Corporation.
 *
 * description: framework sencillo para la creacion de sitios pequeños pero bien
 *               estructurados y con buenas practicas
 *
 *
 * @author Uriel isai Rodriguez rivas <isairivas@gmail.com>
 *
 */


class Application {
	
	protected $displayError = '-1';
	protected $request = array();
	protected $env = null;
	private static $renderView = true;
	
	public static $registry = array();
	public static $view = null;
	
	
	public function __construct(){
		
		session_start();
		$this->env = 'test';
		$this->initConstantes();
		$this->addConfigs();
		if(DISPLAY_ERRORS){
			error_reporting(-1);
		} else {
			error_reporting(0);
		}
		
		$this->initAutoload();
		self::$view = new Lib_Mvc_View();
	}
	
	public function initAutoload(){
		include_once PATH_APP . '/lib/core/functions.php';
		include_once dirname(__FILE__) . '/autoload.php';
	}
	
	public function run(){
		$rooter = new Lib_Core_Rooter();
		$rooter->dispatch();
		
		if(self::$renderView){
			self::$view->render();
		}
		
	}
	
	private function initConstantes(){
		$sourcePath = dirname(__FILE__);
		define('PATH_APP',$sourcePath);
		define('PATH_CONFIG',PATH_APP .'/../configs');
	}
	
	public static function set($name,$value){
		self::$registry[$name] = $value;
	}
	
	public static  function get($name){
		return self::$registry[$name];
	}
	
	private function addConfigs(){
		include_once PATH_CONFIG . '/init.config.php';
		include_once PATH_CONFIG . '/application.config.php';
	}
	
	public static function setRenderView($render){
		if( is_bool($render) ){
			self::$renderView = $render;
		}
	}
	
	
	public static function hasAccess($nombrePermiso){
		
		$model = new Model_Security();
		$permisoEncontrado = false;
	
		$permiso = $model->getPermiso($nombrePermiso);
		if(is_null($permiso)){
			throw new Exception('El permiso no existe');
		}
		if(count($_SESSION['user']['roles']) < 0 ){
			return false;
		}

		if( $model->hasPermisoTheRol($_SESSION['user']['rol_id'], $permiso['id']) ){
			$permisoEncontrado = true;
		}
		
		/*
		 * foreach($_SESSION['user']['roles'] as $rol){
			
		}
		*/
	
		return $permisoEncontrado;
	
	}
	
}