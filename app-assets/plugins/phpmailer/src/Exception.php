<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');