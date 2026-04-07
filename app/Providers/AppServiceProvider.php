<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory as ViewFactory;
use File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ViewFactory $view)
    {
      $view->composer('*', 'App\Http\ViewComposers\GlobalComposer');    
      $view->composer(['home', 'profile', 'news.*', 'gallery.*', 'pages.*', 'stage.*', 'flat-reserve.*'], 'App\Http\ViewComposers\AdminComposer');

      $dir = opendir(base_path('muse'));
      while(($currentFile = readdir($dir)) !== false) {
        if (stripos($currentFile, '.html')) {
          $muse_file = base_path('muse/' . $currentFile);
          $blade_file = resource_path('/views/muse/' . str_replace('.html', '.blade.php', $currentFile));
          
          $blade_name = str_replace('.html', '.blade.php', $currentFile);
          if(file_exists($blade_file)) {
            $muse_time = filemtime($muse_file);
            $blade_time = filemtime($blade_file);
            if($muse_time > $blade_time) {
              $file_contents = file_get_contents($muse_file);
	      $file_contents = str_replace('@extends', '', $file_contents);
              $file_contents = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '{!! $svg !!}', $file_contents);
	      $file_contents = str_replace('<?xml version="1.0" encoding="utf-8"?>', '{!! $svg !!}', $file_contents);
	      file_put_contents($muse_file, $file_contents);
              File::copy($muse_file, resource_path('/views/muse/' . $blade_name));
            }
          } else File::copy($muse_file, resource_path('/views/muse/' . $blade_name));
        }
      }
      closedir($dir);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
