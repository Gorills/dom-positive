<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Панель управления</title>
	<meta name="description" content="ЖК Позитив" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" sizes="196x196" href="/static-admin/assets/images/logo.png">
	
	<link rel="stylesheet" href="/static-admin/libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static-admin//libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	<!-- build:css /assets/css/app.min.css -->
	<link rel="stylesheet" href="/static-admin/libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="/static-admin/libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="/static-admin/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="/static-admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/static-admin/assets/css/app.css">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
	
<body class="sb-left theme-danger">
<!--============= start main area -->

<!-- APP ASIDE ==========-->
<aside id="app-aside" class="app-aside left light">
	<header class="aside-header">
		<div class="animated">
			<a href="/admin" id="app-brand" class="app-brand">
				<span id="brand-icon" class="brand-icon brand-icon-mini" style="display: none;"><img src="/static/images/hand1@2x.png" style="height: 40px" /></span>
				<span id="brand-name" class="brand-icon foldable"><img src="/static/images/logo_admin.png" style="height: 40px" /></span>
			</a>
		</div>
	</header><!-- #sidebar-header -->
	
	<div class="aside-user">
		<!-- aside-user -->
		<div class="media">
			<div class="media-left">
				<div class="avatar avatar-md avatar-circle">
					<img class="img-responsive" src="{{ $me->picture }}" alt="avatar"/>
				</div><!-- .avatar -->
			</div>
			<div class="media-body">
				<div class="foldable">
					<h5>{{ $me->name }}</h5>
					<ul>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<small>Профиль</small>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu animated flipInY">
								<li>
									<a class="text-color" href="{{ route('profile') }}">
										<span class="m-r-xs"><i class="fa fa-gear"></i></span>
										<span>Настройки</span>
									</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a class="text-color" href="{{ route('logout') }}">
										<span class="m-r-xs"><i class="fa fa-power-off"></i></span>
										<span>Выход</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /aside-user -->
	</div><!-- #aside-user -->

	<div class="aside-scroll">
		<div id="aside-scroll-inner" class="aside-scroll-inner">
			<ul class="aside-menu aside-left-menu">
  			
<!--
  			<li class="menu-item">
					<a href="/" class="menu-link open">
						<span class="menu-icon"><i class="zmdi zmdi-home zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Главная</span>
					</a>
				</li> 
-->
				
<!--
  			<li class="menu-item">
					<a href="{{ route('news.index') }}" class="menu-link">
						<span class="menu-icon"><i class="fa fa-newspaper-o"></i></span>
						<span class="menu-text foldable">Новости</span>
					</a>
				</li> 
-->
  			
				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="fa fa-newspaper-o"></i></span>
						<span class="menu-text foldable">Новости</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="{{ route('news.index') }}">Добавить</a></li>
						<li><a href="{{ route('news.edit') }}">Редактировать</a></li>
					</ul>
				</li>
				
				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="fa fa-image"></i></span>
						<span class="menu-text foldable">Галерея</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="{{ route('gallery.index') }}">Добавить</a></li>
						<li><a href="{{ route('gallery.edit') }}">Редактировать</a></li>
					</ul>
				</li>
  			
				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-pages zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Страницы</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu"> 
@foreach($templates as $template)
						<li><a href="{{ route('page.edit', ['template' => $template['id']]) }}">{{ $template['name'] }}</a></li>
@endforeach
					</ul> 
				</li>
				
				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="fa fa-building"></i></span>
						<span class="menu-text foldable">Ход строительства</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="{{ route('stage.index') }}">Добавить</a></li>
						<li><a href="{{ route('stage.edit') }}">Редактировать</a></li>
					</ul>
				</li>
				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="fa fa-plus-square-o"></i></span>
						<span class="menu-text foldable">Заявки</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="{{ route('flat-reserve.index') }}">Бронь квартир</a></li>
					</ul>
				</li>

			</ul>
		</div><!-- .aside-scroll-inner -->
	</div><!-- #aside-scroll -->
</aside>
<!--========== END app aside -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="app-navbar p-l-lg p-r-md danger">
	<div id="navbar-header" class="pull-left">
		<button id="aside-fold" class="hamburger visible-lg-inline-block hamburger--arrowalt is-active js-hamburger" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<button id="aside-toggle" class="hamburger hidden-lg hamburger--spin js-hamburger" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<h5 id="page-title" class="visible-md-inline-block visible-lg-inline-block m-l-md hamburger-menu-text">Уменьшить меню</h5>
	</div>
</nav>
<!--========== END app navbar -->


@yield('content')

	
	<!-- build:js /assets/js/core.min.js -->
	<script src="/static-admin/libs/bower/jquery/dist/jquery.js"></script>
	<script src="/static-admin/libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="/static-admin/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="/static-admin/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="/static-admin/libs/bower/superfish/dist/js/hoverIntent.js"></script>
	<script src="/static-admin/libs/bower/superfish/dist/js/superfish.js"></script>
	<script src="/static-admin/libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="/static-admin/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="/static-admin/libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js /assets/js/app.min.js -->
	<script src="/static-admin/assets/js/library.js"></script>
	<script src="/static-admin/assets/js/plugins.js"></script>
	<script src="/static-admin/assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="/static-admin/libs/bower/moment/moment.js"></script>
	<script src="/static-admin/libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="/static-admin/assets/js/fullcalendar.js"></script>
@stack('scripts')	
</body>
</html>