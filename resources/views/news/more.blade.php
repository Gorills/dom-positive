@extends('news.master')

@push('header')
<header class="hero-image" role="banner" style="background-image: url({{ $news->picture }});">
</header>
@endpush

@section('content')
<div class="col-xs-12 single-content">
    <p class="meta"> 
      <i class="fa fa-clock-o"></i> {{ $news->published_at->format('d.m.Y в H:i') }}
    </p>

    <h1>{{ $news->title }}</h1>
    <p>{!! nl2br(e($news->text)) !!}</p>

</div><!-- main-content/col -->
@endsection

@push('footer')
<footer class="single">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="social">
                    <p>Поделиться</a>
                    <div class="social-links">
                        <a class="social-icon" href="post.html#" data-platform="twitter" data-message="Message about this post" data-url="http://writertheme.com/post"><i class="fa fa-twitter"></i></a>

                        <a class="social-icon" href="post.html#" data-platform="facebook" data-message="Message about this post" data-url="http://writertheme.com/post"><i class="fa fa-facebook-official"></i></a>

                        <a class="social-icon" data-platform="mail"  href="mailto:support@writertheme.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div>

    <div class="row read-another-section">
@foreach($allnews as $item)      
        <a href="{{ route('public.news.more', $item->id) }}"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
            <div class="overlay"></div>
            <img src="{{ $item->PreviewPicture }}">
            <h3 class="read-another">{{ $item->title }}</h3>
        </div></a>
@endforeach        
    </div>
</footer>
@endpush