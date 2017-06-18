<?php
namespace BaseApp\Commons;

use Syph\DependencyInjection\ServiceInterface;

class SessionManager implements ServiceInterface {
	const LOGIN_URL = '/login';
	
	public function __construct() {
		$this->open();
	}
	
	public function __destruct() {
		$this->close();
	}

	public function getName() {
		return 'session';
	}
	
	public function getSessionName() {
		return session_name();
	}
	
	public function open() {
		session_start();
		$this->active = true;
	}
	
	public function close() {
		if ($this->active) session_write_close();
		$this->active = false;
	}
	
	public function get($key) {
		return $_SESSION[$key];
	}
	
	public function set($key, $value) {
		$_SESSION[$key] = $value;
	}
	
	public function has($key) {
		return isset($_SESSION[$key]);
	}
	
	public function remove($key) {
		unset($_SESSION[$key]);
	}
	
	public function clear() {
		$_SESSION = array();
	}
}