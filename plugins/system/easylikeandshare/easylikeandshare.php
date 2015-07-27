<?php
/**
 * @Project  Easy Like and Share
 * @author   Bryan Keller
 * @package  
 * @copyright Copyright (C) 2011 Techheads IT Consulting. All rights reserved.
 * @license  http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
*/

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );
jimport( 'joomla.html.parameter' );
JHTML::_('behavior.modal');

class plgSystemEasyLikeandShare extends JPlugin {
	var $p_type = '';
	var $p_name = '';

	private $goflag = '';
	private $gsflag = '';
	private $fbflag = '';
	private $twflag = '';
	private $tfflag = '';
	private $diflag = '';
	private $piflag = '';
	private $gbflag = '';
	private $gpflag = '';
	private $fsflag = '';
	private $dsflag = '';
	private $fqflag = '';
	private $flflag = '';



  function plgSystemEasyLikeandShare( &$subject,$params ) {
	$this->p_type = $params['type'];
	$this->p_name = $params['name'];
    	parent::__construct( $subject,$params );
  }

	function onAfterDispatch(){
		$mainframe = JFactory::getApplication();
		
		if($mainframe->isAdmin()){
			return true;
		}

        $document   = JFactory::getDocument();
        /* @var $doc JDocumentHtml */
        $document->addStyleSheet(JURI::root() . "plugins/system/easylikeandshare/easystyle.css");

		}

	function onAfterRender(){
		$mainframe = JFactory::getApplication();
		
		if($mainframe->isAdmin()){
			return true;
		}
	
		// Get plugin info
		$plugin =& JPluginHelper::getPlugin($this->p_type, $this->p_name);
		$pluginParams = new JParameter( $plugin->params );
		
		ob_start();

		if ($pluginParams->get('sidebar') == "no"){
			return true;
		}

    	$doc 	= & JFactory::getDocument();
	$title = $doc->getTitle();
	$uri = & JURI::getInstance();
     	$url = $uri->toString( array('scheme', 'host', 'port', 'path'));


    	$css		= $pluginParams->get('css');
    	$align	= 'vertical';
    	$centering	= 'center';
		

	$goheight	= $pluginParams->get('goheight','');
	$gowidth	= $pluginParams->get('gowidth','');
	$gocss	= $pluginParams->get('gocss','');

	$twheight	= $pluginParams->get('twheight','');
	$twwidth	= $pluginParams->get('twwidth','');
	$twcss	= $pluginParams->get('twcss','');

	$fbheight	= $pluginParams->get('fbheight','');
	$fbwidth	= $pluginParams->get('fbwidth','');
	$fbcss	= $pluginParams->get('fbcss','');

	$diheight	= $pluginParams->get('diheight','');
	$diwidth	= $pluginParams->get('diwidth','');
	$dicss	= $pluginParams->get('dicss','');

	$stheight	= $pluginParams->get('stheight','');
	$stwidth	= $pluginParams->get('stwidth','');
	$stcss	= $pluginParams->get('stcss','');

	$liheight	= $pluginParams->get('liheight','');
	$liwidth	= $pluginParams->get('liwidth','');
	$licss	= $pluginParams->get('licss','');

	$tmheight	= $pluginParams->get('tmheight','');
	$tmwidth	= $pluginParams->get('tmwidth','');
	$tmcss	= $pluginParams->get('tmcss','');

	$reheight	= $pluginParams->get('reheight','');
	$rewidth	= $pluginParams->get('rewidth','');
	$recss	= $pluginParams->get('recss','');

	$piheight	= $pluginParams->get('piheight','');
	$piwidth	= $pluginParams->get('piwidth','');
	$picss	= $pluginParams->get('picss','');
	
	$tfheight	= $pluginParams->get('tfheight','');
	$tfwidth	= $pluginParams->get('tfwidth','');
	$tfcss	= $pluginParams->get('tfcss','');

	$bfheight	= $pluginParams->get('bfheight','');
	$bfwidth	= $pluginParams->get('bfwidth','');
	$bfcss	= $pluginParams->get('bfcss','');

	$xiheight	= $pluginParams->get('xiheight','');
	$xiwidth	= $pluginParams->get('xiwidth','');
	$xicss	= $pluginParams->get('xicss','');

	$gsheight	= $pluginParams->get('gsheight','');
	$gswidth	= $pluginParams->get('gswidth','');
	$gscss	= $pluginParams->get('gscss','');

	$emheight	= $pluginParams->get('emheight','');
	$emwidth	= $pluginParams->get('emwidth','');
	$emcss	= $pluginParams->get('emcss','');

	$gbheight	= $pluginParams->get('gbheight','');
	$gbwidth	= $pluginParams->get('gbwidth','');
	$gbcss	= $pluginParams->get('gbcss','');

	$gpheight	= $pluginParams->get('gpheight','');
	$gpwidth	= $pluginParams->get('gpwidth','');
	$gpcss	= $pluginParams->get('gpcss','');

	$fsheight	= $pluginParams->get('fsheight','');
	$fswidth	= $pluginParams->get('fswidth','');
	$fscss	= $pluginParams->get('fscss','');

	$dsheight	= $pluginParams->get('dsheight','');
	$dswidth	= $pluginParams->get('dswidth','');
	$dscss	= $pluginParams->get('dscss','');

	$fqheight	= $pluginParams->get('fqheight','');
	$fqwidth	= $pluginParams->get('fqwidth','');
	$fqcss	= $pluginParams->get('fqcss','');

	$flheight	= $pluginParams->get('flheight','');
	$flwidth	= $pluginParams->get('flwidth','');
	$flcss	= $pluginParams->get('flcss','');



	$fbappid		= $pluginParams->get('fbappid');
	$fbsendbutton	= $pluginParams->get('fbsendbutton') == 'yes' ? 'true' : 'false';
	$fbfaces 		= $pluginParams->get('fbfaces') == 'yes' ? 'true' : 'false';
	$fblayout 		= $pluginParams->get('fblayout');
	$fboutput 		= $pluginParams->get('fboutput');
	$fbverb 		= $pluginParams->get('fbverb');
	$fbfont 		= $pluginParams->get('fbfont');
	$fblocale 		= $pluginParams->get('fblocale');
	$fbcolor 		= $pluginParams->get('fbcolor');
	$retype 		= $pluginParams->get('retype');
	$rebgcolor 	= $pluginParams->get('rebgcolor');
	$rebordercol	= $pluginParams->get('rebordercol');
	$gourl 		= $pluginParams->get('gourl') != '' ? $pluginParams->get('gourl') : $url;
	$dsurl 		= $pluginParams->get('dsurl') != '' ? $pluginParams->get('dsurl') : $url;
	$fsurl 		= $pluginParams->get('fsurl') != '' ? $pluginParams->get('fsurl') : $url;
	$gsurl 		= $pluginParams->get('gsurl') != '' ? $pluginParams->get('gsurl') : $url;
	$twurl 		= $pluginParams->get('twurl') != '' ? $pluginParams->get('twurl') : $url;
	$xiurl 		= $pluginParams->get('xiurl') != '' ? $pluginParams->get('xiurl') : $url;
	$fburl 		= $pluginParams->get('fburl') != '' ? $pluginParams->get('fburl') : $url;
	$diurl 		= $pluginParams->get('diurl') != '' ? $pluginParams->get('diurl') : $url;
	$sturl 		= $pluginParams->get('sturl') != '' ? $pluginParams->get('sturl') : $url;
	$liurl 		= $pluginParams->get('liurl') != '' ? $pluginParams->get('liurl') : $url;
	$tmurl 		= $pluginParams->get('tmurl') != '' ? $pluginParams->get('tmurl') : $url;
	$reurl 		= $pluginParams->get('reurl') != '' ? $pluginParams->get('reurl') : $url;
	$retitle 	= $pluginParams->get('retitle') != '' ? $pluginParams->get('retitle') : $title;
	$dititle 	= $pluginParams->get('dititle') != '' ? $pluginParams->get('dititle') : $title;
	$twtitle 	= $pluginParams->get('twtitle') != '' ? $pluginParams->get('twtitle') : $title;


	$gojembed		= $pluginParams->get('gojembed');
	$fbjembed		= $pluginParams->get('fbjembed');
	$twjembed		= $pluginParams->get('twjembed');
	$tfjembed		= $pluginParams->get('tfjembed');
	$dijembed 		= $pluginParams->get('dijembed');
	$pijembed 		= $pluginParams->get('pijembed');
	$gsjembed		= $pluginParams->get('gsjembed');
	$gbjembed		= $pluginParams->get('gbjembed');
	$gpjembed		= $pluginParams->get('gpjembed');
	$dsjembed		= $pluginParams->get('dsjembed');
	$fsjembed		= $pluginParams->get('fsjembed');	$fqjembed		= $pluginParams->get('fqjembed');	$fljembed		= $pluginParams->get('fljembed');

	$fqid			= $pluginParams->get('fqid');
	$flid			= $pluginParams->get('flid');
	$flname		= $pluginParams->get('flname');
	$fsstyle		= $pluginParams->get('fsstyle');
	$dsstyle		= $pluginParams->get('dsstyle');
	$fqstyle		= $pluginParams->get('fqstyle');
	$flstyle		= $pluginParams->get('flstyle');

	$gslang		= $pluginParams->get('gslang');
	$gsoutput		= $pluginParams->get('gsoutput');
	$gooutput		= $pluginParams->get('gooutput');
	$twlang		= $pluginParams->get('twlang');
	$golang		= $pluginParams->get('golang');
	$pitype		= $pluginParams->get('pitype');
	$pibtype		= $pluginParams->get('pibtype');
	$piurl		= $pluginParams->get('piurl') != '' ? $pluginParams->get('piurl') : $url;
	$piimage		= $pluginParams->get('piimage');
	$pidescription	= $pluginParams->get('pidescription', '') != '' ? $pluginParams->get('pidescription') : $title;	
	$pijs 		= $pluginParams->get('pijs');	
	$tflang		= $pluginParams->get('tflang');
	$xilang		= $pluginParams->get('xilang');
	$tfuser		= $pluginParams->get('tfuser');		
	$tflayout 		= $pluginParams->get('tflayout');
	$xilayout 		= $pluginParams->get('xilayout');
	$bfurl 		= $pluginParams->get('bfurl') != '' ? $pluginParams->get('bfurl') : $url;	
	$bftitle 		= $pluginParams->get('bftitle') != '' ? $pluginParams->get('bftitle') : $title;	
	$bflayout		= $pluginParams->get('bflayout');
	$emstyle		= $pluginParams->get('emstyle');	
	$gboutput		= $pluginParams->get('gboutput');
	$gbfeatures	= $pluginParams->get('gbfeatures');
	$gbcustom		= $pluginParams->get('gbcustom');
	$gbiconsize	= $pluginParams->get('gbiconsize');
	$gblang		= $pluginParams->get('gblang');
	$gbcolortheme	= $pluginParams->get('gbcolortheme');
	$gbpage		= $pluginParams->get('gbpage');
	$gbpagetype	= $pluginParams->get('gbpagetype');
	$gpoutput		= $pluginParams->get('gpoutput');
	$gpfeatures	= $pluginParams->get('gpfeatures');
	$gpcustom		= $pluginParams->get('gpcustom');
	$gpiconsize	= $pluginParams->get('gpiconsize');
	$gplang		= $pluginParams->get('gplang');
	$gpcolortheme	= $pluginParams->get('gpcolortheme');
	$gppage		= $pluginParams->get('gppage');
	$gppagetype	= $pluginParams->get('gppagetype');
	
	
	if($fqid != ''){
		$fqidhold = '"uid":"'.$fqid.'"';
		}

	global $fqflag;	
	if((($fqjembed == 'everytime') || ($fqjembed == 'once')) && ($fqflag != 'yes')) {
		if($fqjembed == 'once'){
			$fqflag = 'yes';
		}else{
			$fqflag = 'no';	
			}
		$fqjs = '<script type="text/javascript">
  (function() {
    window.___fourSq = {'.$fqidhold.'};
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.src = "http://platform.foursquare.com/js/widgets.js";
    s.async = true;
    var ph = document.getElementsByTagName("script")[0];
    ph.parentNode.insertBefore(s, ph);
  })();
</script>';
	}else{
		$fqjs ='';
	}


	global $flflag;	
	if((($fljembed == 'everytime') || ($fljembed == 'once')) && ($flflag != 'yes')) {
		if($fljembed == 'once'){
			$flflag = 'yes';
		}else{
			$flflag = 'no';	
			}
		$fljs = '<script type="text/javascript">
  (function() {
    window.___fourSq = {};
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.src = "http://platform.foursquare.com/js/widgets.js";
    s.async = true;
    var ph = document.getElementsByTagName("script")[0];
    ph.parentNode.insertBefore(s, ph);
  })();
</script>';
	}else{
		$fljs ='';
	}

	global $dsflag;	
	if((($dsjembed == 'everytime') || ($dsjembed == 'once')) && ($dsflag != 'yes')) {
		if($dsjembed == 'once'){
			$dsflag = 'yes';
		}else{
			$dsflag = 'no';	
			}
/*		$dsjs = '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://delicious-button.googlecode.com/files/jquery.delicious-button-1.1.min.js"></script>';	*/
		$dsjs = '<script type="text/javascript" src="http://delicious-button.googlecode.com/files/jquery.delicious-button-1.1.min.js"></script>';
	}else{
		$dsjs ='';
	}


	global $fsflag;	
	if((($fsjembed == 'everytime') || ($fsjembed == 'once')) && ($fsflag != 'yes')) {
		if($fsjembed == 'once'){
			$fsflag = 'yes';
		}else{
			$fsflag = 'no';	
			}
		$fsjs = '<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>';
	}else{
		$fsjs ='';
	}


	global $goflag;	
	if((($gojembed == 'everytime') || ($gojembed == 'once')) && ($goflag != 'yes')) {
		if($gojembed == 'once'){
			$goflag = 'yes';
		}else{
			$goflag = 'no';	
			}
		$gojs = '<script type="text/javascript"> (function() {var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); </script><script type="text/javascript"> window.___gcfg = {lang: "'.$golang.'"}; </script>';
	}else{
		$gojs ='';
	}

	global $gsflag;
	if((($gsjembed == 'everytime') || ($gsjembed == 'once')) && ($gsflag != 'yes')) {
		if($gsjembed == 'once'){
			$gsflag = 'yes';
		}else{
			$gsflag = 'no';	
			}
		$gsjs = '<script type="text/javascript"> window.___gcfg = {lang: "'.$gslang.'"}; (function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); </script>';
	}else{
		$gsjs ='';
	}

	global $gbflag;
	if((($gbjembed == 'everytime') || ($gbjembed == 'once')) && ($gbflag != 'yes')) {
		if($gbjembed == 'once'){
			$gbflag = 'yes';
		}else{
			$gbflag = 'no';	
			}
		$gbjs = '<script type="text/javascript"> window.___gcfg = {lang: "'.$gblang.'"}; (function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); </script>';
	}else{
		$gbjs ='';
	}

	global $gpflag;
	if((($gpjembed == 'everytime') || ($gpjembed == 'once')) && ($gpflag != 'yes')) {
		if($gpjembed == 'once'){
			$gpflag = 'yes';
		}else{
			$gpflag = 'no';	
			}
		$gpjs = '<script type="text/javascript"> window.___gcfg = {lang: "'.$gplang.'"}; (function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); </script>';
	}else{
		$gpjs ='';
	}

	global $fbflag;
	if((($fbjembed == 'everytime') || ($fbjembed == 'once')) && ($fbflag != 'yes')) {
		if($fbjembed == 'once'){
			$fbflag = 'yes';
		}else{
			$fbflag = 'no';	
			}
		$fbjs = '<script> (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return}; js = d.createElement(s); js.id = id; js.async = true; js.src = "//connect.facebook.net/'.$fblocale.'/all.js#xfbml=1&appId='.$fbappid.'"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "facebook-jssdk")); </script>';
	}else{
		$fbjs = '';
	}

	global $twflag;
	if((($twjembed == 'everytime') || ($twjembed == 'once')) && ($twflag != 'yes')) {
		if($twjembed == 'once'){
			$twflag = 'yes';
		}else{
			$twflag = 'no';	
			}
		$twjs = '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	}else{
		$twjs = '';
	}

	global $tfflag;
	if((($tfjembed == 'everytime') || ($tfjembed == 'once')) && ($tfflag != 'yes')) {
		if($tfjembed == 'once'){
			$tfflag = 'yes';
		}else{
			$tfflag = 'no';	
			}
		$tfjs = '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	}else{
		$tfjs = '';
	}

	global $diflag;
	if((($dijembed == 'everytime') || ($dijembed == 'once')) && ($diflag != 'yes')) {
		if($dijembed == 'once'){
			$diflag = 'yes';
		}else{
			$diflag = 'no';	
			}
		$dijs = '<script type="text/javascript">
(function() { var s = document.createElement("SCRIPT"), s1 = document.getElementsByTagName("SCRIPT")[0]; s.type = "text/javascript"; s.async = true; s.src = "http://widgets.digg.com/buttons.js"; s1.parentNode.insertBefore(s, s1); })(); </script>';
	}else{
		$dijs = '';
	}

	global $piflag;
	$piposturl = '<a href="http://pinterest.com/pin/create/button/?url=' .rawurlencode($piurl). '&amp;media=' .rawurlencode($piimage). '&amp;description='. rawurlencode($pidescription). ' " class="pin-it-button" count-layout="'.$pitype.'"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>';
	if((($pijembed == 'everytime') || ($pijembed == 'once')) && ($piflag != 'yes')) {
		if($pijembed == 'once'){
			$piflag = 'yes';
		}else{
			$piflag = 'no';
		}
		if($pibtype == 'bookmarklet') {
			$piposturl = '<a href="javascript:void(run_pinmarklet())"><img src="//assets.pinterest.com/images/PinExt.png"></a>';
			$pijs = '<script type="text/javascript">
function run_pinmarklet() {
    var e=document.createElement("script");
    e.setAttribute("type","text/javascript");
    e.setAttribute("charset","UTF-8");
    e.setAttribute("src","http://assets.pinterest.com/js/pinmarklet.js?r=" + Math.random()*99999999);
    document.body.appendChild(e);
}
</script>';
		}else{
			$pijs = '<script type="text/javascript">
(function() { window.PinIt = window.PinIt || { loaded:false }; if (window.PinIt.loaded) return; window.PinIt.loaded = true; function async_load(){ var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; if  (window.location.protocol == "https:") s.src = "https://assets.pinterest.com/js/pinit.js"; else s.src = "http://assets.pinterest.com/js/pinit.js"; var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x); } if (window.attachEvent) window.attachEvent("onload", async_load); else window.addEventListener("load", async_load, false); })(); </script>';
		}
		}else{
			$pijs = '';
		}		
		
			
	$twlayout 		= $pluginParams->get('twlayout');
	$twuser 		= $pluginParams->get('twuser');
	$twvia 		= $pluginParams->get('twvia');
	$twhashtag		= $pluginParams->get('twhashtag');
	$sizegoogle	= $pluginParams->get("sizegoogle");
	$annotation	= $pluginParams->get("annotation");
	$gs_annotation	= $pluginParams->get('gs_annotation');
	$gs_size		= $pluginParams->get('gs_size');
	$re1			= $pluginParams->get('re1');
	$tm1			= $pluginParams->get('tm1');
	$li1			= $pluginParams->get('li1');
	$st1			= $pluginParams->get('st1');
	$di1			= $pluginParams->get('di1');
	$fb1			= $pluginParams->get('fb1');
	$tw1			= $pluginParams->get('tw1');
	$go1			= $pluginParams->get('go1');
	$pi1			= $pluginParams->get('pi1');
	$tf1			= $pluginParams->get('tf1');	
	$bf1			= $pluginParams->get('bf1');	
	$xi1			= $pluginParams->get('xi1');
	$gs1			= $pluginParams->get('gs1');
	$em1			= $pluginParams->get('em1');
	$gb1			= $pluginParams->get('gb1');
	$gp1			= $pluginParams->get('gp1');
	$fs1			= $pluginParams->get('fs1');
	$ds1			= $pluginParams->get('ds1');
	$fq1			= $pluginParams->get('fq1');
	$fl1			= $pluginParams->get('fl1');

	$padbottom		= $pluginParams->get('padbottom', '10');
	$orientation	= $pluginParams->get('orientation', 'right');
	$toporbot		= $pluginParams->get('toporbot', 'bottom');
	$padrorl		= $pluginParams->get('padrorl', 'bottom');
	$startpos		= $pluginParams->get('startpos', 'side');
	$positioning	= $pluginParams->get('positioning', 'fixed');
	$backdrop		= $pluginParams->get('backdrop');
	$backdropcol	= $pluginParams->get('backdropcol');
	$bkdropheight	= $pluginParams->get('bkdropheight');
	$bkdropwidth	= $pluginParams->get('bkdropwidth');
	$bkdropcss		= $pluginParams->get('bkdropcss');
	$bkdropborder	= $pluginParams->get('bkdropborder');
	$bkdropborwidth	= $pluginParams->get('bkdropborwidth');
	$lilayout 		= $pluginParams->get('lilayout');
	$tmlayout 		= $pluginParams->get('tmlayout');
	$dilayout 		= $pluginParams->get('dilayout');
	$stlayout 		= $pluginParams->get('stlayout');
	$twlarge		= $pluginParams->get('twlarge');
	$shortener		= $pluginParams->get('shortener');
	$shortLogin	= $pluginParams->get('shortLogin');
	$shortApiKey	= $pluginParams->get('shortApiKey');
	$tws			= $pluginParams->get('tws');

	if($shortener){
		if($tws == 'yes'){
	     		$twurl = $this->getShortUrl($twurl);
		}
	}


	$iconori = $padrorl;

	if($orientation == 'left'){
		if($startpos == 'center'){
			$iconori = "50%; margin-left:-" . $padrorl; 
			}
	}else{
		if($startpos == 'center'){
			$iconori = "50%; margin-right:-" . $padrorl; 
			}		
		}

	$offset = intval($padbottom);


	if($align == 'horizontal'){
		if($fscss == ''){
			$fscss = 'float: left;';
		}
		if($dscss == ''){
			$dscss = 'float: left;';
		}
		if($fqcss == ''){
			$fqcss = 'float: left;';
		}
		if($flcss == ''){
			$flcss = 'float: left;';
		}
		if($gbcss == ''){
			$gbcss = 'float: left;';
		}
		if($gpcss == ''){
			$gpcss = 'float: left;';
		}
		if($emcss == ''){
			$emcss = 'float: left;';
		}
		if($gscss == ''){
			$gscss = 'float: left;';
		}
		if($xicss == ''){
			$xicss = 'float: left;';
		}
		if($bfcss == ''){
			$bfcss = 'float: left;';
		}
		if($tfcss == ''){
			$tfcss = 'float: left;';
		}
		if($picss == ''){
			$picss = 'float: left;';
		}
		if($recss == ''){
			$recss = 'float: left;';
		}
		if($tmcss == ''){
			$tmcss = 'float: left;';
		}
		if($licss == ''){
			$licss = 'float: left;';
		}
		if($stcss == ''){
			$stcss = 'float: left;';
		}	
		if($dicss == ''){
			$dicss = 'float: left;';
		}
		if($fbcss == ''){
			$fbcss = 'float: left;';
		}
		if($twcss == ''){
			$twcss = 'float: left;';
		}
		if($gocss == ''){
			$gocss = 'float: left;';
		}

	}else{
		if($fscss == ''){
			$fscss = 'text-align: '.$centering.';';
		}
		if($dscss == ''){
			$dscss = 'text-align: '.$centering.';';
		}
		if($fqcss == ''){
			$fqcss = 'text-align: '.$centering.';';
		}
		if($flcss == ''){
			$flcss = 'text-align: '.$centering.';';
		}
		if($gbcss == ''){
			$gbcss = 'text-align: '.$centering.';';
		}
		if($gpcss == ''){
			$gpcss = 'text-align: '.$centering.';';
		}
		if($emcss == ''){
			$emcss = 'text-align: '.$centering.';';
		}
		if($bfcss == ''){
			$bfcss = 'text-align: '.$centering.';';
		}
		if($xicss == ''){
			$xicss = 'text-align: '.$centering.';';
		}
		if($gscss == ''){
			$gscss = 'text-align: '.$centering.';';
		}
		if($tfcss == ''){
			$tfcss = 'text-align: '.$centering.';';
		}
		if($picss == ''){
			$picss = 'text-align: '.$centering.';';
		}
		if($recss == ''){
			$recss = 'text-align: '.$centering.';';
		}
		if($tmcss == ''){
			$tmcss = 'text-align: '.$centering.';';
		}
		if($licss == ''){
			$licss = 'text-align: '.$centering.';';
		}
		if($stcss == ''){
			$stcss = 'text-align: '.$centering.';';
		}	
		if($dicss == ''){
			$dicss = 'text-align: '.$centering.';';
		}
		if($fbcss == ''){
			$fbcss = 'text-align: '.$centering.';';
		}
		if($twcss == ''){
			$twcss = 'text-align: '.$centering.';';
		}
		if($gocss == ''){
			$gocss = 'text-align: '.$centering.';';
		}
		
	}


	if($fs1 == 'yes'){
		switch($fsstyle){
			case 'box_count':
				if($fswidth == ''){
					$fswidth = '70';
					}
				if($fsheight == ''){
					$fsheight = '75';
					}
				break;
			case 'button_count':
				if($fswidth == ''){
					$fswidth = '95';
					}
				if($fsheight == ''){
					$fsheight = '30';
					}
				break;
			case 'button':
				if($fswidth == ''){
					$fswidth = '70';
					}
				if($fsheight == ''){
					$fsheight = '30';
					}
				break;
			case 'icon':
				if($fswidth == ''){
					$fswidth = '30';
					}
				if($fsheight == ''){
					$fsheight = '30';
					}
				break;
				}
			}

	if($ds1 == 'yes'){
		switch($dsstyle){
			case 'tall':
				if($dswidth == ''){
					$dswidth = '61';
					}
				if($dsheight == ''){
					$dsheight = '75';
					}
				break;
			case 'wide':
				if($dswidth == ''){
					$dswidth = '90';
					}
				if($dsheight == ''){
					$dsheight = '30';
					}
				break;
				}
			}

	if($fq1 == 'yes'){
		switch($fqstyle){
			case 'standard':
				if($fqwidth == ''){
					$fqwidth = '65';
					}
				if($fqheight == ''){
					$fqheight = '30';
					}
				break;
			case 'wide':
				if($fqwidth == ''){
					$fqwidth = '135';
					}
				if($fqheight == ''){
					$fqheight = '30';
					}
				break;
				}
			}

	if($fl1 == 'yes'){
		switch($flstyle){
			case 'standard':
				if($flwidth == ''){
					$flwidth = '70';
					}
				if($flheight == ''){
					$flheight = '30';
					}
				break;
			case 'wide':
				if($flwidth == ''){
					$flwidth = '160';
					}
				if($flheight == ''){
					$flheight = '30';
					}
				break;
				}
			}

	if($em1 == 'yes'){
		switch($emstyle){
			case 'horizontal':
				$emimage = 'em_hor.png';
				if($emwidth == ''){
					$emwidth = '61';
					}
				if($emheight == ''){
					$emheight = '30';
					}
				break;
			case 'vertical':
				$emimage = 'em_ver.png';
				if($emwidth == ''){
					$emwidth = '61';
					}
				if($emheight == ''){
					$emheight = '75';
					}
				break;
				}
			}
	
	if($re1 == 'yes'){
		switch($retype){
			case 'button1':
				if($rewidth == ''){
					$rewidth = '35';
					}
				if($reheight == ''){
					$reheight = '30';
					}
				break;
			case 'button2':
				if($rewidth == ''){
					$rewidth = '90';
					}
				if($reheight == ''){
					$reheight = '30';
					}
				break;
			case 'button3':
				if($rewidth == ''){
					$rewidth = '90';
					}
				if($reheight == ''){
					$reheight = '30';
					}
				break;
			case 'button4':
				if($rewidth == ''){
					$rewidth = '130';
					}
				if($reheight == ''){
					$reheight = '30';
					}
				break;
			case 'button5':
				if($rewidth == ''){
					$rewidth = '61';
					}
				if($reheight == ''){
					$reheight = '75';
					}
				break;
			case 'button6':
				if($rewidth == ''){
					$rewidth = '61';
					}
				if($reheight == ''){
					$reheight = '75';
					}
				break;
				}
			}

	if($gs1 == 'yes'){
		switch($gs_annotation){
			case 'none':
				if($gs_size == 'small'){
					$gs_size = '15';
					if($gswidth == ''){
						$gswidth = '53';
						}
					if($gsheight == ''){
						$gsheight = '15';
						}
				}elseif($gs_size == 'medium'){
					$gs_size = '';
					if($gswidth == ''){
						$gswidth = '66';
						}
					if($gsheight == ''){
						$gsheight = '30';
						}
				}else{
					$gs_size = '24';
					if($gswidth == ''){
						$gswidth = '90';
						}
					if($gsheight == ''){
						$gsheight = '30';
						}
					}
				break;
			case 'bubble':
				if($gs_size == 'small'){
					$gs_size = '15';
					if($gswidth == ''){
						$gswidth = '88';
						}
					if($gsheight == ''){
						$gsheight = '15';
						}
				}elseif($gs_size == 'medium'){
					$gs_size = '';
					if($gswidth == ''){
						$gswidth = '102';
						}
					if($gsheight == ''){
						$gsheight = '30';
						}
				}else{
					$gs_size = '24';
					if($gswidth == ''){
						$gswidth = '131';
						}
					if($gsheight == ''){
						$gsheight = '30';
						}
					}
				break;
			case 'vertical-bubble':
				if($gswidth == ''){
					$gswidth = '65';
					}
				if($gsheight == ''){
					$gsheight = '75';
					}
				break;
			case 'inline':
				if($gs_size == 'small'){
					if($gswidth == ''){
						$gswidth = '192';
						}
					if($gsheight == ''){
						$gsheight = '15';
						}
				}elseif($gs_size == 'medium'){
					if($gswidth == ''){
						$gswidth = '262';
						}
					if($gsheight == ''){
						$gsheight = '30';
						}
				}else{
					if($gswidth == ''){
						$gswidth = '297';
						}
					if($gsheight == ''){
						$gsheight = '30';
						}
					}
				break;
				}
			}

	if($gb1 == 'yes'){
		switch($gbfeatures){
			case 'icon':
				if($gbiconsize == 'small'){
					if($gbwidth == ''){
						$gbwidth = '20';
						}
					if($gbheight == ''){
						$gbheight = '16';
						}
				}elseif($gbiconsize == 'medium'){
					if($gbwidth == ''){
						$gbwidth = '36';
						}
					if($gbheight == ''){
						$gbheight = '32';
						}
				}else{
					if($gbwidth == ''){
						$gbwidth = '74';
						}
					if($gbheight == ''){
						$gbheight = '64';
						}
					}
				break;
			case 'small':
				if($gbiconsize == 'small'){
					if($gbwidth == ''){
						$gbwidth = '100';
						}
					if($gbheight == ''){
						$gbheight = '131';
						}
				}elseif($gbiconsize == 'medium'){
					if($gbwidth == ''){
						$gbwidth = '275';
						}
					if($gbheight == ''){
						$gbheight = '69';
						}
				}else{
					if($gbwidth == ''){
						$gbwidth = '450';
						}
					if($gbheight == ''){
						$gbheight = '69';
						}
					}
				break;
			case 'standard':
				if($gbiconsize == 'small'){
					if($gbpagetype == 'author'){
						if($gbwidth == ''){
							$gbwidth = '100';
						}
					}else{
						if($gbwidth == ''){
							$gbwidth = '180';
						}
					}
					if($gbpagetype == 'author'){
						if($gbheight == ''){
							$gbheight = '131';
						}
					}else{
						if($gbheight == ''){
							$gbheight = '131';
						}
					}
				}elseif($gbiconsize == 'medium'){
					if($gbpagetype == 'author'){
						if($gbwidth == ''){
							$gbwidth = '275';
						}
					}else{
						if($gbwidth == ''){
							$gbwidth = '315';
						}
					}
					if($gbpagetype == 'author'){
						if($gbheight == ''){
							$gbheight = '69';
						}
					}else{
						if($gbheight == ''){
							$gbheight = '131';
						}
					}
				}else{
					if($gbpagetype == 'author'){
						if($gbwidth == ''){
							$gbwidth = '450';
						}
					}else{
						if($gbwidth == ''){
							$gbwidth = '450';
						}
					}
					if($gbpagetype == 'author'){
						if($gbheight == ''){
							$gbheight = '69';
						}
					}else{
						if($gbheight == ''){
							$gbheight = '131';
						}
					}
				}
				break;
				}
			}

	if($gp1 == 'yes'){
		switch($gpfeatures){
			case 'icon':
				if($gpiconsize == 'small'){
					if($gpwidth == ''){
						$gpwidth = '20';
						}
					if($gpheight == ''){
						$gpheight = '16';
						}
				}elseif($gpiconsize == 'medium'){
					if($gpwidth == ''){
						$gpwidth = '36';
						}
					if($gpheight == ''){
						$gpheight = '32';
						}
				}else{
					if($gpwidth == ''){
						$gpwidth = '74';
						}
					if($gpheight == ''){
						$gpheight = '64';
						}
					}
				break;
			case 'small':
				if($gpiconsize == 'small'){
					if($gpwidth == ''){
						$gpwidth = '100';
						}
					if($gpheight == ''){
						$gpheight = '131';
						}
				}elseif($gpiconsize == 'medium'){
					if($gpwidth == ''){
						$gpwidth = '275';
						}
					if($gpheight == ''){
						$gpheight = '69';
						}
				}else{
					if($gpwidth == ''){
						$gpwidth = '450';
						}
					if($gpheight == ''){
						$gpheight = '69';
						}
					}
				break;
			case 'standard':
				if($gpiconsize == 'small'){
					if($gppagetype == 'author'){
						if($gpwidth == ''){
							$gpwidth = '100';
						}
					}else{
						if($gpwidth == ''){
							$gpwidth = '180';
						}
					}
					if($gppagetype == 'author'){
						if($gpheight == ''){
							$gpheight = '69';
						}
					}else{
						if($gpheight == ''){
							$gpheight = '131';
						}
					}
				}elseif($gpiconsize == 'medium'){
					if($gppagetype == 'author'){
						if($gpwidth == ''){
							$gpwidth = '275';
						}
					}else{
						if($gpwidth == ''){
							$gpwidth = '315';
						}
					}
					if($gppagetype == 'author'){
						if($gpheight == ''){
							$gpheight = '69';
						}
					}else{
						if($gpheight == ''){
							$gpheight = '131';
						}
					}
				}else{
					if($gppagetype == 'author'){
						if($gpwidth == ''){
							$gpwidth = '450';
						}
					}else{
						if($gpwidth == ''){
							$gpwidth = '450';
						}
					}
					if($gppagetype == 'author'){
						if($gpheight == ''){
							$gpheight = '69';
						}
					}else{
						if($gpheight == ''){
							$gpheight = '131';
						}
					}
				}
				break;
				}
			}

	if($tm1 == 'yes'){
		if($tmlayout == 'standard'){
			$tmstr='';
			if($tmwidth == ''){
				$tmwidth = '61';
				}
			if($tmheight == ''){
				$tmheight = '75';
				}
		}else{
			$tmstr="compact";
			if($tmwidth == ''){
				$tmwidth = '75';
				}
			if($tmheight == ''){
				$tmheight = '30';
				}
			}
		}

	if($bf1 == 'yes'){
		switch($bflayout){
			case 'horizontal':
				$bfstr="horizontal";
				if($bfwidth == ''){
					$bfwidth = '95';
					}
				if($bfheight == ''){
					$bfheight = '30';
					}
				break;		
			case 'vertical':
				$bfstr="vertical";
				if($bfwidth == ''){
					$bfwidth = '61';
					}
				if($bfheight == ''){
					$bfheight = '75';
					}
				break;		
			case 'no_count':
				$bfstr="none";
				if($bfwidth == ''){
					$bfwidth = '80';
					}
				if($bfheight == ''){
					$bfheight = '30';
					}
				break;		
			}
		}

	if($xi1 == 'yes'){
		switch($xilayout){
			case 'top':
				if($xiwidth == ''){
					$xiwidth = '61';
					}
				if($xiheight == ''){
					$xiheight = '75';
					}
				$xishape = '';
				$xicount = 'top';
				break;		
			case 'right':
				if($xiwidth == ''){
					$xiwidth = '95';
					}
				if($xiheight == ''){
					$xiheight = '30';
					}
				$xishape = '';
				$xicount = 'right';
				break;		
			case 'rectangle':
				if($xiwidth == ''){
					$xiwidth = '80';
					}
				if($xiheight == ''){
					$xiheight = '30';
					}
				$xishape = 'rectangle';
				$xicount = 'no_count';
				break;		
			case 'small_square':
				if($xiwidth == ''){
					$xiwidth = '40';
					}
				if($xiheight == ''){
					$xiheight = '30';
					}
				$xishape = 'smal_square';
				$xicount = 'no_count';
				break;
			case 'square':
				if($xiwidth == ''){
					$xiwidth = '70';
					}
				if($xiheight == ''){
					$xiheight = '60';
					}
				$xishape = 'square';
				$xicount = 'no_count';
				break;
			}
		}

	if($tf1 == 'yes'){
		switch($tflayout){
			case 'standard':
				$tfstr="";
				$tfstr2="false";
				if($tfwidth == ''){
					$tfwidth = '61';
					}
				if($tfheight == ''){
					$tfheight = '30';
					}
				break;		
			case 'show_name':
				$tfstr="";
				$tfstr2="true";
				if($tfwidth == ''){
					$tfwidth = '140';
					}
				if($tfheight == ''){
					$tfheight = '30';
					}
				break;		
			case 'large_standard':
				$tfstr="large";
				$tfstr2="false";
				if($tfwidth == ''){
					$tfwidth = '85';
					}
				if($tfheight == ''){
					$tfheight = '30';
					}
				break;		
			case 'large_show_name':
				$tfstr = "large";
				$tfstr2 = "true";
				if($tfwidth == ''){
					$tfwidth = '150';
					}
				if($tfheight == ''){
					$tfheight = '30';
					}
				break;		
			}
		}
		
	if($pi1 == 'yes'){
		if($pibtype == 'bookmarklet'){
			$pitype = 'none';
			}
		switch($pitype) {
			case 'vertical':
				if($piwidth == ''){
					$piwidth = '61';
					}
				if($piheight == ''){
					$piheight = '75';
					}
				break;
			case 'horizontal':
				if($piwidth == ''){
					$piwidth = '75';
					}
				if($piheight == ''){
					$piheight = '30';
					}
				break;
			case 'none':
				if($piwidth == ''){
					$piwidth = '70';
					}
				if($piheight == ''){
					$piheight = '30';
					}
				break;
			}
		}

	if($li1 == 'yes'){
		switch($lilayout) {
			case 'vertical':
				$listr="top";
				$margin_top = 3;
				if($liwidth == ''){
					$liwidth = '70';
					}
				if($liheight == ''){
					$liheight = '75';
					}
				break;
			case 'horizontal':
				$listr="right";
				if($liwidth == ''){
					$liwidth = '110';
					}
				if($liheight == ''){
					$liheight = '30';
					}
				break;
			case 'no_count':
				$listr="no_count";
				if($liwidth == ''){
					$liwidth = '70';
					}
				if($liheight == ''){
					$liheight = '30';
					}
				break;
			}
		}

	if($st1 == 'yes'){
		$ststr = $stlayout;
		switch($stlayout) {
			case '1':
				if($stwidth == ''){
					$stwidth = '85';
					}
				if($stheight == ''){
					$stheight = '30';
					}
				break;
			case '2':
				if($stwidth == ''){
					$stwidth = '75';
					}
				if($stheight == ''){
					$stheight = '30';
					}
				break;
			case '3':
				if($stwidth == ''){
					$stwidth = '57';
					}
				if($stheight == ''){
					$stheight = '30';
					}
				break;
			case '5':
				if($stwidth == ''){
					$stwidth = '61';
					}
				if($stheight == ''){
					$stheight = '75';
					}
				break;
			}
		}

	if($di1 == 'yes'){
		switch($dilayout) {
			case 'wide':
				$digstr='DiggWide';
				if($diwidth == ''){
					$diwidth = '120';
					}
				if($diheight == ''){
					$diheight = '50';
					}
				break;
			case 'medium':
				$digstr='DiggMedium';
				if($diwidth == ''){
					$diwidth = '61';
					}
				if($diheight == ''){
					$diheight = '75';
					}
				break;
			case 'compact':
				$digstr='DiggCompact';
				if($diwidth == ''){
					$diwidth = '80';
					}
				if($diheight == ''){
					$diheight = '30';
					}
				break;
			}
		}


	if($fb1 == 'yes'){
		switch($fblayout) {
			case 'standard':
				if($fbwidth == ''){
					$fbwidth = '450';
					}
				if($fbheight == ''){
					if($fbfaces == 'no'){
						$fbheight = '30';
							}else{
						$fbheight = '75';
						}
					}
				break;
			case 'button_count':
				if($fbwidth == ''){
					if($fboutput == 'iframe'){
						$fbwidth = '110';
					}else{
						if($fbsendbutton == 'true'){
							$fbwidth = '150';
						}else{
							$fbwidth = '110';
						}
					}
					}
				if($fbheight == ''){
					$fbheight = '30';
					}
				break;
			case 'box_count':
				if($fbwidth == ''){
					$fbwidth = '61';
					}
				if($fbheight == ''){
					if($fboutput == 'iframe'){
						$fbheight = '75';
					}else{
						if($fbsendbutton == 'true'){
							$fbheight = '100';
						}else{
							$fbheight = '75';
						}
					}
					}
				break;
			}
		}

	if($tw1 == 'yes'){
		switch($twlayout){
			case 'horizontal':
				if($twlarge == 'small'){
					if($twwidth == ''){
						$twwidth = '100';
						}
					if($twheight == ''){
						$twheight = '30';
						}
					}else{
					if($twwidth == ''){
						$twwidth = '120';
						}
					if($twheight == ''){
						$twheight = '30';
						}
					}
				break;		
			case 'vertical':
					if($twwidth == ''){
						$twwidth = '65';
						}
					if($twheight == ''){
						$twheight = '75';
						}
				break;		
			case 'none':
				if($twlarge == 'small'){
					if($twwidth == ''){
						$twwidth = '65';
						}
					if($twheight == ''){
						$twheight = '30';
						}
					}else{
					if($twwidth == ''){
						$twwidth = '85';
						}
					if($twheight == ''){
						$twheight = '30';
						}
					}
				break;		
			}
		}

	if($pi1 == 'yes'){
		switch($pitype) {
			case 'vertical':
				if($piwidth == ''){
					$piwidth = '61';
					}
				if($piheight == ''){
					$piheight = '75';
					}
				break;
			case 'horizontal':
				if($piwidth == ''){
					$piwidth = '70';
					}
				if($piheight == ''){
					$piheight = '30';
					}
				break;
			case 'none':
				if($piwidth == ''){
					$piwidth = '50';
					}
				if($piheight == ''){
					$piheight = '30';
					}
				break;
			}
		}

	if($go1 == 'yes'){
		switch($sizegoogle){
			case 'small':
				if($gowidth == ''){
					if($annotation == 'none'){
						$gowidth = '30';
						}
					if($annotation == 'bubble'){
						$gowidth = '60';
						}
					if($annotation == 'inline'){
						$gowidth = '250';
						}
					}
				if($goheight == ''){
					$goheight = '30';
					}
				break;
			case 'medium':
				if($gowidth == ''){
					if($annotation == 'none'){
						$gowidth = '40';
						}
					if($annotation == 'bubble'){
						$gowidth = '70';
						}
					if($annotation == 'inline'){
						$gowidth = '250';
						}
					}
				if($goheight == ''){
					$goheight = '30';
					}
				break;
			case 'standard':
				if($gowidth == ''){
					if($annotation == 'none'){
						$gowidth = '50';
						}
					if($annotation == 'bubble'){
						$gowidth = '80';
						}
					if($annotation == 'inline'){
						$gowidth = '250';
						}
					}
				if($goheight == ''){
					$goheight = '30';
					}
				break;
			case 'tall':
				if($gowidth == ''){
					if(($annotation == 'none') || ($annotation == 'bubble')){
						$gowidth = '61';
					}else{
						$gowidth = '250';
						}
					}
				if($goheight == ''){
					if(($annotation == 'none') || ($annotation == 'inline')){
						$goheight = '30';
					}else{
						$goheight = '75';
						}
					}
				break;
			}
		}		
	

	echo '<div class="shareit" style="'.$css.'">';

	for ($i = 1; $i <= 20; $i++) {

	if($go1 == 'yes' && $pluginParams->get('sbo1') == $i){
		if($gooutput == 'standard'){
				echo '<div style="'. $gocss.' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gowidth .'px; height:'. $goheight .'px;" id="go">'. $gojs .'<g:plusone size="'.$sizegoogle.'" annotation="'.$annotation.'" href="'.$gourl.'"></g:plusone></div>';
		}else{
				echo '<div style="'. $gocss.' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gowidth .'px; height:'. $goheight .'px;" id="go">'. $gojs .'<div class="g-plusone" data-size="'.$sizegoogle.'" data-annotation="'.$annotation.'" data-width="'.$gowidth.'" data-href="'.$gourl.'"></div></div>';
		}
			$offset = intval($offset) + intval($goheight);
	}

	if($fb1 == 'yes' && $pluginParams->get('sbo2') == $i){
				if(($fboutput) == 'iframe'){
					echo '<div style="'. $fbcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px;z-index:1000;"><iframe src="http://www.facebook.com/plugins/like.php?locale='.$fblocale.'&amp;href='. rawurlencode($fburl) .'&amp;layout='.$fblayout.'&amp;show_faces='.$fbfaces.'&amp;action='.$fbverb.'&amp;colorscheme='.$fbcolor.'&amp;font='.$fbfont.'" scrolling="no" frameborder="0" style="height: '.$fbheight.'px; width: '.$fbwidth.'px; border:none; overflow:hidden;" allowTransparency="true"></iframe></div>';
		 }elseif($fboutput == 'html5') {
					echo '<div id="fb-root"></div>' . $fbjs;
					echo '<div style="'. $fbcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width: '.$fbwidth.'px; height :'.$fbheight.'px;" class="fb-like" data-layout="'. $fblayout .'" data-send="'. $fbsendbutton .'" data-width="'.$fbwidth.'" data-show-faces="'.$fbfaces.'" data-href="'.$fburl.'" data-font="'. $fbfont .'"></div>';
		}else{
					echo '<div id="fb-root"></div>' . $fbjs;
					echo '<div style="'. $fbcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width: '.$fbwidth.'px; height :'.$fbheight.'px;"><fb:like href="'.$fburl.'" send="'. $fbsendbutton .'" layout="'. $fblayout .'" width="'.$fbwidth.'" show_faces="'.$fbfaces.'" font="'. $fbfont .'"></fb:like></div>';
			}
		$offset = intval($offset) + intval($fbheight);
	}

	if($li1 == 'yes' && $pluginParams->get('sbo3') == $i){
				echo '<div style="'. $licss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px; z-index:1000; width:'. $liwidth .'px; height:'. $liheight .'px;" id="li"><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="IN/share" data-url="' . $liurl . '" data-counter="'.$listr.'"></script></div>'; 
				$offset = intval($offset) + intval($liheight);
	}

	if($tm1 == 'yes' && $pluginParams->get('sbo4') == $i){
				echo '<div style="'. $tmcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px; z-index:1000; width:'. $tmwidth .'px; height:'. $tmheight .'px;"><script type="text/javascript">';
				echo 'tweetmeme_url = "'. $tmurl .'";';
				echo 'tweetmeme_style = "'. $tmlayout .'";';
				echo '</script><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>';
				$offset = intval($offset) + intval($tmheight);
	}

	if($tw1 == 'yes' && $pluginParams->get('sbo5') == $i){
				echo '<div style="'. $twcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px;z-index:1000; width:'. $twwidth .'px; height:'. $twheight .'px;">';
				echo $twjs . '<a href="https://twitter.com/share" class="twitter-share-button" style="width: '.$twwidth.'px;" data-url="'.$twurl.'" data-lang="'.$twlang.'" data-count="'.$twlayout.'" data-text="'.$title.'" data-hashtags="'.$twhashtag.'" data-related="'.$twuser.'" data-via="'.$twvia.'" data-size="'.$twlarge.'">Tweet</a></div>';
				$offset = intval($offset) + intval($twheight);
	}

	if($tf1 == 'yes' && $pluginParams->get('sbo6') == $i){
				echo '<div style="'. $tfcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $tfwidth .'px; height:'. $tfheight .'px;" id="tf">';
				echo $tfjs . '<a href="https://twitter.com/'.$tfuser.'" class="twitter-follow-button" data-show-count="false" data-size="'.$tfstr.'" data-show-screen-name="'.$tfstr2.'">Follow @'.$tfuser.'</a></div>';
				$offset = intval($offset) + intval($tfheight);
	}

	if($di1 == 'yes' && $pluginParams->get('sbo7') == $i){
				echo '<div style="'. $dicss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $diwidth .'px; height:'. $diheight .'px;" id="li">';
				echo $dijs . '<a class="DiggThisButton '.$digstr.'" href="http://digg.com/submit?url='.urlencode($diurl).'&amp;title='.urlencode($dititle).'"></a></div>';
				$offset = intval($offset) + intval($diheight);
	}

	if($st1 == 'yes' && $pluginParams->get('sbo8') == $i){
				echo '<div style="'. $stcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $stwidth .'px; height:'. $stheight .'px;" id="li"><script src="http://www.stumbleupon.com/hostedbadge.php?s='.$ststr.'&r='.$sturl.'"></script></div>';
				$offset = intval($offset) + intval($stheight);
	}

	if($re1 == 'yes' &&  $pluginParams->get('sbo9') == $i){
		if(($retype == 'button1') || ($retype == 'button2') || ($retype == 'button3')){
			switch ($retype) {
				case "button1":
					$spreddit = 'spreddit5';
					break;
				case "button2":
					$spreddit = 'spreddit6';
					break;
				case "button3":
					$spreddit = 'spreddit7';
					break;
				}


		echo '<div style="'. $recss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px; z-index:1000; width:'. $rewidth .'px; height:'. $reheight .'px;">';
		echo '<a target="_blank" href="http://www.reddit.com/submit?url='. $reurl .'&amp;title='. $retitle .'"> <img src="http://www.reddit.com/static/'. $spreddit .'.gif" alt="submit to reddit" border="0" /> </a></div>';} else {
	switch ($retype) {
		case "button4":
			$spreddit = 'button1';
			break;
		case "button5":
			$spreddit = 'button2';
			break;
		case "button6":
			$spreddit = 'button3';
			break;
		}


				echo '<div style="'. $recss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px; z-index:1000; width:'. $rewidth .'px; height:'. $reheight .'px;"><script type="text/javascript">reddit_url = "'. $reurl .'"; reddit_title = "'. $retitle .'"; reddit_bgcolor = "'. $rebgcolor .'"; reddit_bordercolor = "'. $rebordercol .'"; </script>';
		echo '<script type="text/javascript" src="http://www.reddit.com/static/button/'. $spreddit .'.js"></script></div>';}
		$offset = intval($offset) + intval($reheight);
	}

			if($pi1 == 'yes' && $pluginParams->get('sbo10') == $i){
				echo '<div style="'. $picss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $piwidth .'px; height:'. $piheight .'px;">';
				echo $pijs . $piposturl;
				echo '</div>';
				$offset = intval($offset) + intval($piheight);
	}
	
			if($bf1 == 'yes' && $pluginParams->get('sbo11') == $i){
				echo '<div style="'. $bfcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px; z-index:1000; width:'. $bfwidth .'px; height:'. $bfheight .'px;"><a href="http://bufferapp.com/add" class="buffer-add-button" data-text="'.$bftext.'" data-url="'.$bfurl.'" data-count="'.$bfstr.'" data-via="'.$bfuser.'">Buffer</a><script type="text/javascript" src="http://static.bufferapp.com/js/button.js"></script></div>';
				$offset = intval($offset) + intval($bfheight);
	}

			if($xi1 == 'yes' && $pluginParams->get('sbo12') == $i){
				echo '<div style="'. $xicss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$offset. 'px; z-index:1000; width:'. $xiwidth .'px; height:'. $xiheight .'px;"><script data-button-shape="'.$xishape.'" data-url="'.$xiurl.'" data-lang="'.$xilang.'" data-counter="'.$xicount.'" type="XING/Share"></script>';
				echo '<script> ;(function(d, s) {
    var x = d.createElement(s), s = d.getElementsByTagName(s)[0]; x.src ="https://www.xing-share.com/js/external/share.js";
    s.parentNode.insertBefore(x, s); })(document, "script");
</script></div>';
				$offset = intval($offset) + intval($xiheight);
	}

			if($gs1 == 'yes' && $pluginParams->get('sbo13') == $i){
		if($gsoutput == 'standard') {
				echo '<div style="'. $gscss.' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gswidth .'px; height:'. $gsheight .'px;" id="gs">'. $gsjs .'<g:plus action="share" width="'.$gswidth.'" height="'.$gsheight.'" annotation="'.$gs_annotation.'" href="'.$gsurl.'"></g:plus></div>';
	}else{
				echo '<div style="'. $gscss.' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gswidth .'px; height:'. $gsheight .'px;">'. $gsjs .'<div class="g-plus" data-action="share" data-annotation="'.$gs_annotation.'" data-href="'.$gsurl.'"></div></div>';
	}
				$offset = intval($offset) + intval($gsheight);
	}

	if($gb1 == 'yes' && $pluginParams->get('sbo14') == $i){
		$gbwidth2 = intval($gbwidth) + 10;
		if($gbfeatures == 'icon') {
			echo '<div style="'. $gbcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gbwidth2 .'px; height:'. $gbheight .'px;">';
			echo '<a href="//plus.google.com/'.$gbpage.'?prsrc=3" rel="publisher" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:0px;">'.$gbcustom.'</span><span style="display:inline-block;vertical-align:top;margin-right:13px; margin-top:0px;">on</span>
<img src="//ssl.gstatic.com/images/icons/gplus-'.$gbheight.'.png" alt="Google+" style="border:0;width:'.$gbheight.'px;height:'.$gbheight.'px;"/></a></div>';
		}else{
			if($gboutput == 'standard') {
				echo '<div style="'. $gbcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gbwidth2 .'px; height:'. $gbheight .'px;">';
				echo '<g:plus width="'.$gbwidth.'" height="'.$gbheight.'" href="//plus.google.com/' .$gbpage.'" rel="'.$gbpagetype.'" theme="'.$gbcolortheme.'"></g:plus></div>';
				echo $gbjs;
			}else{
				echo '<div style="'. $gbcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gbwidth2 .'px; height:'. $gbheight .'px;">';
				echo '<div class="g-plus" data-width="'.$gbwidth.'" data-height="'.$gbheight.'" data-href="//plus.google.com/' .$gbpage.'?rel=' .$gbpagetype. '" data-theme="'.$gbcolortheme.'"></div></div>';
				echo $gbjs;
			}}
				$offset = intval($offset) + intval($gbheight);				
	}

	if($gp1 == 'yes' && $pluginParams->get('sbo15') == $i){
		$gpwidth2 = intval($gpwidth) + 10;
		if($gpfeatures == 'icon') {
			echo '<div style="'. $gpcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gpwidth2 .'px; height:'. $gpheight .'px;">';
			echo '<a href="//plus.google.com/'.$gppage.'?prsrc=3" rel="publisher" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:0px;">'.$gpcustom.'</span><span style="display:inline-block;vertical-align:top;margin-right:13px; margin-top:0px;">on</span>
<img src="//ssl.gstatic.com/images/icons/gplus-'.$gpheight.'.png" alt="Google+" style="border:0;width:'.$gpheight.'px;height:'.$gpheight.'px;"/></a></div>';
		}else{
			if($gpoutput == 'standard') {
				echo '<div style="'. $gpcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gpwidth2 .'px; height:'. $gpheight .'px;">';
				echo '<g:plus width="'.$gpwidth.'" height="'.$gpheight.'" href="//plus.google.com/' .$gppage.'" rel="'.$gppagetype.'" theme="'.$gpcolortheme.'"></g:plus></div>';
				echo $gpjs;
			}else{
				echo '<div style="'. $gpcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $gpwidth2 .'px; height:'. $gpheight .'px;">';
				echo '<div class="g-plus" data-width="'.$gpwidth.'" data-height="'.$gpheight.'" data-href="//plus.google.com/' .$gppage.'?rel=' .$gppagetype. '" data-theme="'.$gpcolortheme.'"></div></div>';
				echo $gpjs;
			}}
				$offset = intval($offset) + intval($gpheight);				
	}

			if($em1 == 'yes' && $pluginParams->get('sbo16') == $i){
				$imagemail =  JURI::root() . 'plugins/system/easylikeandshare/easyshareassets/' . $emimage;
				$emailpath =  JURI::root() . 'plugins/system/easylikeandshare/taf/index.php?tmpl=component&task=preview';
				echo '<div style="'. $emcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $emwidth .'px; height:'. $emheight .'px;">';
				echo '<a href="'.$emailpath.'" class="modal" rel="{handler: &quot;iframe&quot;, size: {x: 600, y: 650}}"><img class="emailbut" src="'.$imagemail.'" alt="email this page" /></a></div>';
			$offset = intval($offset) + intval($emheight);
	}

			if($fs1 == 'yes' && $pluginParams->get('sbo17') == $i){
				echo '<div style="'. $fscss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $fswidth .'px; height:'. $fsheight .'px;" >';
				echo $fsjs . '<a name="fb_share" type="'.$fsstyle.'" share_url="'.$fsurl.'" href="http://www.facebook.com/sharer.php">Share</a>';
				echo '</div>';
				$offset = intval($offset) + intval($fsheight);
	}

			if($ds1 == 'yes' && $pluginParams->get('sbo18') == $i){
				echo '<div style="'. $dscss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $dswidth .'px; height:'. $dsheight .'px;" >';
				echo $dsjs . '<a class="delicious-button" data-button="{
	button:&quot;'.$dsstyle.'&quot;
	,url:&quot;'.$dsurl.'&quot;
	,title:&quot;'.$dstitle.'&quot;
}">Save on Delicious</a>';
				echo '</div>';
				$offset = intval($offset) + intval($dsheight);
	}

			if($fq1 == 'yes' && $pluginParams->get('sbo19') == $i){
				echo '<div style="'. $fqcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $fqwidth .'px; height:'. $fqheight .'px;" >';
				echo '<a href="https://foursquare.com/intent/venue.html" class="fourSq-widget" data-variant="'.$fqstyle.'">Save to foursquare</a>';
				echo '</div>';
				echo $fqjs;
				$offset = intval($offset) + intval($fqheight);
	}

			if($fl1 == 'yes' && $pluginParams->get('sbo20') == $i){
				echo '<div style="'. $flcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':'. $offset. 'px;z-index:1000; width:'. $flwidth .'px; height:'. $flheight .'px;" >';
				echo '<a href="https://foursquare.com/user/'.$flid.'" class="fourSq-widget" data-type="like" data-fuid="'.$flid.'" data-variant="'.$fqstyle.'" data-user-name="'.$flname.'">Like us on foursquare</a>';
				echo '</div>';
				echo $fljs;
				$offset = intval($offset) + intval($flheight);
	}

	}

			if($backdrop == 'yes') {
				echo '<div style="border-style: '.$bkdropborder.'; border-width: '.$bkdropborwidth.'px; display:block; width:'.$bkdropwidth.'px; height:'.$bkdropheight.'px; background-color: #'.$backdropcol.'; '. $bkdropcss .' position:'. $positioning .';'. $orientation .':'. $iconori .'px;'. $toporbot .':' .$padbottom. 'px; z-index:999;">';
		}		

	echo '</div>';	

		$str_html = ob_get_contents();
		ob_end_clean();
		
		$body = JResponse::getBody();
		$body = str_replace('</body>', $str_html.'</body>', $body);
		JResponse::setBody($body);
		
		return true;
}

  function onContentBeforeDisplay($context, &$article, &$params, $page=0){
    	$doc = & JFactory::getDocument();

	$ogtitle = str_replace('"', '&quot;', $doc->getTitle());
     	$ogtitle = str_replace('amp;', '', $ogtitle);
	$uri = & JURI::getInstance();
     	$ogurl = $uri->toString( array('scheme', 'host', 'port', 'path'));

	$ogtags = $this->params->get('ogtags');
	$ogdescription = $this->getBody($article, $context);


	if($ogtags == 'yes'){
		
	   $this->params->get('ogtype') != '' and $ogtype = $this->params->get('ogtype');
	   $this->params->get('ogtitle') != '' and $ogtitle	= $this->params->get('ogtitle');
	   $this->params->get('ogdescription') != '' and $ogdescription = $this->params->get('ogdescription');
	   $this->params->get('ogimage') != '' and $ogimage	= $this->params->get('ogimage');
	   $this->params->get('ogurl') != '' and $ogurl = $this->params->get('ogurl');
	   $this->params->get('ogdeterminer') != '' and $ogdeterminer = $this->params->get('ogdeterminer');
	   $this->params->get('ogaudio') != '' and $ogaudio = $this->params->get('ogaudio');
	   $this->params->get('oglocale') != '' and $oglocale = $this->params->get('oglocale');
	   $this->params->get('ogsitename') != '' and $ogsitename = $this->params->get('ogsitename');
	   $this->params->get('ogvideo') != '' and $ogvideo = $this->params->get('ogvideo');
	   $this->params->get('ogimagesecure') != '' and $ogimagesecure = $this->params->get('ogimagesecure');
	   $this->params->get('ogimagetype') != '' and $ogimagetype = $this->params->get('ogimagetype');
	   $this->params->get('ogimagewidth') != '' and $ogimagewidth = $this->params->get('ogimagewidth');
	   $this->params->get('ogimageheight') != '' and $ogimageheight = $this->params->get('ogimageheight');
	   $this->params->get('ogvideosecure') != '' and $ogvideosecure = $this->params->get('ogvideosecure');
	   $this->params->get('ogvideotype') != '' and $ogvideotype = $this->params->get('ogvideotype');
	   $this->params->get('ogvideowidth') != '' and $ogvideowidth = $this->params->get('ogvideowidth');
	   $this->params->get('ogvideoheight') != '' and $ogvideoheight = $this->params->get('ogvideoheight');
	   $this->params->get('ogaudiosecure') != '' and $ogaudiosecure = $this->params->get('ogaudiosecure');
	   $this->params->get('ogaudiotype') != '' and $ogaudiotype = $this->params->get('ogaudiotype');
	   $this->params->get('oglatitude') != '' and $oglatitude = $this->params->get('oglatitude');
	   $this->params->get('oglongitude') != '' and $oglongitude = $this->params->get('oglongitude');
	   $this->params->get('ogstreet-address') != '' and $ogstreetaddress = $this->params->get('ogstreet-address');
	   $this->params->get('oglocality') != '' and $oglocality = $this->params->get('oglocality');
	   $this->params->get('ogregion') != '' and $ogregion = $this->params->get('ogregion');
	   $this->params->get('ogpostal-code') != '' and $ogpostalcode = $this->params->get('ogpostal-code');
	   $this->params->get('ogcountry-name') != '' and $ogcountryname = $this->params->get('ogcountry-name');
	   $this->params->get('ogemail') != '' and $ogemail = $this->params->get('ogemail');
	   $this->params->get('ogphone_number') != '' and $ogphonenumber = $this->params->get('ogphone_number');
	   $this->params->get('ogfax_number') != '' and $ogfaxnumber = $this->params->get('ogfax_number');



	$this->setTags('type', $article->text, $doc, $ogtype);
	$this->setTags('title', $article->text, $doc, $ogtitle);
	$this->setTags('description', $article->text, $doc, $ogdescription);
	$this->setTags('url', $article->text, $doc, $ogurl);
	$this->setTags('image', $article->text, $doc, $ogimage);
	$this->setTags('determiner', $article->text, $doc, $ogdeterminer);
	$this->setTags('audio', $article->text, $doc, $ogaudio);
	$this->setTags('locale', $article->text, $doc, $oglocale);
	$this->setTags('sitename', $article->text, $doc, $ogsitename);
	$this->setTags('video', $article->text, $doc, $ogvideo);
	$this->setTags('imagesecure', $article->text, $doc, $ogimagesecure);
	$this->setTags('imagetype', $article->text, $doc, $ogimagetype);
	$this->setTags('imagewidth', $article->text, $doc, $ogimagewidth);
	$this->setTags('imageheight', $article->text, $doc, $ogimageheight);
	$this->setTags('videosecure', $article->text, $doc, $ogvideosecure);
	$this->setTags('videotype', $article->text, $doc, $ogvideotype);
	$this->setTags('videowidth', $article->text, $doc, $ogvideowidth);
	$this->setTags('videoheight', $article->text, $doc, $ogvideoheight);
	$this->setTags('audiosecure', $article->text, $doc, $ogaudiosecure);
	$this->setTags('audiotype', $article->text, $doc, $ogaudiotype);
	$this->setTags('latitude', $article->text, $doc, $oglatitude);
	$this->setTags('longitude', $article->text, $doc, $oglongitude);
	$this->setTags('street-address', $article->text, $doc, $ogstreetaddress);
	$this->setTags('locality', $article->text, $doc, $oglocality);
	$this->setTags('region', $article->text, $doc, $ogregion);
	$this->setTags('postal-code', $article->text, $doc, $ogpostalcode);
	$this->setTags('country-name', $article->text, $doc, $ogcountryname);
	$this->setTags('email', $article->text, $doc, $ogemail);
	$this->setTags('phone_number', $article->text, $doc, $ogphonenumber);
	$this->setTags('fax_number', $article->text, $doc, $ogfaxnumber);
		}
  }

private function setTags($ogtag, &$article, &$doc, $tagvar) {

		$oglen = strlen($ogtag) + 2;

		if (strstr($article, '{'.$ogtag.'}')) {
			$start1 = strpos($article, '{'.$ogtag.'}') + $oglen;
			$end1 = strpos($article, '{/'.$ogtag.'}');
			$stend = $end1 - $start1;
			$tagvar = substr($article, strpos($article, '{'.$ogtag.'}') + $oglen, $stend);
			$articletemp = $this->rstrstr($article, '{'.$ogtag.'}');
			$articletemp .= substr(strstr($article, '{/'.$ogtag.'}'), ($oglen +1));
			$article = $articletemp;
		}

	if($tagvar != 'none'){
		$tagvar != '' and $doc->addCustomTag( '<meta property="og:'.$ogtag.'" content="'.$tagvar.'" />' );
	}

}

    private function getShortUrl($link){
        
        JLoader::register("EFShortUrlEasyLike",JPATH_PLUGINS.DS."system".DS."easylikeandshare".DS."efshorturleasylike.php");
        $options = array(
            "login"     => $this->params->get("shortLogin"),
            "apiKey"    => $this->params->get("shortApiKey"),
            "service"   => $this->params->get("shortener"),
        );
        $shortUrl 	= new EFShortUrlEasyLike($link,$options);
        $shortLink  = $shortUrl->getUrl();
        
        if(!$shortLink) {
        	$message   = $shortUrl->getError();
        	jimport('joomla.error.log');
            $log = &JLog::getInstance();
            $log->addEntry(array('comment' => $message));
        }
        
        return $shortLink;
            
    }

    private function getBody($article, $context) {
		$search = array('@<script[^>]*?>.*?</script>@si',
               		'@<[\/\!]*?[^<>]*?>@si',          
               		'@<style[^>]*?>.*?</style>@siU',  
               		'@<![\s\S]*?--[ \t\n\r]*>@'       
				);

		$temp = preg_replace($search, '', $article->text);
		$temp = str_replace('"', '&quot;', $temp);

		$temp = substr($temp,0,250);
		return $temp;

		}

  private function rstrstr($haystack,$needle)
    {
        return substr($haystack, 0,strpos($haystack, $needle));
    }


}
?>