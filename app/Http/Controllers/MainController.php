<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Request\Master\Validator;

class MainController extends Controller
{
    public function __construct(User $user) {
      $this->user = $user;
    }

    public function index() {
      $data['collection'] = $this->user->paginate(3);
      return view('welcome', compact('data'));
    }

    public function create() {
      return view('create');
    }

    public function store(Validator $request) {
      if ($this->user->create($request->all())) {
        return redirect()->route('testing.index');
      }
      return redirect()-back();
    }

    public function destroy($id) {
      $this->user->findOrFail($id)->delete();
      return redirect()->route('testing.index');
    }

    public function show($id) {
      $data['collection'] = $this->user->find($id);
      $data['phone'] = $data['collection']->phone;
      $data['products'] = $data['collection']->product;
      return view('show', compact('data'));
    }

    public function edit($id) {
      $data = $this->user->find($id);
      return view('edit', compact('data'));
    }

    public function update(Validator $request, $id) {
      $this->user->find($id)->update($request->except('_token', '_method'));
      return redirect()->route('testing.index');
    }
}
