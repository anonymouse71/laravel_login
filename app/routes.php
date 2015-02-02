<?php


Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
	));


Route::get('user/{username}', array(
		'as'  =>  'profile-user',
		'uses' =>  'ProfileController@user'
	));

/*
/ Authenticated group
*/

Route::group(array('before' => 'auth'), function(){


	Route::group(array('before' => 'csrf'), function(){


			#Change password (post) route
			Route::post('/account/change-password' , array(
						'as' => 'account-change-password-post',
						'uses' => 'AccountController@postChangePassword'
				));

	});


	#Change password (get) route
	Route::get('/account/change-password' , array(
				'as' => 'account-change-password',
				'uses' => 'AccountController@getChangePassword'
		));


	#sign out (get)
	Route::get('/account/sign-out' , array(
		'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
	));


});




// unauthenticated group
// check if user is guest or not signed in
Route::group(array('before' => 'guest'), function(){

	// cross site request fogery check
	Route::group(array('before' => 'csrf'), function(){

		// create account post
		Route::post('/account/create' , array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		Route::post('/account/sign-in' , array(
				'as' => 'account-sign-in-post',
				'uses' => 'AccountController@postSignIn'
			));

		/*
		| Forgot password(GET) ........v............v
		*/
		Route::post('account/forgot-password' , array(
				'as'    => 'account-forgot-password-post',
				'uses'  => 'AccountController@postForgotPassword'
			));


	});


	/*
	| Forgot password(GET) ........v............v
	*/
	Route::get('account/forgot-password' , array(
			'as'    => 'account-forgot-password',
			'uses'  => 'AccountController@getForgotPassword'
	));


	Route::get('/account/recover/{code}' , array(
			'as'    => 'account-recover',
			'uses'  =>  'AccountController@getRecover'
		));

	Route::get('/account/sign-in' , array(
			'as' => 'account-sign-in',
			'uses' => 'AccountController@getSignIn'
		));



	Route::get('/account/create' , array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
	));

	
	Route::get('/account/activate/{code}' , array(
			'as' => 'account-activate',
			'uses' => 'AccountController@getActivate'
		));
});


// Route::get('/', function()
// {
// 	return View::make('hello');
// });