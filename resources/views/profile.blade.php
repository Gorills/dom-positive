@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Настройки профиля</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('profile_save') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
							<div class="form-group">
								<label for="email">Адрес электронной почты</label>
								<input type="email" class="form-control" id="email" name="email" value="{{ $me->email }}" placeholder="E-mail">
							</div>
							<div class="form-group">
								<label for="pass">Пароль</label>
								<input type="password" class="form-control" id="pass" name="password" placeholder="Пароль">
							</div>
							<div class="form-group">
								<label for="pass1">Пароль еще раз</label>
								<input type="password" class="form-control" id="pass1" name="password1" placeholder="Пароль еще раз">
							</div>
							<div class="form-group">
								<label for="avatar">Аватар</label>
								<input type="file" id="avatar" name="avatar" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-danger btn-md pull-right">Сохранить</button> <br /> <br />
						</form>

            @if (Session::get('errors'))
              <br />
              <div class="alert alert-danger">
                  <ul>
                      @foreach (Session::get('errors') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            @if (Session::get('success'))
              <br />
              <div class="alert alert-success">
                Настройки профиля успешно сохранены
              </div>
            @endif

						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	
</main>
<!--========== END app main -->
@endsection
