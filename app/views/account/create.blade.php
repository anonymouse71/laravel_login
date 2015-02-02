@extends('layout.main')


@section('content')
	<form action=" {{ URL::route('account-create-post') }}" method="post">
		

		<div>
			<label for="">Email</label>
			<input type="text" name="email"  {{ e(Input::old('email')) ? ' value="' .Input::old('email'). '"': '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif	
		</div>
		<div>	
			<label for="">Username</label>
			<input type="text" name="username" {{ e(Input::old('username')) ? ' value="' .Input::old('username'). '"': '' }}>
			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif	
		</div>
		<div>			
			<label for="">Password</label>
			<input type="text" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		<div>
			<label for="">Password Confirm</label>
			<input type="text" name="password_again">
			@if($errors->has('password_temp'))
				{{ $errors->first('password_temp') }}
			@endif
		</div>

			<input type="submit" value="create account">
			{{ Form::token() }}
	</form>
@stop	

