<?php

class HomeController extends BaseController {

	public function home(){

		// echo $user = User::find(1)->username;
		
		// Mail::send('emails.auth.test' , array('name' => 'gautam'), function($message){
		// 	$message->to('gautam.purplefront@gmail.com' , 'Gautam Fonseca')->subject('Just a Email');
		// });


		return View::make('home');
	}
	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

}
