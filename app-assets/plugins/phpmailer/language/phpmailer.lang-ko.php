<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');