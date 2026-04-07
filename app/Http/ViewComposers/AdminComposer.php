<?php
  
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Pages;

class AdminComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
      $pages = Pages::orderBy('name')->get();

      $templates = [];
      $dir = opendir(resource_path('/views/muse/'));
      while(($currentFile = readdir($dir)) !== false) {
        if (stripos($currentFile, '.blade.php')) {
          $template_id = str_replace('.blade.php', '', $currentFile);
          $name = $template_id;
          foreach($pages as $page) {
            if($page->template == $template_id) $name = ($page->name) ? $page->name : $template_id;
          }
          $templates[] = ['id' => $template_id, 'name' => $name];
        }
      }
      closedir($dir);
      
      $view->with('templates', $templates); 
    }

}