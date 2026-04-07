@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Редактировать информацию о ходе строительства</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
@if(count($stages))  						
  					  <table class="table table-bordered">
    						<tr>
      						<th>#</th>
      						<th>Заголовок</th>
      						<th>Автор</th>
      						<th>Дата</th>
      						<th></th>
      				  </tr>
  @foreach($stages as $stage)
                <tr>
      						<td>{{ $stage->id }}</td>
      						<td>{{ $stage->title }}</td>
      						<td>{{ $stage->authorobj->name }}</td>
      						<td>{{ $stage->published_at->format('d.m.Y в H:i') }}</td>
      						<td width="273">
        						<a href="{{ route('stage.editone', $stage->id) }}" class="btn mw-md btn-info btn-sm"><span class="fa fa-edit"></span> Редактировать</a>
        						<a href="{{ route('stage.delete', $stage->id) }}" class="btn mw-md btn-danger btn-sm delete_news"><span class="fa fa-remove"></span> Удалить</a>
      						</td>
      				  </tr>
  @endforeach
					    </table>
@else 
  Никто пока не добавлял информацию о ходе строительства, попробуйте сделать это <a href="{{ route('stage.index') }}">здесь</a>.					    
@endif					    
					    
  						{!! $stages->render() !!}
  						

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
    if(!confirm('Вы уверены что хотите удалить информацию о ходе строительства?')) return false;
  });
  
</script>
@endpush  
@endsection
