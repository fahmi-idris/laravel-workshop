<?php

namespace Repositories\Construct;
use Repositories\Construct\RepositoryInterface;

use Illuminate\Container\Container as App;
use DB;

abstract class Repository implements RepositoryInterface{

	protected $model;

	public function find($id){

		return $this->model->whereId($id)->first();
	}

	public function store($data){
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		return $this->model->create($data);

	}

	public function update($id, $data){
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		return $this->model->whereId($id)->update($data);

	}

	public function delete($id){

		return $this->model->whereId($id)->delete();

	}

}
