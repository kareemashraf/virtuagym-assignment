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

		$to      = $user->email;
		$subject = 'Virtuagym test Notification';
		$message = "Hello ".$user->firstname."\n You have been assigned to a Workout Plan!";
		$headers = 'From: Admin@Virtuagym.com' . "\r\n" .
		    'Reply-To: Admin@Virtuagym.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		// send email using php mail, should change to use SMTP or AWS SES api instead 
		mail($to, $subject, $message, $headers); 
    }
}
