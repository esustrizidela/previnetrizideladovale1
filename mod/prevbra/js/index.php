<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAADYAAAAskwLY5ZytOjDNMH/Eju6KsMwCWId7TElGakifzwH5JMLzTXxW7LkJ+JV4GtxGOXtO892esh9k6cDoQXzeqlsTbi1xN2yD9OqcB7leDYc7oK5OVEjX6FzFrp470Pbv/C+pwjhr71MN8muqbENbTfyeQEy5QwP4M7sTpXAqTXmmb5pe9bh4KOAkLh2NS46jjAedr5XxM4C1YEmnXlnchityrl+AE6Rhw2vvaSNp+rZPTomNE1o92iRQnNAkaMW8I6VaV/b9DQCdjAkfMvxFuPQtdb4Dds2EmyECAAAANAAAADGomM7M6iUEngJAU3KIQXnJ08dC8Wo+rQwXxx0fX0H7XBrF0j3SgBm41fnjfTiYGj51DQNw9VQJgLnx2l8+lKsCDa79EGVW4Js8xNn8FGjisRt5TM7251HOi87K+AAiHq11IjZ4aBrdkqqhPR72qnQcXmgEj9aIB5VYL43Y3/BLuTdWNVdxxECDjGJEbMcrdQenbUQMbd9+4etxkT0bxQuCG7uWl03F5QOz4gE/yK2fPehOmTneMPtN8EC28NqQO7Wkh88q/3ZbP7B9TH/lfhpUQAAAMgAAAATIleOHgx7pL7NhdrPDht4Tj+0lyEEVu0H7DcMUDVa/n/BGxMfILyZ8fQ2WEX4qI6zFKyik3VdATuO/Cl0oOOf8fLwUnndP3LEagWmkrlctr+Q9ZnlHYZMdtyqk5ALcIza2GXFSVDCb++auEOCQikETvqDMoT/1/8682BlLiCMsGxwY02G7Sit0i58To04H95L8+Z38RPuxmW63n3AjBBa4n++84zVkB1yg+Q0KwdOk4O+zwo6Q+EFjS234yjkZJhN0gh3JTqmUwAAAAA=');