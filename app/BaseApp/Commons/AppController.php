<?php
namespace BaseApp\Commons;

use Syph\Controller\BaseController;
use Syph\View\View;
use Syph\Http\Redirect;

class AppController extends BaseController {
	
	protected $perms = array(
	);
	
	protected function auth($name = ''){
		$session = $this->get('session');
		if (!$session->has('User')) Redirect::to('/login');
		
		$request = $this->get('http.request');
		
		if (empty($name)) $permName = $request->attributes->params['controller'];
		else $permName = $name;
		
		$user = $session->get('User');
		if (!isset($this->perms[$user->id]) || !in_array($permName, $this->perms[$user->id])){
			throw new \Exception('Permissão negada', 401);
		}
	}
	
	protected function getHead(){
		$renderer = $this->get('view.renderer');
		$renderer->run('BaseApp:includes/head.php');
		return View::render($renderer);		
	}
	
	protected function getHeader(){
		$renderer = $this->get('view.renderer');
		$renderer->run('BaseApp:includes/header.php');
		return View::render($renderer);		
	}
	
	protected function getNavBar(){
		$session = $this->get('session');
		$user = $session->get('User');
		$renderer = $this->get('view.renderer');
		$renderer->run('BaseApp:includes/navbar.php');
		return View::render($renderer, array('user'=>$user));		
	}

}
