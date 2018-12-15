<?php

namespace Repositories\Construct;

interface RepositoryInterface{

	public function all($paginate = 'paginate');

	public function find($id);

	public function store($data);

	public function update($id, $data);

	public function delete($id);
}
