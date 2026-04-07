<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Auth\Authenticatable;

use App\Http\Requests;

use App\Models\Pages;
use App\Models\Variables;

use File;
use Validator;

class PageController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
  
  public function delete(Request $request, Authenticatable $me, $template) {
    $result = ['result' => false, 'message' => 'Никакие действия не были выполнены'];
    $blade_file = resource_path('/views/muse/' . $template . '.blade.php');
    
    $page = Pages::where('template', $template)->first();
    if($page) {
      $page->delete();
      $result = ['result' => true, 'message' => 'Страница успешно удалена'];
    } 
    
    if(file_exists($blade_file)) {
      File::delete($blade_file);
      $result = ['result' => true, 'message' => 'Страница успешно удалена'];
    }
    
    return response()->json($result);
  }
    
  public function save(Request $request, Authenticatable $me, $template) {
    $page = Pages::where('template', $template)->first();
    if(!$page) {
      $page = new Pages;
    } 
    $page->template = $template;
    $page->name = $request->input('name');
    $page->title = $request->input('title');
    $page->keywords = $request->input('keywords');
    $page->description = $request->input('description');
    $result = $page->save();
    
    if($result) return redirect()->route('page.edit', ['template' => $template])->with('success', 'Страница успешно отредактирована');
    else return redirect()->route('page.edit', ['template' => $template])->with('errors', ['При сохранении произошла системная ошибка']);
  }
  
  public function edit(Request $request, Authenticatable $me, $template) {
    $page = Pages::where('template', $template)->first();
    $variables = null;
    if($page) $variables = $page->variables;
    
    return view('pages.edit', ['me' => $me, 'template' => $template, 'page' => $page, 'variables' => $variables, 'title' => '{{ $title }}', 'keywords' => '{{ $keywords }}', 'description' => '{{ $description }}', 'construction' => '{{ $nazvanie_peremennoy }}', 'example' => '{{ $my_new_key }}']);
  }
  
  public function variable_add(Request $request, Authenticatable $me, $template) {
    $page = Pages::where('template', $template)->first();
    if(!$page) {
      $page = new Pages;
      $page->template = $template;
      $page->save();
    } 

    $rules = [
      'key' => 'required'
    ];
    
    $validation_messages = [
      'required' => 'Поле :attribute должно быть заполнено'
    ];
    
    $niceNames = [
      'key' => '<b>«Ключ переменной»</b>'
    ];
    
    $validator = Validator::make($request->all(), $rules, $validation_messages); 
    $validator->setAttributeNames($niceNames); 
    if(!$validator->fails()) {
      $variable = new Variables;
      $variable->page_id = $page->id;
      $variable->title = $request->input('title');
      $variable->key = $request->input('key');
      $variable->value = $request->input('value');
      $result = $variable->save();
      if($result) return redirect()->route('page.edit', ['template' => $template])->with('success', 'Переменная успешно добавлена');
      else return redirect()->route('page.edit', ['template' => $template])->with('errors', ['При сохранении произошла системная ошибка']);
    } else 
      return redirect()->route('page.edit', ['template' => $template])->with('errors', $validator->errors()->all());
    
  }
  
  public function variable_edit(Request $request, Authenticatable $me, $template) {
    $result = ['result' => false, 'errors' => ['Системная ошибка']];
    $rules = [
      'key' => 'required'
    ];
    
    $validation_messages = [
      'required' => 'Поле :attribute должно быть заполнено'
    ];
    
    $niceNames = [
      'key' => '<b>«Ключ переменной»</b>'
    ];
    
    $validator = Validator::make($request->all(), $rules, $validation_messages); 
    $validator->setAttributeNames($niceNames); 
    if(!$validator->fails()) {
      $id = $request->input('id');
      $variable = Variables::find($id);
      if(!$variable) $result = ['result' => false, 'errors' => ['Не найдено переменной с таким идентификатором']];
      else {
        $variable->title = $request->input('title');
        $variable->key = $request->input('key');
        $variable->value = $request->input('value');
        $result = $variable->save();
        
        if($result) $result = ['result' => true, 'message' => 'Переменная «' . $variable->key . '» успешно обновлена'];
        else $result = ['result' => false, 'errors' => ['При обновлении произошла системная ошибка']];
      }
    } else {
      $result = ['result' => false, 'errors' => $validator->errors()->all()];
    }
    
    return response()->json($result);
  }  
  
  public function variable_delete(Request $request, Authenticatable $me, $template) {
    $result = ['result' => false, 'errors' => ['Системная ошибка']];
    $id = $request->input('id');
    
    $variable = Variables::find($id);
    if(!$variable) $result = ['result' => false, 'errors' => ['Не найдено переменной с таким идентификатором']];
    else {
      $result = $variable->delete();
      
      if($result) $result = ['result' => true, 'message' => 'Переменная «' . $variable->key . '» успешно удалена'];
      else $result = ['result' => false, 'errors' => ['При удалении произошла системная ошибка']];
    }
    
    return response()->json($result);
  }  
}
