<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Панель управления</title>
	<meta name="description" content="ЖК Позитив" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" sizes="196x196" href="/assets/images/logo.png">
	
	<link rel="stylesheet" href="/static-admin/libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static-admin/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="/static-admin/libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="/static-admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/static-admin/assets/css/app.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="/">
<!-- 				<span><img src="/static/images/hand1@2x.png" style="height: 40px" /></span> -->
				<span><img src="/static/images/logo_admin.png" style="height: 60px" /></span>
			</a>
		</div><!-- logo -->
		@yield('content')


	</div><!-- .simple-page-wrap -->
</body>
</html>