<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');