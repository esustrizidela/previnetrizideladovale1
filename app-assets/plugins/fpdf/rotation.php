<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');