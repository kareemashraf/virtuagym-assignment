<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Day;
use App\Exercise;


class PlanController extends Controller
{
    public function index()
    {
        return Plan::all();
    }

    public function delete($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();

       	$message = 'your plan '.$plan->title.' has been deleted';
        self::send_email($user_id, $message);
        return 204;
    }

    public function store(Request $request)
    {
    	$plan_title =  $request->title;
    	$user_id =  $request->user_id;

        $plan = Plan::create(['title'=>$plan_title, 'user_id' => $user_id]);

        $plan_id = $plan->id;

        if ($plan_id) {
        
	        $day_titles =  $request->day_title;
	        $exercise_title =  $request->exercise_title;
	        $exercise_description =  $request->exercise_description;

	        foreach ($day_titles as $key => $day_title) {
	        	if ($day_title) {
	        		$day = Day::create(['title' => $day_title , 'plan_id' => $plan_id ]);
	        		$day_id = $day->id;

		        	if ($day_id) {

		        		foreach ($exercise_title[$key] as $k => $v) {

			        		$exercise = Exercise::create(['title'=> $v, 
			        			'description'=> ($exercise_description[$key][$k])? $exercise_description[$key][$k] : '' , 
			        			'day_id'=>$day_id]);
			        		if (!$exercise->id) {
			        			return 'false';
			        		}
		        		}
		        	}else{
		        		return 'false';
		        	}
	        	}
	        }
        }

        $message = 'you have been assigned to a new plan: '.$plan_title;
 		self::send_email($user_id, $message); // send email to the user
       	return 'true';
    }

   

}
