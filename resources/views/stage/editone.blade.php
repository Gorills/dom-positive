@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Редактировать информацию о ходе строительства #{{ $stage->id }}</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('stage.update', $stage->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
							<div class="form-group">
								<label for="title">Заголовок</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок" value="{{ $stage->title }}">
							</div>
							<div class="form-group">
								<label for="text">Текст</label>
								<textarea class="form-control" id="text" name="text" data-plugin="summernote" data-options="{lang: 'ru-RU'}" placeholder="Текст новости">{{ $stage->text }}</textarea>
							</div>
							
							<div class="form-group" style='position:relative'>
								<label for="published_at">Дата</label>
								<input type="text" id="published_at" name="published_at" class="form-control" data-plugin="datetimepicker" data-options="{ defaultDate: '{{ $published_at }}', locale: 'ru' }">
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
                    <input type="text" name="videos[]" value="{{ $first_video_url }}" class="form-control">
    							</div>
    							<div class="col-md-2">
      							<button type="button" class="btn btn-info btn-md pull-right youtube_add">Добавить</button>
    							</div>
  							</div>
							</div>
@if($videos)			
  @foreach($videos as $video)				
							<div class="form-group youtube_block">
  							<div class="row">
    							<div class="col-md-10">
								    <label>Видео Youtube</label>
                    <input type="text" name="videos[]" value="{{ $video->url }}" class="form-control">
    							</div>
    							<div class="col-md-2">
      							<button type="button" class="btn btn-danger btn-md pull-right youtube_remove">Удалить</button>
    							</div>
  							</div>
							</div>
	@endforeach						
@endif							
							
							
							<div class="image_block"></div>

@if(count($stage->images))
              <div class="form-group current_images_block">
								<label for="image">Текущие изображения</label><br />		
  @foreach($stage->images as $image)
								<img src="{{ $image->previewpicture }}" class="delete_stage_image" data-id="{{ $image->id }}" width="150" />
	@endforeach		
	            </div>
	            
	            <div class="form-group delete_images_block" style="display: none;">
								<button type="button" class="btn btn-danger btn-md delete_images"><i class="fa fa-trash" aria-hidden="true"></i> Удалить изображения (<span class="delete_images_count">0</span> шт.)</button>
							</div>		
@endif							
							
							<div class="form-group">
								<label for="image">Добавить изображения</label>
								<input type="file" name="images[]" class="form-control" accept=".bmp,.gif,.png,.jpg,.jpeg" multiple>
							</div>
							
							<span class="pull-right">
							  <a href="{{ route('stage.edit') }}" class="btn btn-info btn-md">Назад</a>
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
                Информация о ходе строительства успешно отредактирована
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
  
  $('.delete_stage_image').click(function() {
    var active = $(this).hasClass('active');
    if(active) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
    
    var active_images = $('.delete_stage_image.active').length;
    if(active_images > 0) $('.delete_images_block').show();
    else $('.delete_images_block').hide();
     
    $('.delete_images_count').html(active_images);
    
    return false;
  });
  
  $('.delete_images').click(function() {
    if($('.delete_stage_image.active' && confirm('Вы уверены что хотите удалить выбранные изображения?')).length) {
      var images_to_delete = [];
      $('.delete_stage_image.active').each(function() {
        images_to_delete.push($(this).attr('data-id'));
      });
      console.log(images_to_delete);
      $.post("{{ route('stage.media.delete') }}", { media: images_to_delete }, function(response) {
        if(response.result) {
          for(var key in images_to_delete) {
            $('.delete_stage_image[data-id="' + images_to_delete[key] + '"]').remove();
          }
          
          var active_images = $('.delete_stage_image.active').length;
          if(active_images > 0) $('.delete_images_block').show();
          else $('.delete_images_block').fadeOut('slow');
          
          if($('.delete_stage_image').length <= 0) $('.current_images_block').fadeOut('slow'); 
          
          
        } else alert('Ничего не было удалено, попробуйте выбрать изображения для удаления.');
      }, 'json');
    }
    
    
    return false;
  });
</script>
@endpush 
@endsection
