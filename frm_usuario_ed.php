<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');