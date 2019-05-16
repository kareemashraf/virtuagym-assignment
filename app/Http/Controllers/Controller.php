<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function send_email($user_id)
    {
    	$user = User::find($user_id);

		$msg = "Hello ".$user->firstname."\n You have been assigned to a Workout Plan!";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,90);

		// send email using php mail, should change to use SMTP or AWS SES api instead 
		mail($user->email,"My subject",$msg);
    }
}
