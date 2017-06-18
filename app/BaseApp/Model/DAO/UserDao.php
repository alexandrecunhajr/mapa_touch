<?php

namespace FinanceiroApp\Model\DAO;

use FinanceiroApp\Model\DAO\BaseDao;
use FinanceiroApp\Model\VO\User;

class UserDao extends BaseDao {
	
	public function find($params){
		
		$query = 'select * from usuarios '.$this->getBasicWhere($params);
		//var_dump($query, $params); die();
		return $this->getResults($query, $params, '\FinanceiroApp\Model\VO\User');
	}
	
	public function insert(User $model){
		$query = 'insert into usuarios (nome, login, senha, ativo) values (:nome, :login, :senha, :ativo)';
		$p = $this->getConnection()->prepare($query);
		
		$p->bindParam(':nome',  $model->nome);
		$p->bindParam(':login', $model->login);	
		$p->bindParam(':senha', $model->senha);	
		$p->bindParam(':ativo', $model->ativo);
		
		$p->execute();
		return true;
	}
	
	public function update(User $model){
		$query = 'update usuarios set nome = :nome, login = :login, senha = :senha, ativo = :ativo where id = :id';
		$p = $this->getConnection()->prepare($query);
		
		$p->bindParam(':id',    $model->id);
		$p->bindParam(':nome',  $model->nome);
		$p->bindParam(':login', $model->login);	
		$p->bindParam(':senha', $model->senha);	
		$p->bindParam(':ativo', $model->ativo);
		
		$p->execute();
		return true;
	}
	
	public function delete(User $model){
		$query = 'delete from usuarios where id = :id';
		$p = $this->getConnection()->prepare($query);
		
		$p->bindParam(':id',    $model->id);
		
		$p->execute();
		return true;
	}
	
		
}