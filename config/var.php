<?



   // setting
   $ver = 1.030953;


   // 
   $site_set = [
      'menu' => true,
      'search' => true,
      // 'swiper' => false,
      // 'plyr' => false,
      // 'aos' => false,
	];
   $scss = ['norm', 'main'];
   $sjs = ['norm', 'main'];
   $css = [];
   $js = [];
   $code = rand(1000, 9999);



   // lang
   $lang = 'ru';
   if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
   if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];

   // lang
   $branch = 1; if (@$user_right['branch_id']) $branch = $user_right['branch_id'];
   if (@$user_right['positions_id'] != 4) {
      if (isset($_GET['branch'])) if ($_GET['branch'] == 1 || $_GET['branch'] == 2) $_SESSION['branch'] = $_GET['branch'];
      if (isset($_SESSION['branch'])) $branch = $_SESSION['branch'];
   }

   $view_pr = null;
   if (isset($_GET['view_pr'])) $_SESSION['view_pr'] = $_GET['view_pr'];
   if (isset($_SESSION['view_pr']) && $_SESSION['view_pr'] == 'list') $view_pr = 2; else $view_pr = null;


   // date - time
   $date = date("Y-m-d", time());
   $time = date("H:i:s", time());
   $datetime = date('Y-m-d H:i:s', time());

   if ($time > "00:00:00" && $time < "06:00:00") {
      $start_cdate = date('Y-m-d 06:00:00', strtotime("$date -1 day"));
      $end_cdate = date("Y-m-d 06:00:00", strtotime("$start_cdate +1 day"));
   } else {
      $start_cdate = date('Y-m-d 06:00:00');
      $end_cdate = date("Y-m-d 06:00:00", strtotime("$start_cdate +1 day"));
   }


   // url
	$url = $url_full = $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];


   // 
	$token = "1581082911:AAEKW20w_-5V0Wx9tzhyThV2pjCgZtCjyc8";
	// $chat_id = "-1002461390168";