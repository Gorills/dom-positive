<?php
  
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use File;

class GlobalComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {    
      $cachedViewsDirectory = app('path.storage').'/framework/views/';

      if ($handle = opendir($cachedViewsDirectory)) {

          while (false !== ($entry = readdir($handle))) {
              if(strstr($entry, '.')) continue;    
              @unlink($cachedViewsDirectory . $entry);    
          }

          closedir($handle);
      }
    }

}