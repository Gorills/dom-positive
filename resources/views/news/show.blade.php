@extends('news.master')

@section('content')
<section class="sidebar col-md-5 col-sm-12" style="background-image: url(/static/img/default-sidebar.jpg);">


    <div class="site-info">
        <div class="primary-info">
            <h1>ЖК «Румянцево»</h1>
            <p>Новостной раздел</p>
        </div>
    </div>
</section>
<section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

    <div class="home-page-posts animated fadeIn ">
@foreach($news as $item)
        <article class="post">
            <div class="post-preview col-xs-10  no-gutter">
                <h2><a href="{{ route('public.news.more', $item->id) }}">{{ $item->title }}</a></h2>

                <p>{{ str_limit($item->text, 200) }} </p>

                <p class="meta">
                    <i class="fa fa-clock-o"></i> {{ $item->published_at->format('d.m.Y в H:i') }}
                </p>
            </div>
        </article>
@endforeach        

    </div><!-- Home page posts -->
    <footer class="split-footer">
        <a href="/">© ЖК «Румянцево» {{ date('Y') }} год.</a>
    </footer>

</section>
@endsection