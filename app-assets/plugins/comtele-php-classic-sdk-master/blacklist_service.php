<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
