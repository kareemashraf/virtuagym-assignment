<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Day;
use App\Exercise;

class DayController extends Controller
{   
    public function store(Request $request)
    {

        $day = Day::create(['title'=> $request->title, 'plan_id'=>$request->plan_id ]);

        foreach ($request->exercise_title as $key => $value) {
          $exercise =  Exercise::create(['title'=> $value,'description'=> $request->exercise_description[$key] , 'day_id'=>$day->id ]);   
        
        }

        return $day->id;
    }

    public function getDaybyID(Request $request)
    {
    	$id =  $request->id;
    	$day =  Day::find($id);

    	$data['day_id'] = $id;
    	$data['day_title'] = $day->title;

    	$exercises = Exercise::where('day_id', $id)->get();

    	foreach ($exercises as $key => $value) {
    		$data['exercise'][$key]['exercise_id'] = $value->id;
    		$data['exercise'][$key]['exercise_title'] = $value->title;
    		$data['exercise'][$key]['exercise_description'] = $value->description;
    	}
// dd($data);
        return View::make('day', array('data' => $data) );
    }

    public function delete(Request $request, $id)
    {
        $day = Day::findOrFail($id);
        $day->delete();

        return 204;
    }

    public function update(Request $request)
    {
        $id =  $request->id;
        $day = Day::findOrFail($id);
        $day->update($request->all());

        return $day;
    }

}
