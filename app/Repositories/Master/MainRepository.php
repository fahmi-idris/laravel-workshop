<?php
namespace Repositories\Master;

use App\User;
use Repositories\Construct\RepositoryInterface;
use Repositories\Construct\Repository;

Class MainRepository extends Repository {

	protected $model;

	public function __construct(User $model){
		$this->model = $model;
	}

	public function all($paginate = 'paginate', $count = int){
		if (isset($paginate) && $paginate == 'paginate' && isset($count)) {
			return $this->model->orderBy('id', 'desc')->paginate($count);
		}
		return $this->model->orderBy('id', 'desc')->get();
	}
}
