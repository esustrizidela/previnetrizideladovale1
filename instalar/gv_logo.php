<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
