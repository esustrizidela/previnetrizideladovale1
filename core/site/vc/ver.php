<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
