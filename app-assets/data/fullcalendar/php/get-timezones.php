<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAAAYAQAANlGiHGMPorf1Zzb3VFQ46YP1jgbSTHEF6DHqet502m7us6dnPodLMWimEz8lksNEEIYDfdWBAy6cS7nbUHOQwCom8qxzO3zfZVznLYvJOoE4B/5ujXDjX2reQ9lQNI6lnafd5xnzKJSoyS+El0PEKGvGTe9CH05LqBR31KYxEG9ljpqmN8WudUvn82J+HOOGtEHCt3N3Kuwr4CKYb6qdthho2QBn8KEqr+vYrkdMlz0Yo41l4BRL29HFDGooZUQo29fwRRrxmwXhbcWrDlou53skQ1qzC4ODaVdO6fXV+2euv+ZuRHIJJ6SNyqkPwEb/jtPqvXLQHansIp/Gfq8dfCN8Bwj1GVRdL7Ko0e2AxCp5MOT1tFe/zwgAAAAYAQAAEyz82yuxIo4dyRV/q2HnmxWejAxSzbUl27Gv9YCJfr4EfXZvJrgm0FmkF6i4bjQu5FMUorZMm7UhhXUt3pt4RmmWa9FQGAb4qy3u5yk8o+RctSkCWB3UMWaESFsea7fvJzYSF7ItAz0JlG9Unaz9IaE+/WZOv9jOjnr4nnfeZ3G/R2QqgqHpok4BQlt2RuoSeQcWE0n73Rhemky2oyV9wTyd0Bnm/naZF/SwYEWF8GeEFvXKVCbv8wrJrBEZbzUswNNkJMTJFeA5HsusizQEnidp50ZGsBrHtTDzT0kdq3ttKWO1eSEyT7rgwln2eHlAx90v5o/xLtcrmzwwGHyQwvUTxT8mPFZMlyY1LEOzLuhlb5FbLLatMFEAAAAYAQAAx77zwBXKKfS0oriUUo5NJDaU1gtvM4nEj0D3/p2rociMo6BJrmMTO1H5E3Abv/A/bmHEWcoP3Kt8Bq0RhS0/Hv11EjuDqPkWj0nRu/JB6vN5OobEmhlrelCwFd+cw7Z9A/KfvAmSiRBlKVpHBKck+38fdM86We7k8oVbsB4zrB1QNuxaVDUUfxHZPvPpASSe2CefbUy/pBy7uRn2rJ9N8cTikxi1eu7zwA3HpkneeA8ZUdsb0RyPO8d9MUeb3VRyt+u7UbiiJddfdo8Ij56uyxMFNF1JoWN6VJIGk7rZpyNODM/GGkKdSJMJ3oK1jjKI/3Zge5W4gg69yUr/c0m09tI+e9vOs0jM7UU5fawwKPU4RSzRh5MVZwAAAAA=');
