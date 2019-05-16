<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

     public function show($id)
    {
        return User::find($id);
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }


    public function update(Request $request)
    {
        $id =  $request->id;
        $user = User::findOrFail($id);
        $user->update($request->all());

        return $user;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return 204;
    }
    
    public function getUserbyID(Request $request)
    {
    	$id =  $request->id;

    	$user = $this->show($id);

		return View::make('edit-user', array('users' => $user) );
    }

    public function getUsers()
    {
        $users = User::all();
        return view::make('users', array('users' => $users));
    }



 
}
