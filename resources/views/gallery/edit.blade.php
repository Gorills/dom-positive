@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Галерея</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
@if(count($gallery)) 
              <ul class="sortable_images"> 						
<!--
  					  <table class="table table-bordered">
    						<tr>
      						<th>#</th>
      						<th>Изображение</th>
      						<th>Автор</th>
      						<th>Дата</th>
      						<th></th>
      				  </tr>
-->
  @foreach($gallery as $item)
                <li data-picture-id="{{ $item->id }}">
                  <a href="{{ $item->picture }}" target="_blank"><img src="{{ $item->previewpicture }}" border="0" /></a>
                  <span class="actions">
                  <a href="{{ route('gallery.editone', $item->id) }}" class="btn mw-md btn-info btn-sm edit_news"><span class="fa fa-edit"></span> Редактировать</a><br />
        						<a href="{{ route('gallery.delete', $item->id) }}" class="btn mw-md btn-danger btn-sm delete_news"><span class="fa fa-remove"></span> Удалить</a>
                  </span>	
                </li>
<!--
                <tr>
      						<td>{{ $item->id }}</td>
      						<td><a href="{{ $item->picture }}" target="_blank"><img src="{{ $item->previewpicture }}" border="0" /></a></td>
      						<td>{{ $item->authorobj->name }}</td>
      						<td>{{ $item->created_at->format('d.m.Y в H:i') }}</td>
      						<td width="273">
        						<a href="{{ route('gallery.editone', $item->id) }}" class="btn mw-md btn-info btn-sm"><span class="fa fa-edit"></span> Редактировать</a>
        						<a href="{{ route('gallery.delete', $item->id) }}" class="btn mw-md btn-danger btn-sm delete_news"><span class="fa fa-remove"></span> Удалить</a>
      						</td>
      				  </tr>
-->
  @endforeach
					    </ul>
@else 
  Никто пока не добавил изображения, попробуйте сделать это <a href="{{ route('gallery.index') }}">здесь</a>.					    
@endif					    
					    
  						{!! $gallery->render() !!}
  						

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
                {{ Session::get('success') }}
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
  $('.delete_news').click(function() {
    if(!confirm('Вы уверены что хотите удалить изображение?')) return false;
  });
  
  $('.sortable_images').sortable({
    stop: function( event, ui ) {
      var images_order = [];
      
      $(".sortable_images li").each(function() {
        images_order.push($(this).attr("data-picture-id"));
      });
      
      console.log(images_order);
      $.post("{{ route('gallery.order') }}", { order: images_order } );
    }
  });
  
</script>
@endpush  
@endsection
