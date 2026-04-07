@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Добавить новость</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('news.create') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
							<div class="form-group">
								<label for="title">Заголовок</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок">
							</div>
							<div class="form-group">
								<label for="text">Текст</label>
								<textarea class="form-control" id="text" name="text" data-plugin="summernote" data-options="{lang: 'ru-RU'}" placeholder="Текст новости"></textarea>
							</div>
							
							<div class="form-group" style='position:relative'>
								<label for="published_at">Дата</label>
								<input type="text" id="published_at" name="published_at" class="form-control" data-plugin="datetimepicker" data-options="{ defaultDate: '{{ $now }}', locale: 'ru' }">
							</div>
							
							<div class="form-group">
								<label for="image">Картинка</label>
								<input type="file" id="image" name="image" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-danger btn-md pull-right">Добавить</button> <br /> <br />
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
                Новость успешно добавлена, <a href="{{ route('news.edit') }}">перейти</a> к управлению.
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
