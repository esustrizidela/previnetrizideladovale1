<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
