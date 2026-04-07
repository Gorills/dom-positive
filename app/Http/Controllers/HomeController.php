<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Contracts\Auth\Authenticatable;

use File;
use Image;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Authenticatable $me)
    {
      return view('home', ['me' => $me]);
    }
    
    public function profile(Authenticatable $me)
    {
      return view('profile', ['me' => $me]);
    }
    
    public function profile_save(Request $request, Authenticatable $me)
    {
      $rules = [
        'email' => 'required|email',
        'password' => 'min:3',
        'password1' => 'same:password',
        'avatar' => 'image'
      ];
      
      $validation_messages = [
        'required'  => 'Адрес электронной почты обязателен для заполнения',
        'email'  => 'Адрес электронной почты должен быть введен правильно',
        'same' => 'Пароли должны совпадать',
        'min' => 'Минимальная длина пароля составляет 3 символа',
        'image' => 'В качестве аватара необходимо загружать только изображения'
      ];
      //dd($request->file('avatar'));
      $validator = Validator::make($request->all(), $rules, $validation_messages); 
      if(!$validator->fails()) {
        if($request->file('avatar')) {
          $image = $request->file('avatar');
          $filename  = time() . '.' . $image->getClientOriginalExtension();
          $path = public_path(config('settings.pathes.avatar_save') . $filename);
        
          $save_mage = Image::make($image->getRealPath())->resize(150, null, function ($constraint) {$constraint->aspectRatio();})->save($path);
          
          if($save_mage) {
              if($me->avatar) {
                File::delete(public_path(config('settings.pathes.avatar_save') . $me->avatar));
              }
              $me->avatar = $filename;
            }
          }
          if($request->has('email')) $me->email = $request->input('email');
          if($request->has('password')) $me->password = bcrypt($request->input('password'));
        
          $me->save();
          return redirect()->route('profile')->with('success', true);
        
      } else {
        return redirect()->route('profile')->with('errors', $validator->errors()->all());
      }
      
    }
}
