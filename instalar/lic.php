<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
