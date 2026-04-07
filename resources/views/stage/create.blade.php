@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Добавить информацию о ходе строительства</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('stage.create') }}" enctype="multipart/form-data">
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
							
							<div class="form-group youtube_more" style="display: none">
  							<div class="row">
    							<div class="col-md-10">
								    <label>Видео Youtube №<span class="youtube_more_count"></span></label>
                    <input type="text" name="videos[]" class="form-control">
    							</div>
    							<div class="col-md-2">
      							<button type="button" class="btn btn-danger btn-md pull-right youtube_remove">Удалить</button>
    							</div>
  							</div>
							</div>
							
							<div class="form-group youtube_block">
  							<div class="row">
    							<div class="col-md-10">
								    <label>Видео Youtube</label>
                    <input type="text" name="videos[]" class="form-control">
    							</div>
    							<div class="col-md-2">
      							<button type="button" class="btn btn-info btn-md pull-right youtube_add">Добавить</button>
    							</div>
  							</div>
							</div>
							
							<div class="form-group image_block">
								<label for="image">Изображения</label>
								<input type="file" name="images[]" class="form-control" accept=".bmp,.gif,.png,.jpg,.jpeg" multiple>
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
                Информация о ходе строительства успешно добавлена, <a href="{{ route('stage.edit') }}">перейти</a> к управлению.
              </div>
            @endif

						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	
</main>
<!--========== END app main -->
@push('scripts')
<script>
  $('.youtube_add').click(function() {
    var new_youtube = $('.youtube_more').clone(true),
    count = $('.youtube_block').length + 1;

    new_youtube.insertBefore('.image_block');
    new_youtube.removeClass('youtube_more');
    new_youtube.addClass('youtube_block');
    new_youtube.find('.youtube_more_count').html(count);
    new_youtube.fadeIn('slow');
    
    return false;
  });
  
  $('.youtube_remove').click(function() {
    var delete_youtube = $(this).parents('.form-group');
    
    delete_youtube.fadeOut('slow', function() {
      delete_youtube.remove();
    });
        
    return false;
  });
</script>
@endpush 
@endsection
