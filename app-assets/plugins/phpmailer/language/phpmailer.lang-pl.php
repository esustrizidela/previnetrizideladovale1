<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');