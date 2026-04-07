@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Заявки</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
@if(count($flatReserve))
  					  <table class="table table-bordered">
    						<tr>
      						<th>#</th>
      						<th>Имя</th>
      						<th>Номер телефона</th>
      						<th>URL квартиры</th>
							<th>Дата и время заявки</th>
      						<th></th>
      				  </tr>
  @foreach($flatReserve as $item)
                <tr>
      						<td>{{ $item->id }}</td>
      						<td>{{ $item->name }}</td>
      						<td>{{ $item->phone }}</td>
      						<td><a href="{{ $item->link_page }}" target="_blank">{{ $item->link_page }}</a></td>
							<td>{{ $item->created_at->format('d.m.Y в H:i') }}</td>
      						<td width="273">
        						<a href="{{ route('flat-reserve.delete', $item->id) }}" class="btn mw-md btn-danger btn-sm delete_news"><span class="fa fa-remove"></span> Удалить</a>
      						</td>
      				  </tr>
  @endforeach
					    </table>
@endif

	{!! $flatReserve->render() !!}

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
    if(!confirm('Вы уверены что хотите удалить бронь?')) return false;
  });
  
</script>
@endpush  
@endsection
