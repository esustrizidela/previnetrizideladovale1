<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
