@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content" name="redacting">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Редактировать страницу</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('page.save', ['template' => $template]) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
							<div class="form-group">
								<label for="name">Название страницы</label>
								<input type="text" class="form-control" id="name" name="name" value="@if($page){{ $page->name }}@endif" placeholder="Название страницы">
							</div>
							<div class="form-group">
								<label for="title">Заголовок страницы</label>
								<input type="text" class="form-control" id="title" name="title" value="@if($page){{ $page->title }}@endif" placeholder="Заголовок страницы">
							</div>
							<div class="form-group">
								<label for="keywords">Ключевые слова</label>
								<input type="text" class="form-control" id="keywords" name="keywords" value="@if($page){{ $page->keywords }}@endif" placeholder="Ключевые слова">
							</div>
							<div class="form-group">
								<label for="description">Описание</label>
								<input type="text" class="form-control" id="description" name="description" value="@if($page){{ $page->description }}@endif" placeholder="Описание">
							</div>
							
							<div class="pull-right">
  							<button type="submit" class="btn btn-info btn-md">Сохранить</button> 
  							<a href="#" class="btn mw-md btn-danger delete_page"><span class="fa fa-remove"></span> Удалить</a> 
							</div>
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
                {{ Session::get('success') }}
              </div>
            @endif

						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	</section>	
	
	<section class="app-content" name="adding">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Добавить контент</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
            <form method="POST" action="{{ route('page.variable.add', ['template' => $template]) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row">
<!--
                <div class="col-md-3">
    							<div class="form-group">
    								<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок переменной">
    							</div>
                </div>
-->
                <div class="col-md-4">
    							<div class="form-group">
    								<input type="text" class="form-control" id="key" name="key" placeholder="Переменная">
    							</div>
                </div>
                <div class="col-md-4">
    							<div class="form-group">
    								<input type="text" class="form-control" id="value" name="value" placeholder="Контент">
    							</div>
                </div>
                
                <div class="col-md-4">
                  <button type="submit" class="btn btn-info">Добавить</button> 
                </div>  	
              </div>

						</form>

						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	</section>	
	
	<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Редактировать контент</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div>
@if(count($variables))  
  @foreach($variables as $variable)						
            <form class="variable_{{ $variable->id }}" method="POST" action="#">
              <input type="hidden" name="id" value="{{ $variable->id }}" />
              <div class="row">
<!--
                <div class="col-md-3">
    							<div class="form-group">
    								<input type="text" class="form-control" id="title" name="title" value="{{ $variable->title }}" placeholder="Заголовок переменной">
    							</div>
                </div>
-->
                <div class="col-md-4">
    							<div class="form-group">
    								<input type="text" class="form-control" id="key" name="key" value="{{ $variable->key }}" placeholder="Переменная">
    							</div>
                </div>
                <div class="col-md-4">
    							<div class="form-group">
    								<input type="text" class="form-control" id="value" name="value" value="{{ $variable->value }}" placeholder="Контенте">
    							</div>
                </div>
                
                <div class="col-md-4">
                  <a href="#" class="btn mw-md btn-info save_variable" data-id="{{ $variable->id }}"><span class="fa fa-edit"></span> Сохранить</a> 
                  <a href="#" class="btn mw-md btn-danger delete_variable" data-id="{{ $variable->id }}"><span class="fa fa-remove"></span> Удалить</a> 
                </div>  	
              </div>
            </form>  
            <div class="alert alert_{{ $variable->id }}" style="display: none;"></div>
  @endforeach            
@else
  <center>У страницы нет переменных</center>
@endif              
              
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	</section>
	
		<section class="app-content">
  	<div class="row">
		  <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Помощь</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
            Чтобы создать новую переменную для страницы, её необходимо добавить в блоке <a href="#adding" class="navigate">выше</a>.<br />
            Ключ переменной - это её название, чтобы показать переменную на странице, нужно использовать следующую конструкцию: <b>{{ $construction }}</b><br /><br />
            <i>Например:</i> создаем переменную со следующими значениями: <br />
            <table class="table table-bordered table-striped">
              <tr>
<!--                 <th>Заголовок переменной</th> -->
                <th>Переменная</th>
                <th>Контент</th>
              </tr>
              
              <tr>
<!--                 <td>Моя новая переменная</td> -->
                <td>my_new_key</td>
                <td>Какое-то значение переменной</td>
              </tr>
            </table>  <br />
            Чтобы текст "Какое-то значение переменной" отобразился на странице, в код страницы нужно вставить: <b>{{ $example }}</b>
            
            <br /><br /><br />
            
            <b>Всегда</b> доступны следующие переменные (редактируются <a href="#redacting" class="navigate">здесь</a>): <br /><br />
            <table class="table table-bordered table-striped">
              <tr>
                <th>Описание</th>
                <th>Ключ переменной</th>
              </th>
              <tr>  
                <td>Заголовок страницы</td>
                <td>{{ $title }}</td>
              </tr>  
              
              <tr>  
                <td>Ключевые слова для SEO</td>
                <td>{{ $keywords }}</td>
              </tr>  
              
              <tr>  
                <td>Описание для SEO</td>
                <td>{{ $description }}</td>
              </tr>  
            </table> 
            
            
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	</section>		
	
	
	</div>
	
</main>
<!--========== END app main -->
@push('scripts')
<script>
  $('.save_variable').click(function() {
    var variable_id = $(this).attr('data-id'),
    data = $('.variable_' + variable_id).serialize();
    
    $.post("{{ route('page.variable.edit', ['template' => $template]) }}", data, function(response) { 
      var alert_class = '',
      message = '';
      if(response.result) {
        alert_class = 'alert-success';
        message = response.message;
      } else {
        alert_class = 'alert-danger';
        message = '<ul>';
        for(var error in response.errors) {
          message += '<li>' + response.errors[error] + '</li>';
        }
        message += '</ul>';
      }
      
      $('.alert_' + variable_id).removeClass('alert-success');
      $('.alert_' + variable_id).removeClass('alert-danger');
      $('.alert_' + variable_id).addClass(alert_class);
      $('.alert_' + variable_id).html(message);
      $('.alert_' + variable_id).fadeIn("slow");
    }, 'json');
    
    return false;
  });
  
  $('.delete_variable').click(function() {
    var variable_id = $(this).attr('data-id'),
    data = $('.variable_' + variable_id).serialize();
    if(confirm('Вы уверены что хотите удалить переменную?')) {
      $.post("{{ route('page.variable.delete', ['template' => $template]) }}", data, function(response) { 
        var alert_class = '',
        message = '';
        if(response.result) {
          alert_class = 'alert-success';
          message = response.message;
        } else {
          alert_class = 'alert-danger';
          message = '<ul>';
          for(var error in response.errors) {
            message += '<li>' + response.errors[error] + '</li>';
          }
          message += '</ul>';
        }
        
        $('.alert_' + variable_id).removeClass('alert-success');
        $('.alert_' + variable_id).removeClass('alert-danger');
        $('.alert_' + variable_id).addClass(alert_class);
        $('.variable_' + variable_id).fadeOut('slow');
        
        $('.alert_' + variable_id).html(message);
        $('.alert_' + variable_id).fadeIn("slow");
      }, 'json');
    }
    return false;
  });
  
  $('.delete_page').click(function() {
    if(confirm('Вы уверены что хотите удалить страницу?')) {
      $.post("{{ route('page.delete', ['template' => $template]) }}", {}, function(response) { 
        alert(response.message);
        if(response.result) document.location.href = "{{ route('admin') }}"; 
      }, 'json');
    }
    
    return false;
  });
  
  $('.navigate').click(function() {
    var section = $(this).attr('href').substr(1);
    $('html,body').animate({scrollTop: $("section[name='"+ section +"']").offset().top - 80},'slow');
    
    return false;
  });
  
</script>
@endpush  
@endsection
