@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Редактировать изображение #{{ $gallery->id }}</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
							
							<div class="form-group">
								<label for="image">Старое изображение</label><br />
								<a href="{{ $gallery->picture }}" target="_blank"><img src="{{ $gallery->previewpicture }}" border="0" /></a>
							</div>
							
							<div class="form-group">
								<label for="image">Новое изображение</label>
								<input type="file" id="image" name="image" class="form-control">
							</div>
							
							<span class="pull-right">
							  <a href="{{ route('gallery.edit') }}" class="btn btn-info btn-md">Назад</a>
                <button type="submit" class="btn btn-danger btn-md">Сохранить</button> &nbsp;
							</span>
							<br /> <br />
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
                Изображение успешно отредактировано
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
