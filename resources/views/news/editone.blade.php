@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Редактировать новость #{{ $news->id }}</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
							<div class="form-group">
								<label for="title">Заголовок</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок" value="{{ $news->title }}">
							</div>
							<div class="form-group">
								<label for="text">Текст</label>
								<textarea class="form-control" id="text" name="text" data-plugin="summernote" data-options="{lang: 'ru-RU'}" placeholder="Текст новости">{{ $news->text }}</textarea>
							</div>
							
							<div class="form-group" style='position:relative'>
								<label for="published_at">Дата</label>
								<input type="text" id="published_at" name="published_at" class="form-control" data-plugin="datetimepicker" data-options="{ defaultDate: '{{ $published_at }}', locale: 'ru' }">
							</div>
							
							<div class="form-group">
								<label for="image">Старое изображение</label><br />
								<a href="{{ $news->picture }}" target="_blank"><img src="{{ $news->previewpicture }}" border="0" width="150" /></a>
							</div>
							
							<div class="form-group">
								<label for="image">Новое изображение</label>
								<input type="file" id="image" name="image" class="form-control">
							</div>
							
							<span class="pull-right">
							  <a href="{{ route('news.edit') }}" class="btn btn-info btn-md">Назад</a>
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
                Новость успешно отредактирована
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
