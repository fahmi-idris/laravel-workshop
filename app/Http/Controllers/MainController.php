<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Request\Master\Validator;

class MainController extends Controller
{
    public function index() {
      $data['collection'] = User::paginate(3);
      return view('welcome', compact('data'));
    }

    public function create() {
      return view('create');
    }

    public function store(Validator $request) {
      if (User::create($request->all())) {
        return redirect()->route('testing.index');
      }
      return redirect()-back();
    }

    public function destroy($id) {
      User::findOrFail($id)->delete();
      return redirect()->route('testing.index');
    }

    public function show($id) {
      $data['collection'] = User::find($id);
      $data['phone'] = $data['collection']->phone;
      return view('show', compact('data'));
    }

    public function edit($id) {
      $data = User::find($id);
      return view('edit', compact('data'));
    }

    public function update(Validator $request, $id) {
      User::find($id)->update($request->except('_token', '_method'));
      return redirect()->route('testing.index');
    }
}
