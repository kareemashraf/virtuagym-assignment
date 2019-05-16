<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Plan;
use App\User;
use App\Day;
use App\Exercise;


class IndexController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return View::make('welcome', array('plans' => $plans));
    }


    public function getPlanbyID(Request $request)
    {

    	//create an array out of the binary tree
    	$id =  $request->id;
    	$plan =  Plan::find($id);

    	$data['plan_id'] = $plan->id;
    	$data['plan_title'] = $plan->title;

    	$days = Day::where('plan_id', $plan->id)->get();

		foreach ($days as $key => $day) {
            $data['days'][$day->id]['day_id'] = $day->id;
			$data['days'][$day->id]['title'] = $day->title;

			$exercises = Exercise::where('day_id', $day->id)->get();

			foreach ($exercises as  $exercise) {
				 $data['days'][$day->id]['exercise'][$exercise->id]['title'] = $exercise->title;
				 $data['days'][$day->id]['exercise'][$exercise->id]['description'] = $exercise->description;
			}
			 
		}
// dd($data);
        return View::make('plan', array('data' => $data) );
    }

    public function NewPlan()
    {
        $users = User::all();
    	return View::make('add-plan', array('users' => $users));
    }

    

}
