<?php

namespace MarApp\Model\VO;

use Syph\ValueObject\BaseValueObject;

class Listset extends BaseValueObject {
	public $id;
	public $nome;
	public $coordenacao;
	
	public function __construct() {
		parent::__construct($this);
	}	
}