@extends('layouts.login')

@section('content')
<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Авторизация</h4>
	<form method="POST" action="{{ route('login') }}">
  	{{ csrf_field() }}
		<div class="form-group">
			<input id="sign-in-email" type="email" class="form-control" placeholder="E-mail" name="email">
		</div>

		<div class="form-group">
			<input id="sign-in-password" name="password" type="password" class="form-control" placeholder="Пароль">
		</div>

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-danger">
				<input type="checkbox" id="keep_me_logged_in" name="remember" />
				<label for="keep_me_logged_in">Запомнить меня</label>
			</div>
		</div>
		<input type="submit" class="btn btn-danger" value="Войти">
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">
@if (count($errors) > 0)  
  <div class="alert alert-warning" role="alert">
		<strong>Ошибка!</strong>
		<span>Пользователя с такими данными не найдено в системе</span>
	</div>
@endif	
</div><!-- .simple-page-footer -->
@endsection
