<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\News;

use Carbon\Carbon;

use Mail;

class NewsPublicController extends Controller
{
  public function index() { 
    return view('news.show', ['news' => News::all()]);
  }
  
  public function more($news_id) { 
    $news = News::find($news_id);
    if(!$news || !$news->id) return redirect()->route('public.news.index')->with('errors', ['Не найдено новости с таким идентификатором']);
    return view('news.more', ['news' => $news, 'allnews' => News::paginate(6)]);
  }
  
  public function email() { 
    dd(Mail::raw('Привет!', function ($message) {
      $message->from('hello@plinskiy.ru', 'Тестовое письмо');

      $message->to('pavel@plinskiy.ru');
    }));
  }
  
  
}
