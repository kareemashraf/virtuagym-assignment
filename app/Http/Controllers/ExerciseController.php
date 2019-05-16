<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class ExerciseController extends Controller
{	

	public function store(Request $request)
    {
        return User::create($request->all());
    }
    
    public function update(Request $request)
    {
        $id =  $request->id;
        $Exercise = Exercise::findOrFail($id);
        $Exercise->update($request->all());

        return $Exercise;
    }
}
