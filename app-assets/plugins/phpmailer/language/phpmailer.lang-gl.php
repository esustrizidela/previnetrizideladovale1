<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
