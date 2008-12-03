<?php
/*
Plugin Name: Nuconomy Insights
Plugin URI: http://nuconomy.com/
Description: This plugin provides integration with the Nuconomy Insights service. First you need to <a href="options-general.php?page=nuconomy.php">register here</a>, and then you will be able to see the stats <a href="admin.php?page=nuconomy-insights/nuconomy.php">here</a>.
Author: Nuconomy LTD
Version: 1.48
Author URI: http://nuconomy.com/
*/

$nucon_is_mu = false;
if (strstr(__FILE__,MUPLUGINDIR)) {
  $nucon_is_mu = true;
}

define(NUCONOMY_REGISTER,81);
define(NUCONOMY_LOGIN,82);
define(NUCONOMY_NEW_POST,5);
define(NUCONOMY_NEW_PAGE,679);
define(NUCONOMY_DELETE_POST,90);
define(NUCONOMY_DELETE_PAGE,681);
define(NUCONOMY_UPDATE_POST,88);
define(NUCONOMY_UPDATE_PAGE,680);
define(NUCONOMY_CHANGE_STATUS_POST,89);
define(NUCONOMY_CHANGE_STATUS_PAGE,682);
define(NUCONOMY_COMMENT,3);
define(NUCONOMY_PINGBACK,60);
define(NUCONOMY_FILE_UPLOAD,83);
define(NUCONOMY_THEME_CHANGE,85);
define(NUCONOMY_WIDGET_CHANGE,86);
define(NUCONOMY_PLUGIN_CHANGE,87);
define(NUCONOMY_NEW_RSS_ITEM,148);
define(NUCONOMY_MU_BLOG_CREATE,149);

define(NUCONOMY_POST_CONTENT,95);
define(NUCONOMY_PAGE_CONTENT,94);
define(NUCONOMY_HOME_CONTENT,96);
define(NUCONOMY_SEARCH_CONTENT,99);
define(NUCONOMY_TAG_CONTENT,97);
define(NUCONOMY_ARCHIVE_CONTENT,98);
define(NUCONOMY_CATEGORY_CONTENT,97);
define(NUCONOMY_404_CONTENT,100);
define(NUCONOMY_DEFAULT_CONTENT_TYPE,0);

define(NUCONOMY_HIT,1);
define(NUCONOMY_RSS_HIT,678);
define(NUCONOMY_PAGE_HIT,683);
define(NUCONOMY_POST_HIT,96);
define(NUCONOMY_SEARCH_HIT,684);

define(NUCONOMY_VERSION,"1.48");

define(NUCONOMY_ENROLLMENT,"http://ws.nuconomy.com/Enrollment.asmx");

define(NUCONOMY_RSS_PARAM,"nucrss");
define(NUCONOMY_RSS_COOKIE,"nucrss");

define(NUCONOMY_STR_CONFIG,"Nuconomy Insights Configuration");
define(NUCONOMY_STR_INSIGHTS,"Nuconomy Insights");
define(NUCONOMY_STR_INSIGHTS_SETTINGS,"Settings");
define(NUCONOMY_STR_INSIGHTS_STUDIO,"Nuconomy Insights Studio");
define(NUCONOMY_STR_INSIGHTS_STUDIO_TITLE,"Studio");
define(NUCONOMY_STR_AUTHENTICATION,"Your e-mail was authenticated. Next you will recieve an e-mail with your username and password.");
define(NUCONOMY_STR_FAILURE,'Failure: The Nuconomy server is unavailable, please try again in a few minutes, by clicking <a href="%s">this url</a>');
define(NUCONOMY_STR_REGISTRATION_SUCCESS,'Your account with Nuconomy has been successfully activated and the process of gathering of your blog\'s statistics has begun.');
define(NUCONOMY_STR_ENROLLMENT_SUCCESS,'The enrollment request was successfully sent to nuconomy. Next you will recieve an e-mail with instructions on how to authenticate your request.');
define(NUCONOMY_STR_ERROR,'Something bad has happend, please try again in a few minutes.');
define(NUCONOMY_STR_RESTART_CONFIRM,'Are you sure you want to reset the activation process?');
define(NUCONOMY_STR_NOT_REGISTERED,'Nuconomy Insights Plugin:');
define(NUCONOMY_STR_MUST_REGISTER,'You must <a href="%1$s">complete the activation process</a> in order to use the Nuconomy insights plugin.');
define(NUCONOMY_STR_PRE23_LATER,'The Nuconomy Insights WordPress plugin only supports versions 2.3 or later of WordPress.');
define(NUCONOMY_STR_23_REGISTER,'To register your blog, please first upgrade your WordPress installation to a supported version, then begin the activation process again.');
define(NUCONOMY_STR_START_ENROLMENT,'During the activation process you will claim your blog in our system. Please make sure that you use a valid email.');
define(NUCONOMY_STR_BYTHEEND_ENROLMENT,'This email will be used to identify you in case you need to reactivate the plugin.');
define(NUCONOMY_STR_THE_PROCESS_CONSIST,'The process consists of the following steps:');
define(NUCONOMY_STR_FILL_THE_FORM,'Fill the form below and submit it.');
define(NUCONOMY_STR_REC_NOTIFICATION,'You will recieve a verification e-mail. Follow the instructions to verify your request.');
define(NUCONOMY_STR_GERBIL_APPROVE,'Once your blog is approved, you will recive another e-mail containing activation instructions.');
define(NUCONOMY_STR_STEP1,'Step 1 out of 2 has completed successfully.');
define(NUCONOMY_STR_STEP1_REQUEST_SENT,'A request for an account has been sent to NuConomy and you should be receiving an e-mail soon to verify your email address.');
define(NUCONOMY_STR_STEP1_REPLY_NOT_REC,'If you do not receive an email, or wish to use a different email address than the one specified, please click on the Reset Request button and begin your request again.');
define(NUCONOMY_STR_RESET_BUT,'Reset Request');
define(NUCONOMY_STR_STEP2,'Step 2 out of 2 has completed successfully.');
define(NUCONOMY_STR_STEP2_REC,'Your request has been received by NuConomy and is now waiting for approval.');
define(NUCONOMY_STR_STEP2_GERB,'A reply should be arriving very soon...');
define(NUCONOMY_STR_STEP2_REFRESH,'Don\'t want to wait for the automatic process to query the approval status?');
define(NUCONOMY_STR_STEP2_REFRESH_LINK,'Follow this link to refresh the status manually.');
define(NUCONOMY_STR_RESET,'If you wish to reset your registration, please click on the Reset Request button and begin your registration again.');
define(NUCONOMY_STR_STEP3,'Nuconomy Insights is activated');
define(NUCONOMY_STR_ACTIVE,'Nothing to do here.');
if (!$nucon_is_mu)
  define(NUCONOMY_STR_DASHBOARD_LINK,'You can view your site\'s insights under the <a href="admin.php?page=nuconomy-insights/nuconomy.php"><em>Nuconomy Insights</em></a> dashboard tab.');
else
  define(NUCONOMY_STR_DASHBOARD_LINK,'You can view your site\'s insights under the <a href="admin.php?page=nuconomy-insights/admin.php"><em>Nuconomy Insights</em></a> dashboard tab.');

define(NUCONOMY_STR_NAME,'Your name:');
define(NUCONOMY_STR_EMAIL,'Your e-mail:');
define(NUCONOMY_STR_BLOGURL,'Your blog url:');
define(NUCONOMY_STR_ENABLESPECIALCONFIGTITLE,'Special Settings');
define(NUCONOMY_STR_ENABLEVIDEO,'Enable YouTube player tracking');
define(NUCONOMY_STR_ENABLEADTRACKING,'Enable Ad tracking');

define(NUCONOMY_STR_DASHBOARD_WIDGET_TITLE,'Nuconomy stats');

define(NUCONOMY_STR_NO_FOOTER_FILE,'Your theme does not use a standard WordPress footer.php file. Please make sure the wp_footer action is called by your theme.');
define(NUCONOMY_STR_NO_WPFOOTER_CALL,'Your theme\'s footer.php is missing a call the wp_footer function. Please add the following to your footer.php: <?php wp_footer(); ?>');

/* if we came from rss, set a cookie and redirect to the original page */

if (isset($_GET[NUCONOMY_RSS_PARAM])) {
   setcookie(NUCONOMY_RSS_COOKIE,1,time()+30, COOKIEPATH, COOKIE_DOMAIN);
   header( 'Location: ' . remove_query_arg(array(NUCONOMY_RSS_PARAM), stripslashes($_SERVER['REQUEST_URI'])));
   exit();
}

function nucon_user_agent() {
  global $nucon_is_mu, $wpmu_version, $wp_version;
  
  if ($nucon_is_mu) {
    $nucon_agent = "WordPress MU $wpmu_version/".NUCONOMY_VERSION." (nuconomy)";
  } else {
    $nucon_agent = "WordPress $wp_version/".NUCONOMY_VERSION." (nuconomy)";
  }
  
  return $nucon_agent;
}

function nucon_get_project_client_token() {
  global $nucon_is_mu;
  
  if ($nucon_is_mu)
    return get_site_option('nuconomy_projecttoken');
  else
    return get_option('nuconomy_projecttoken');
}

function nucon_set_project_client_token($token) {
  global $nucon_is_mu;
  
  if ($nucon_is_mu) {
    update_site_option('nuconomy_projecttoken', trim($token));
    update_site_option('nuconomy_authcode','');
    update_site_option('nuconomy_step','');
  } else {
    update_option('nuconomy_projecttoken', trim($token));
    delete_option('nuconomy_authcode');
    delete_option('nuconomy_step');
  }
}

function nucon_restart_status() {
  global $nucon_is_mu;

  if ($nucon_is_mu) {
    update_site_option('nuconomy_projecttoken', '');
    update_site_option('nuconomy_project_server_token', '');
    update_site_option('nuconomy_authcode','');
    update_site_option('nuconomy_step','');
  } else {
    delete_option('nuconomy_projecttoken');
    delete_option('nuconomy_project_server_token');
    delete_option('nuconomy_authcode');
    delete_option('nuconomy_step');
  }
}
function nucon_get_project_server_token() {
  global $nucon_is_mu;
  
  if ($nucon_is_mu)
    $ret_val=get_site_option('nuconomy_project_server_token');
  else
    $ret_val=get_option('nuconomy_project_server_token');
  
  if (!$ret_val) {
    $ret_val = nucon_get_project_client_token();
    if ($ret_val)
      nucon_set_project_server_token($ret_val);
  }
  
  return $ret_val;
}

function nucon_set_project_server_token($token) {
  global $nucon_is_mu;
  
  if ($nucon_is_mu)
    update_site_option('nuconomy_project_server_token', trim($token));
  else
    update_option('nuconomy_project_server_token', trim($token));
}

function nucon_get_option($option) {
  global $nucon_is_mu;
  $options = array('vers' => NUCONOMY_VERSION, 'videotrackingenabled' => 1, 'adtrackingenabled' => 1);
  
  if ($nucon_is_mu) {
    $ret_val=get_site_option($option);
    if ($ret_val=='') {
      $ret_val = false;      
    }
  } else
    $ret_val=get_option($option);
  

  if ($ret_val === false) {
      if (isset($options[$option])) {
        nucon_set_option($option,$options[$option]);
        $ret_val = $options[$option];
      }
  }
  return $ret_val;
}

function nucon_set_option($option,$code) {
  global $nucon_is_mu;
  
  if ($nucon_is_mu)
    update_site_option($option, trim($code));
  else
    update_option($option, trim($code));
}

function nucon_web_service($viewer,$owner,$url,$eventid,$data) {
    
    $project = nucon_get_project_server_token();
    if ($project) {
        require_once( ABSPATH . 'wp-includes/class-snoopy.php');
    
    $viewer=urlencode($viewer);
    $owner=urlencode($owner);
    $data=urlencode($data);
    $url=urlencode(rtrim($url,'/'));
    $genDim5 = '';
    if ($nucon_is_mu)
      $genDim5 = '&genDim5='.urlencode(nucon_get_mu_blogid());
      
    $nuccoo_Cookie =  $_COOKIE['nuccoo'];
    $nucuse_Cookie  =  $_COOKIE['nucuse'];
	$client = new Snoopy();
		
	$client->agent = nucon_user_agent();
	$desturl = "http://services.nuconomy.com/i.nsi?" .
		                 "projTok=$project" . 
		                 "&methId=logs" . 
		                 "&endus=$viewer" . 
		                 "&ownus=$owner" .
		                 "&crtId=$eventid" .
		                 "&numVa=1" .
		                 "&srcId=$url" .
						 "&ses=$nuccoo_Cookie" .
					     "&nucuse=$nucuse_Cookie" .
					     $genDim5 .
                         "";

	@$client->fetch( $desturl);
	}
}
    
function nucon_web_service_tags($author,$url,$tags,$title) {
    
    $project = nucon_get_project_server_token();
    if ($project) {
        require_once( ABSPATH . 'wp-includes/class-snoopy.php');
	    $author=urlencode($author);
        $url=urlencode(rtrim($url,'/'));
	    $tags=urlencode($tags);
	    $title=urlencode($title);
		$client = new Snoopy();
		$client->agent = nucon_user_agent();
		$desturl = "http://services.nuconomy.com/i.nsi?" .
		                 "projTok=$project" . 
		                 "&methId=setcntmetadatas" . 
		                 "&ownus=$author" . 
		                 "&cntTitle=$title" .
		                 "&srcid=$url" .
		                 "&tags=$tags" .
                         "";
		@$client->fetch( $desturl);
    }
}

function nucon_is_home() {
    global $wp_the_query;
    
    return $wp_the_query->is_home;
}

function nucon_is_page() {
    global $wp_the_query;
    
    return $wp_the_query->is_page;
}

function nucon_is_single() {
    global $wp_the_query;
    
    return $wp_the_query->is_single;
}

function nucon_is_search() {
    global $wp_the_query;
    
    return $wp_the_query->is_search;
}

function nucon_is_tag() {
    global $wp_the_query;
    
    return $wp_the_query->is_tag;
}

function nucon_is_category() {
    global $wp_the_query;
    
    return $wp_the_query->is_category;
}

function nucon_is_404() {
    global $wp_the_query;
    
    return $wp_the_query->is_404 || (count($wp_the_query->posts) == 0);
}

function nucon_is_archive() {
    global $wp_the_query;
    
    return $wp_the_query->is_archive;
}

function nucon_is_comments_popup() {
    global $wp_the_query;
    
    return $wp_the_query->is_comments_popup;
}

function nucon_get_content_type() {
    global $wp_the_query;
    
    // wp is too selective about what cuases a 404 page. 
    // for our perpuse a URI in the pattern matching single post or page with no 
    // content is treated like a 404
    
    $noposts = false;
    if (count($wp_the_query->posts) == 0)
      $noposts = true;
      
	if (nucon_is_home())
		return NUCONOMY_HOME_CONTENT;
	if (nucon_is_page() && !$noposts)
		return NUCONOMY_PAGE_CONTENT;
	if (nucon_is_single() && !$noposts)
		return NUCONOMY_POST_CONTENT;
	if (nucon_is_search())
		return NUCONOMY_SEARCH_CONTENT;
	if (nucon_is_tag() && !$noposts)
		return NUCONOMY_TAG_CONTENT;
	if (nucon_is_category() && !$noposts)
		return NUCONOMY_TAG_CONTENT;
	if ($noposts || nucon_is_404())
		return NUCONOMY_404_CONTENT;
	if (nucon_is_archive())
		return NUCONOMY_ARCHIVE_CONTENT;
    
	return NUCONOMY_DEFAULT_CONTENT_TYPE;
}

function nucon_get_hit_type() {
	if (nucon_is_page())
		return NUCONOMY_PAGE_HIT;
	if (nucon_is_single())
		return NUCONOMY_POST_HIT;
	return NUCONOMY_HIT;
}

function nucon_get_tags() {
  global $nucon_post_tags;

  return $nucon_post_tags;
}

function nucon_get_title() {
  global $nucon_post_title;

  return $nucon_post_title;
}

// return the uniw blog id of a mu blog - the subdomain or the root subdirectory
function nucon_get_mu_blogid() {
  global $current_site;
  
  $surl = get_option("siteurl");
  $surl = substr($surl,7);
  if ($surl == $current_site->domain) {
      $surl = '';
  } else if( constant( "VHOST" ) == 'no' ) { 
      $t = explode('/',$surl);
      $surl = $t[count($t) - 1];
  } else {
      $t = explode('.',$surl);
      $surl = $t[0];
  }
  return $surl;
}

function nucon_js_escape($s) {

  return str_replace('"','\"',$s);
}

function nucon_addjs() {
    global $wp_query;
    global $current_user;
    global $nucon_is_mu;
    global $current_site;
    global $nucon_youtube_params;

    $project = nucon_get_project_client_token();
    if ($project) { // dont add js when we didnt  finish registretion
      echo "\n";
      echo '<!-- Start of script generated by Nuconomy WP Plugin '.NUCONOMY_VERSION.' -->';
      echo "\n";
      echo '<script type="text/javascript">'."\n";
	    echo "NUCONOMY.ProjectToken = \"" . $project . "\";\n";
		if (nucon_get_option('adtrackingenabled') == 1) echo "NUCONOMY.AdsTracker.Track();\n"; 
	    $user=$current_user->user_login;
	    $page_owner="";
	    $page="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
      $page=rtrim($page,"/");
      if (nucon_is_search())
        $page = 'Search';
      $page = preg_replace('/#[a-zA-Z0-9\-]*/','',$page);
	    if ( nucon_is_single() || nucon_is_page() || nucon_is_comments_popup()) {
	        $page_owner = get_userdata($wp_query->post->post_author);
	        $page_owner = $page_owner->user_login;
	    }
       
      if ($nucon_is_mu)
        $siteurl = $current_site->domain;
      else
        $siteurl = get_option("siteurl");

?>
<?php if (nucon_is_single()) { // its pointless to check the cookie for any other type of page ?>
<?php } ?>
NUCONOMY.ContentType = <?php echo nucon_get_content_type();?>;
<?php
            if (nucon_is_search())
                $title = 'Search';
            else if (nucon_is_home())
				$title = 'Home page';
		    else if (nucon_is_category())
                $title = single_cat_title('',false);
            else if (nucon_is_tag())
                $title = single_tag_title('',false);
            else if (nucon_is_404())
				$title = 'Page not found (404)';
            else
                $title = nucon_get_title();
        ?>
NUCONOMY.ContentTitle = "<?php echo nucon_js_escape($title); ?>";
NUCONOMY.Tags = "<?php echo nucon_js_escape(nucon_get_tags());?>";
<?php 
    if ($nucon_is_mu) {
        echo "NUCONOMY.ActivityParameter5 = '".nucon_get_mu_blogid()."';\n";
    }
?>
<?php if (nucon_is_single()) { // its pointless to check the cookie for any other type of page ?>
        if (hasNucRSSCookie('<?php echo NUCONOMY_RSS_COOKIE; ?>')) {
<?php echo 'NUCONOMY.Logger.LogActivity("'.nucon_js_escape($user).'","'.nucon_js_escape($page_owner).'","'.nucon_js_escape($page).'","'.NUCONOMY_RSS_HIT.'");';?>
        } 
<?php } ?>
<?php 
    echo 'NUCONOMY.Logger.LogActivity("'.nucon_js_escape($user).'","'.nucon_js_escape($page_owner).'","'.nucon_js_escape($page).'","'.nucon_get_hit_type().'");';
?>

<?php
      $nucon_search_results = nucon_get_search_results();
	  foreach ($nucon_search_results as $v) {
	      echo 'NUCONOMY.ContentType = "' . $v['type']."\";\n";
	      echo 'NUCONOMY.ContentTitle = "'.nucon_js_escape($v['title'])."\";\n";
	      echo 'NUCONOMY.Tags = "'.nucon_js_escape($v['tags'])."\";\n";
	      $url = $v['url'];
	      $page_owner=$v['owner'];
		  echo 'NUCONOMY.Logger.LogActivity("'.nucon_js_escape($user).'","'.nucon_js_escape($page_owner).'","'.nucon_js_escape($url).'","'.NUCONOMY_SEARCH_HIT.'");'."\n";
	  }
      echo "\n</script>\n";
      echo '<!-- End of script generated by Nuconomy WP Plugin '.NUCONOMY_VERSION.' -->';
      echo "\n";
	}
}

function nucon_is_success ($sc) {
	return $sc >= 200 && $sc < 300;
}

function nucon_get_approve() {
   global $nucon_is_mu, $wpmu_version, $wp_version;
   
  	nucon_load_nusoap();
    $client = new soapclientNusoap(NUCONOMY_ENROLLMENT);
            
  	$submit_vars["domain"] = urlencode(get_option("siteurl"));
	  $submit_vars["authorizationToken"] = urlencode($_GET['authtok']);
	  $submit_vars["contactEmail"] = urlencode($_GET['contactEmail']);
    if ($nucon_is_mu) {
      $wordpress_ver = "WordPress MU $wpmu_version";
    } else {
      $wordpress_ver = "WordPress $wp_version";
    }

	  $submit_vars["platformVersion"] = $wordpress_ver;
	  $submit_vars["pluginVersion"] = NUCONOMY_VERSION;

    nucon_set_option('nuconomy_authcode',$_GET['authtok']);
    $result = $client->call('RequestAutomaticApproval', $submit_vars,'http://services.nuconomy.com/','http://services.nuconomy.com/RequestAutomaticApproval', false, null, 'rpc', 'literal');
    if ($client->getError()) {
      return false;
      }
      
    nucon_set_option('nuconomy_step',2);
    update_option('nuconomy_completetoken',$_GET['authtok']);
    update_option('nuconomy_completemail',$_GET['contactEmail']);
    wp_schedule_event(time(), 'hourly', 'nucon_enrollment_event');
    nucon_complete_enrollment_handler();
    return true;
}

function nucon_get_codes($tok,$mail) {
   global $nucon_is_mu;

    nucon_load_nusoap();
    $client = new soapclientNusoap(NUCONOMY_ENROLLMENT);
            
  	$submit_vars["domain"] = urlencode(get_option("siteurl"));
	  $submit_vars["authorizationToken"] = urlencode($tok);
	  $submit_vars["contactEmail"] = urlencode($mail);

    $result = $client->call('CompleteAutomaticRegistration', $submit_vars,'http://services.nuconomy.com/','http://services.nuconomy.com/CompleteAutomaticRegistration', false, null, 'rpc', 'literal');
    if ($client->getError()) {
      return false;
    }
    $tokens = $result;
    $tokens = explode(";",$tokens);
    $t= explode(">",$tokens[0]);
    nucon_set_project_client_token($t[count($t) - 1]);

    $t = explode("<",$tokens[1]);
    nucon_set_project_server_token($t[0]);
    delete_option('nuconomy_completetoken');
    delete_option('nuconomy_completemail');
    wp_clear_scheduled_hook('nucon_enrollment_event');

    return true;
}

function nucon_send_enrolment($email,$name) {
    global $nucon_is_mu;

    nucon_load_nusoap();
    $client = new soapclientNusoap(NUCONOMY_ENROLLMENT);

    $submit_vars["domain"] = urlencode(get_option("siteurl"));
	  $submit_vars["contactEmail"] = urlencode($email);
	  $submit_vars["contactName"] = urlencode($name);
	  $submit_vars["campaign"] = "WordPress";
    if ($nucon_is_mu) {
	    $submit_vars["enrollmentType"] = "WordPressMU";
	  } else {
      $submit_vars["enrollmentType"] = "WordPress";
	  $submit_vars["pluginVersion"] = NUCONOMY_VERSION;	  
    }
	
    $result = $client->call('RegisterNewSite', $submit_vars,'http://services.nuconomy.com/','http://services.nuconomy.com/RegisterNewSite', false, null, 'rpc', 'literal');
      $retval = !$client->getError();

    if ($retval)
      nucon_set_option('nuconomy_step',1);
    return $retval;
}

function nuconadd_config_page() {
  global $nucon_is_mu;

  if ($nucon_is_mu) {
	 if (is_site_admin()) {
		if (nucon_get_project_client_token() && !isset($_POST['nucon_reset']) ) {
			add_menu_page(NUCONOMY_STR_INSIGHTS, NUCONOMY_STR_INSIGHTS, 10, basename(__FILE__),'nucon_insight_frame');
			add_submenu_page(basename(__FILE__), NUCONOMY_STR_INSIGHTS, NUCONOMY_STR_INSIGHTS_STUDIO_TITLE, 10, basename(__FILE__), 'nucon_insight_frame');
			add_submenu_page(basename(__FILE__), NUCONOMY_STR_CONFIG, NUCONOMY_STR_INSIGHTS_SETTINGS, 10, 'nuconomy-insights/admin.php', 'nucon_config_page');
		} else {
			add_menu_page(NUCONOMY_STR_INSIGHTS, NUCONOMY_STR_INSIGHTS, 10, 'nuconomy-insights/admin.php','nucon_config_page');
			add_submenu_page(basename(__FILE__), NUCONOMY_STR_CONFIG, NUCONOMY_STR_INSIGHTS_SETTINGS, 10, 'nuconomy-insights/admin.php', 'nucon_config_page');
		}
	 }
  } else {
    load_plugin_textdomain('nuconomy', 'wp-content/plugins/nuconomy-insights');
    if (nucon_get_project_client_token() && !isset($_POST['nucon_reset']) ) {
        add_menu_page(NUCONOMY_STR_INSIGHTS, NUCONOMY_STR_INSIGHTS, 10, __FILE__,'nucon_insight_frame');
	    add_submenu_page(__FILE__, NUCONOMY_STR_INSIGHTS, NUCONOMY_STR_INSIGHTS_STUDIO_TITLE, 10, __FILE__, 'nucon_insight_frame');
	    add_submenu_page(__FILE__, NUCONOMY_STR_CONFIG, NUCONOMY_STR_INSIGHTS_SETTINGS, 10, 'nuconomy-insights/admin.php', 'nucon_config_page');
	} else {
        add_menu_page(NUCONOMY_STR_INSIGHTS, NUCONOMY_STR_INSIGHTS, 10, 'nuconomy-insights/admin.php','nucon_config_page');
	    add_submenu_page('nuconomy-insights/admin.php', NUCONOMY_STR_CONFIG, NUCONOMY_STR_INSIGHTS_SETTINGS, 10, 'nuconomy-insights/admin.php', 'nucon_config_page');
	}
	add_submenu_page('options-general.php', NUCONOMY_STR_CONFIG, NUCONOMY_STR_INSIGHTS, 10, basename(__FILE__), 'nucon_config_page');
  }
}

function nucon_insight_frame() {
  ?>
    <iframe id="nuconframe" src="https://studio.nuconomy.com" style="width:100%; height:1550px; frameborder:0; scrolling:no;"/>
  <?php
}

function nucon_config_page() {
  global $wp_version, $nucon_is_mu;
  
  if ( isset($_GET['authtok']) && (nucon_get_option('nuconomy_step') == '1')) {
      if (!current_user_can('manage_options')) die(__('You should log on as administrator.'));
      if (nucon_get_approve()) {
        nucon_messgage(NUCONOMY_STR_AUTHENTICATION);
        die();
      } else {
        nucon_messgage(sprintf(NUCONOMY_STR_FAILURE,$_SERVER['REQUEST_URI']));
        die();
      }
 } else if (isset($_GET['noc_manrefresh']) && (nucon_get_option('nuconomy_step') == '2') && !isset($_POST['nucon_reset'])) {
      if (!current_user_can('manage_options')) die(__('You should log on as administrator.'));
      nucon_complete_enrollment_handler();
      if (nucon_get_project_server_token()) {
       nucon_messgage(NUCONOMY_STR_REGISTRATION_SUCCESS );
       die();
      } 
  } else if (isset($_POST['nucon_reset']) && ($_POST['nucon_reset'] == 1)) {
	  nucon_restart_status();
  } else if (isset($_POST['email'])) {
	
    if (nucon_send_enrolment($_POST['email'],$_POST['name'])) {
      nucon_messgage(NUCONOMY_STR_ENROLLMENT_SUCCESS );
      die();
    } else {
      nucon_messgage(NUCONOMY_STR_ERROR);
    }
  } else if (isset($_POST['nucon-submit'])) {
    $enableyoutube = isset($_POST['nucon_videomonitoring']) ? 1 : 0;
	$enableadtracking = isset($_POST['nucon_admonitoring']) ? 1 : 0;
    nucon_set_option('videotrackingenabled',$enableyoutube);
	nucon_set_option('adtrackingenabled',$enableadtracking);
  }
  $opt = nucon_get_project_client_token();
?>
<script>
	function nucon_reset_tokens() {
		if (confirm('<?php echo NUCONOMY_STR_RESTART_CONFIRM; ?>')) {
			document.getElementById('nucon_reset').value=1;
			document.getElementById('nucon_conf_submit').click();
		}
    }
</script>
<div class="wrap">
  <h2>
    <?php echo NUCONOMY_STR_INSIGHTS; ?>
  </h2>
  <?php if ($wp_version < 2.3) { ?>
  <p>
    <?php echo NUCONOMY_STR_PRE23_LATER; ?>
    <br />
    <?php echo NUCONOMY_STR_23_REGISTER; ?>
  </p>
  <?php return; ?>
  <?php } ?>
  <div id="nucon-textual">
  <?php if (!$opt) { ?>
  <?php if (!nucon_get_option('nuconomy_step')) {?>
  <?php 
     $wfstat = nucon_check_wpfooter();
     if (!$nucon_is_mu && ($wfstat != 0)) {
         if ($wfstat == 1)
             echo '<div id="message" class="updated fade"><p><b>'.NUCONOMY_STR_NO_FOOTER_FILE.'</b></p></div>';
         else {
             echo '<div id="message" class="updated fade"><p><b>'.NUCONOMY_STR_NO_WPFOOTER_CALL.'</b></p></div>';
             echo '</div>';
             return;
         }    
     }
  ?>
  <p>
    <?php echo NUCONOMY_STR_START_ENROLMENT; ?>
    <br/>
    <?php echo NUCONOMY_STR_BYTHEEND_ENROLMENT; ?>
  </p>
  <p>
    <?php echo NUCONOMY_STR_THE_PROCESS_CONSIST; ?>
    <ol>
      <li>
        <?php echo NUCONOMY_STR_FILL_THE_FORM; ?>
      </li>
      <li>
        <?php echo NUCONOMY_STR_REC_NOTIFICATION; ?>
      </li>
      <li>
        <?php echo NUCONOMY_STR_GERBIL_APPROVE; ?>
      </li>
    </ol>
  </p>
  <?php } else if (nucon_get_option('nuconomy_step') == 1) {?>
  <h3><?php echo NUCONOMY_STR_STEP1; ?></h3>
  <p><?php echo NUCONOMY_STR_STEP1_REQUEST_SENT; ?>
    <br />
    <?php echo NUCONOMY_STR_STEP1_REPLY_NOT_REC; ?></p>
    <button onclick="nucon_reset_tokens();"><?php echo NUCONOMY_STR_RESET_BUT; ?></button>
  <?php } else if (nucon_get_option('nuconomy_step') == 2) { ?>
  <h3><?php echo NUCONOMY_STR_STEP2; ?></h3>
  <p>
    <?php echo NUCONOMY_STR_STEP2_REC; ?>
    <br />
    <?php echo NUCONOMY_STR_STEP2_GERB; ?>
    <br />
    <?php echo NUCONOMY_STR_RESET; ?>
  </p>
  <p>
    <?php echo NUCONOMY_STR_STEP2_REFRESH; ?>
    <?php if (!$nucon_is_mu) { ?>
        <a href="<?php echo get_option('siteurl'); ?>/wp-admin/options-general.php?page=nuconomy.php&noc_manrefresh=1"><?php echo NUCONOMY_STR_STEP2_REFRESH_LINK; ?></a>
    <?php } else { ?>
        <a href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=nuconomy-insights/admin.php&noc_manrefresh=1"><?php echo NUCONOMY_STR_STEP2_REFRESH_LINK; ?></a>
    <?php } ?>
  </p>  
  <button onclick="nucon_reset_tokens();"><?php echo NUCONOMY_STR_RESET_BUT; ?></button>
  <?php } ?>
  <?php } else {?>
  <h3><?php echo NUCONOMY_STR_STEP3; ?></h3>
  <p><?php echo NUCONOMY_STR_ACTIVE; ?>
      <br />
      <?php echo NUCONOMY_STR_DASHBOARD_LINK; ?>
    </p>
    <?php echo NUCONOMY_STR_RESET; ?>
    <p><button onclick="nucon_reset_tokens();"><?php echo NUCONOMY_STR_RESET_BUT;?></button></p>
  <h2><?php echo NUCONOMY_STR_ENABLESPECIALCONFIGTITLE; ?></h2>
    <form method="post"  action="">
      <p><label for="nucon-video"><input id="nucon-video" type="checkbox" <?php if (nucon_get_option('videotrackingenabled') == 1) echo 'checked'; ?> name="nucon_videomonitoring"/><? echo NUCONOMY_STR_ENABLEVIDEO;?></label></p>
	  <p><label for="nucon-adtracking"><input id="nucon-adtracking" type="checkbox" <?php if (nucon_get_option('adtrackingenabled') == 1) echo 'checked'; ?> name="nucon_admonitoring"/><? echo NUCONOMY_STR_ENABLEADTRACKING;?></label></p>
      <p class="submit"><input type="submit" name="nucon-submit" value="Save changes"/></p>
    </form>
  <?php 
    }
  ?>
	</div>

  <form action="" method="post" id="nucon_conf" name="nucon_conf" <?php if (nucon_get_option('nuconomy_step') || nucon_get_project_client_token()) echo "style='display:none'"?> >
	  <table>
		<tr>
			<td>
			  <b>
				<label for="name">
				  <?php echo NUCONOMY_STR_NAME; ?>
				</label>
			  </b>
	          &nbsp;
			</td>
			<td>
				<input id="name" name="name" type="text" size="20" maxlength="40" value="" style="font-family: 'Courier New', Courier, mono; font-size: 1.5em;" />
			</td>
		</tr>
		<tr>
			<td>
			  <b>
				<label for="email">
				  <?php echo NUCONOMY_STR_EMAIL; ?>
				</label>
			  </b>
	          &nbsp;
			</td>
			<td>
				<input id="email" name="email" type="text" size="20" maxlength="40" value="" style="font-family: 'Courier New', Courier, mono; font-size: 1.5em;" />
			</td>
		</tr>
		<tr>
			<td>
			  <b>
				<label for="name">
				  <?php echo NUCONOMY_STR_BLOGURL; ?>
				</label>
			  </b>
	          &nbsp;
			</td>
			<td>
				<?php echo get_option("siteurl"); ?>
			</td>

		</tr>
	  </table>
      <p class="submit" style="margin-bottom:0px; margin-top:3px;">
        <input type="submit" id="nucon_conf_submit" name="submit" value="<?php _e('Submit','nuconomy')?>" />
      </p>
	  <input id="nucon_reset" name="nucon_reset" type="hidden" value="0"/>
    </form>

</div>
<?php
}

function nucon_messgage($msg) {
	echo "
	<div id='message' class='updated fade'><p><strong>$msg</strong></p></div>
";
}

function nucon_user_added($id) {
    global $current_user;

    $user = get_userdata($id);
	$user = $user->user_login;
    nucon_web_service($user,$current_user->user_login,get_option("siteurl"),NUCONOMY_REGISTER,"");
}

function nucon_user_login($user_login) {
    nucon_web_service($user_login,"admin",get_option("siteurl"),NUCONOMY_LOGIN,"");
}

function nucon_get_post_tags($p) {
		$categories = wp_get_post_categories($p->ID, array('fields' => 'names'));
		$categories = implode(";",$categories);
		$tags = wp_get_post_tags($p->ID, array('fields' => 'names'));
		$tags = implode(";",$tags);
		if ($tags != "")
			$tags = $tags.";".$categories;
		else
			$tags = $categories;
    return $tags;
}

function nucon_new_post_status($newstat,$oldstat,$post) {
	global $current_user;

	$page_owner = get_userdata($post->post_author);
	$page_owner = $page_owner->user_login;
    $permalink = get_permalink($post->ID);
    
    if ($newstat == "publish" && $oldstat != "publish") {   
      if ($post->post_type == 'page')
        nucon_web_service($page_owner,$page_owner,$permalink,NUCONOMY_NEW_PAGE,"");
      else
        nucon_web_service($page_owner,$page_owner,$permalink,NUCONOMY_NEW_POST,"");
      $tags = nucon_get_post_tags($post);
        nucon_web_service_tags($page_owner,$permalink,$tags,$post->post_title);
    } 
    if ($newstat != "publish" && $oldstat == "publish") {   
      if ($post->post_type == 'page')
        nucon_web_service($current_user->user_login,$page_owner,$permalink,NUCONOMY_CHANGE_STATUS_PAGE,"$oldstat $newstat");
      else
        nucon_web_service($current_user->user_login,$page_owner,$permalink,NUCONOMY_CHANGE_STATUS_POST,"$oldstat $newstat");
    } 
    if ($newstat == "publish" && $oldstat == "publish") {   
      if ($post->post_type == 'page')
        nucon_web_service($current_user->user_login,$page_owner,$permalink,NUCONOMY_UPDATE_PAGE,"");
      else
        nucon_web_service($current_user->user_login,$page_owner,$permalink,NUCONOMY_UPDATE_POST,"");
    } 
}

function nucon_delete_post($postid) {
	global $current_user;

    $post = get_post($postid);
	  $page_owner = get_userdata($post->post_author);
	  $page_owner = $page_owner->user_login;
    $permalink = get_permalink($post->ID);
    if ($post->post_type == 'page')
      nucon_web_service($current_user->user_login,$page_owner,$permalink,NUCONOMY_DELETE_PAGE,"");
    else
      nucon_web_service($current_user->user_login,$page_owner,$permalink,NUCONOMY_DELETE_POST,"");
}

function nucon_new_comment_moderation($comment_id,$status) {
    global $current_user;

    if ($status == 'approve') {
	    $comment = get_comment($comment_id);
      $post = get_post($comment->comment_post_ID);	    
	    $page_owner = get_userdata($post->post_author);
	    $page_owner = $page_owner->user_login;
      $permalink = get_permalink($post->ID);

      $type = NUCONOMY_COMMENT;
      if ($comment->comment_type != '')
        $type = NUCONOMY_PINGBACK;
        
		  if ($type == NUCONOMY_PINGBACK)
			  nucon_web_service("",$page_owner,$permalink,$type,"");
      else
			  nucon_web_service("$comment->comment_author"."-Anonymous",$page_owner,$permalink,$type,"");
    }
}

function nucon_new_comment_post($comment_id,$status) {
    global $current_user;

    if ($status == 1) {
	    $comment = get_comment($comment_id);
      $post = get_post($comment->comment_post_ID);	
	    $page_owner = get_userdata($post->post_author);
	    $page_owner = $page_owner->user_login;
      $permalink = get_permalink($post->ID);
      
      $type = NUCONOMY_COMMENT;
      if ($comment->comment_type != '')
        $type = NUCONOMY_PINGBACK;
        
		  if ($current_user->user_login != "" || $type == NUCONOMY_PINGBACK)
			  nucon_web_service($current_user->user_login,$page_owner,$permalink,$type,"");
      else
			  nucon_web_service("$comment->comment_author"."-Anonymous",$page_owner,$permalink,$type,"");
    }
}

function nucon_switch_theme($theme) {
    global $current_user;

	nucon_web_service($current_user->user_login,"admin",get_option("siteurl"),NUCONOMY_THEME_CHANGE,$theme);
}

function nucon_file_upload($metadata) {
    global $current_user;

	nucon_web_service($current_user->user_login,"admin",$metadata['file'],NUCONOMY_FILE_UPLOAD,"");
	return $metadata;
}

function nucon_plugin_change($old,$new) {
    global $current_user;

    $ar = array_diff($old,$new);
	$stat = 'disabled';
	if (count($ar) == 0) {
		$ar = array_diff($new,$old);
		$stat = 'enabled';
	}
	if (count($ar) != 0) {
		$ar=implode(' ',$ar);
		nucon_web_service($current_user->user_login,"admin",get_option("siteurl"),NUCONOMY_PLUGIN_CHANGE,"$ar $stat");
	}
}

function nucon_widget_change($old,$new) {
    global $current_user;

	$ar=array_diff($old,$new);
	$ar=implode(' ',$ar);
	$br=array_diff($new,$old);
	$br=implode(' ',$br);
	nucon_web_service($current_user->user_login,"admin",get_option("siteurl"),NUCONOMY_WIDGET_CHANGE,"");
}

function nucon_addRssImage($output) {
  global $post,$nucon_is_mu;
		
  $page_owner = get_userdata($post->post_author);
  $page_owner = $page_owner->user_login;
  $permalink = rtrim(get_permalink($post->ID),'/');
  $project = nucon_get_project_client_token();

  if (!$project)
     return $output;
     
  $genDim5 = '';
  if ($nucon_is_mu)
    $genDim5 = '&genDim5='.urlencode(nucon_get_mu_blogid());
      
  return $output. 
         '<img height="1" width="1" src="http://services.nuconomy.com/i.nsi?methId=log'.
         '&projTok=' . urlencode($project) .
         '&ownus='. urlencode($page_owner).
         '&sver='. urlencode('WordPress/'.NUCONOMY_VERSION.' (nuconomy)').
         '&srcId='. urlencode($permalink).
         '&crtId='. NUCONOMY_NEW_RSS_ITEM .
         '&dt='.time().
         $genDim5 .
         '">';
}

//hopfully will not be needed in WP2.5 - ticket 3884
function nucon_addRssImageFeedContent($output) {

  if (is_feed()) { 
    return nucon_addRssImage($output);
  } else {
    return $output;
  }
}

function nucon_blog_added($blog_id, $user_id) {
    global $current_user;

    $user = get_userdata($user_id);
	  $user = $user->user_login;
     
    switch_to_blog($blog_id);

    nucon_web_service($user,$current_user->user_login,get_option("siteurl"),NUCONOMY_MU_BLOG_CREATE,"");

    restore_current_blog();
}

function nucon_add_enrolment_meta() {
  $authcode = nucon_get_option('nuconomy_authcode');
  if ($authcode) {
    echo '<!-- NuConomy Insights WP Plugin version: '. NUCONOMY_VERSION .' -->'."\n";
    echo '<meta name="NuConomy Token" content="{'.$authcode.'}" />'."\n";
  }
}

/*
    if not registered yet, and not in the middle of the process, display a nag message
*/    
function nucon_not_reg_warning() {
  global $nucon_is_mu;

	if (!nucon_get_option('nuconomy_step') && !nucon_get_project_server_token() && ($_GET['page'] != 'nuconomy.php') && ($_GET['page'] != 'nuconomy-insights/nuconomy.php')  && ($_GET['page'] != 'nuconomy-insights/admin.php')) {
        if ($nucon_is_mu) {
          if (is_site_admin())
		        echo "	<div class='updated fade'><p><strong>".NUCONOMY_STR_NOT_REGISTERED."</strong> ".sprintf(NUCONOMY_STR_MUST_REGISTER, "admin.php?page=nuconomy-insights/admin.php")."</p></div>
		    ";
        } else
		      echo "	<div class='updated fade'><p><strong>".NUCONOMY_STR_NOT_REGISTERED."</strong> ".sprintf(NUCONOMY_STR_MUST_REGISTER, "options-general.php?page=nuconomy.php")."</p></div>
		    ";
	}
}

function nucon_add_rssattribute($url) {

    $url = add_query_arg(NUCONOMY_RSS_PARAM, 1, $url);
    $url = str_replace('&amp;', '&', $url);
    $url = str_replace('&', '&amp;', $url);

    return $url;
}

function nucon_replace_youtubeobject($matches) {
  global $nucon_youtube_params,$nucon_youtube_index,$post;

  $t = array();
  preg_match('/width\s*=\s*\"\s*(\d+)\s*\"/i',$matches[0],$tmatches);
  $t['width'] = $tmatches[1];
  preg_match('/height\s*=\s*\"\s*(\d+)\s*\"/i',$matches[0],$tmatches);
  $t['height'] = $tmatches[1];
  if (preg_match('/src\s*=\s*\"\s*([^\"]+)\s*\"/i',$matches[0],$tmatches)) {
	$t['src'] = $tmatches[1];
  } else {
    preg_match('/data\s*=\s*\"\s*([^\"]+)\s*\"/i',$matches[0],$tmatches);
	$t['src'] = $tmatches[1];
  }
  $nucon_youtube_params[$nucon_youtube_index] = $t;
  $divret = '<div id="nuconyt'.$post->ID.'-'.$nucon_youtube_index.'"></div>';
  $ret = '<script type="text/javascript">';
  $ret .= 'fastswfembed("'.$t['src'].'",'.$t['width'].','.$t['height'].',\''.$post->ID.'-'.$nucon_youtube_index.'\');';
  $ret .= '</script>';
  $nucon_youtube_params[$nucon_youtube_index] = $ret;
  $nucon_youtube_index++;
  return $divret;
}

function nucon_convertvideo($content) {
  global $nucon_youtube_params,$nucon_youtube_index;
  
  $nucon_youtube_index = 0;
  $nucon_youtube_params = array();
  
  if (!nucon_get_project_client_token() || is_feed())
    return $content;

  $content = preg_replace_callback('%<\s*object[^>]*>(<(\s|/)*param[^>]*>)*<\s*embed[^>]*src\s*=\s*\"http://www.youtube.com[^>]*(/\s*>|>.*<\s*/\s*embed\s*>).*<\s*/\s*object\s*>%i','nucon_replace_youtubeobject',$content);
  $content = preg_replace_callback('%<\s*embed[^>]*src\s*=\s*\"http://www.youtube.com[^>]*(/\s*>|>.*<\s*/\s*embed\s*>)%i','nucon_replace_youtubeobject',$content);
  $content = preg_replace_callback('%<\s*object[^>]*data\s*=\s*\"http://www.youtube.com[^>]*>(<(\s|/)*param[^>]*>)*.*<\s*/\s*object\s*>%i','nucon_replace_youtubeobject',$content);
  
  foreach ($nucon_youtube_params as $youembed) {
    $content = $content .  $youembed;
  }
  
  return $content;
}


/* 
   if we are in a search page, return an array of url's 
   to the posts of the original query; otherwise return an empty array
*/   
function nucon_get_search_results() {
    global $wp_the_query;
    
    $ret = array();
    
    if (nucon_is_search()) {
        foreach ($wp_the_query->posts as $p) {
            $t = array();
            $t['url'] = rtrim(apply_filters('the_permalink', get_permalink($p->ID)),'/');
            $t['title'] = $p->post_title;
            $t['tags'] = nucon_get_post_tags($p);
            if ($p->post_type=='page')
                $t['type'] = NUCONOMY_PAGE_CONTENT;
            else
                $t['type'] = NUCONOMY_POST_CONTENT;
	        $page_owner = get_userdata($p->post_author);
	        $t['owner'] = $page_owner->user_login;

            $ret[] = $t;
        }
    }
    
    return $ret;
}

function nucon_add_head_js() {
    global $nucon_is_mu;
  
    $project = nucon_get_project_client_token();
    if ($project) {
      if ($nucon_is_mu)
        echo '<script src="'.get_option('siteurl') . '/' . MUPLUGINDIR . '/nuconomy-insights/NuconomySafeApi.js" type="text/javascript"></script>';
      else
        echo '<script src="'.get_option('siteurl') . '/wp-content/plugins/nuconomy-insights/NuconomySafeApi.js" type="text/javascript"></script>';
?>

      <script type="text/javascript">
        var _nucjs = (("https:" == document.location.protocol) ? "https://sslf" : "http://f");
        document.write(unescape("%3Cscript src='" + _nucjs + ".nuconomy.com/n.js' type='text/javascript'%3E%3C/script%3E"));
      </script>
<?php         
        if ($nucon_is_mu) {
          echo '<script src="'.get_option('siteurl') . '/' . MUPLUGINDIR . '/nuconomy-insights/swfobject.js" type="text/javascript"></script>'."\n";
          echo '<script src="'.get_option('siteurl') . '/' . MUPLUGINDIR . '/nuconomy-insights/nuconomyutils.js" type="text/javascript"></script>'."\n";
        } else {
          echo '<script src="'.get_option('siteurl') . '/wp-content/plugins/nuconomy-insights/swfobject.js" type="text/javascript"></script>'."\n";
          echo '<script src="'.get_option('siteurl') . '/wp-content/plugins/nuconomy-insights/nuconomyutils.js" type="text/javascript"></script>'."\n";
        }
   }
}

function nucon_complete_enrollment_handler() {
  nucon_get_codes(get_option('nuconomy_completetoken'), get_option('nuconomy_completemail'));
}

function nucon_load_nusoap() {
  global $nucon_is_mu;
  
  if ($nucon_is_mu) {
	  require_once(ABSPATH . MUPLUGINDIR . '/nuconomy-insights/nusoap/lib/nusoap.php');
  } else {
	  require_once(ABSPATH .'wp-content/plugins/nuconomy-insights/nusoap/lib/nusoap.php');
  }
}

function nucon_get_single_data($content) {
  global $post, $nucon_post_tags, $nucon_post_title;
  
  $nucon_post_tags='';
  $nucon_post_title='';
  if (nucon_is_single() || nucon_is_page()) 
    $nucon_post_title = $post->post_title;
  if (nucon_is_single()) 
    $nucon_post_tags = nucon_get_post_tags($post);
  
  return $content;
}

function nucon_register_dashboard_widget() {
	wp_register_sidebar_widget('dashboard_nucon', NUCONOMY_STR_DASHBOARD_WIDGET_TITLE, 'dashboard_nucon',
		array(
		'width' => 'full', // OR 'fourth', 'third', 'half', 'full' (Default: 'half')
		'height' => 'single', // OR 'single', 'double' (Default: 'single')
		)
	);
}
 
function nucon_add_dashboard_widget($widgets) {	global $wp_registered_widgets;
	if (!isset($wp_registered_widgets['dashboard_nucon'])) {
		return $widgets;
	}
	
// change the splice to change the location of the widget	
	array_splice($widgets, sizeof($widgets)-1, 0, 'dashboard_nucon');
	return $widgets;
}
 
function dashboard_nucon($sidebar_args) {	global $wpdb;
	extract($sidebar_args, EXTR_SKIP);	echo $before_widget;	echo $before_title;	echo $widget_name;	echo $after_title;	echo 'fast nuconomy insights';	echo $after_widget;
}

/* 
  checks if the footer file of the theme contains a wp_footer hook
  returns:
   0 if contains
   1 if file not found
   2 file found but no hook
*/   
function nucon_check_wpfooter() {

  $dir = get_stylesheet_directory();
  $f = @file_get_contents($dir.'/footer.php');
  if (!$f)
    return 1;
  if (strpos($f,'wp_footer') === false)
    return 2;
  return 0;
}

add_action('admin_notices', 'nucon_not_reg_warning');
add_action('admin_menu', 'nuconadd_config_page');
add_action('wp_footer', 'nucon_addjs',100);
add_action('user_register', 'nucon_user_added');
add_action('wp_login', 'nucon_user_login');
add_action('transition_post_status', 'nucon_new_post_status',10,3);
add_action('delete_post', 'nucon_delete_post');
add_action('wp_set_comment_status', 'nucon_new_comment_moderation',99,2);
add_action('comment_post', 'nucon_new_comment_post',99,2);
add_action('switch_theme','nucon_switch_theme');
add_filter('wp_generate_attachment_metadata','nucon_file_upload');
add_action('update_option_active_plugins','nucon_plugin_change',10,2);
add_action('update_option_sidebars_widgets','nucon_widget_change',10,2);
add_filter('the_excerpt_rss', 'nucon_addRssImage');
add_filter('the_content', 'nucon_addRssImageFeedContent');
if (nucon_get_option('videotrackingenabled') == 1)
  add_filter('the_content', 'nucon_convertvideo',999);
add_filter('the_content', 'nucon_get_single_data');
add_filter('the_permalink_rss', 'nucon_add_rssattribute');
add_action('wpmu_new_blog', 'nucon_blog_added', 10, 2 );
add_action('wpmu_create_user', 'nucon_user_added');
add_action('wp_head','nucon_add_enrolment_meta');
add_action('wp_head','nucon_add_head_js');
add_action('nucon_enrollment_event', 'nucon_complete_enrollment_handler');

if (!$nucon_is_mu) {
  //add_action('wp_dashboard_setup', 'nucon_register_dashboard_widget');
  //add_filter('wp_dashboard_widgets', 'nucon_add_dashboard_widget');
}

?>
