<?php
namespace BaseApp\Commons;
use Syph\ValueObject\BaseValueObject;

class DataTableParams extends BaseValueObject {
	public $columns = array();
	public $draw = 1;
	public $order = array();
	public $start;
	public $length;
	public $search;
	
	public function getFindParams(){
		$res = array();
//			var_dump($this->columns); die();
		if (!empty($this->search['value']))
			foreach ($this->columns as $column){
				if (empty($column['data'])) continue;
				if (!$column['searchable']) continue;
				$res[$column['data']] = $this->search['value'];
			}
	
		return $res;
	}
	
	public function getOrder(){
		$orderBy = '';
		foreach ($this->order as $order){
			if (empty($this->columns[$order['column']]['orderable'])) continue;
			
			$orderBy .= ' '.$this->columns[$order['column']]['data'];
			$orderBy .= ' '.$order['dir'];
		}
		return $orderBy;
	}
	
	public function getLimit(){
		return $this->length;
	}
	
	public function getOffset(){
		return $this->start;
	}
	 
	public function __construct() {
		parent::__construct($this);
	}
	
	private function typeCheck(&$columns){
		foreach ($columns as &$column) {
			$column['searchable'] = $column['searchable'] == 'true';
			$column['orderable']  = $column['orderable']  == 'true';
			$column['search']['regex']  = $column['search']['regex'] == 'true';
		}
	}
	
	public function loadData($request) {
		foreach ($request->get->params as $key=>$value) {
			$this->$key = $value;
		}
		
		if (!empty($this->columns))
			$this->typeCheck($this->columns);
	}
	
}