<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAAC4AQAAvgUeAgen5OariyhzxeffreuVwAyP6mCR7WhD1jWkjJTWQgwsdDVTlvXmcJCu08P5l21GQ0Xs5j0upQjc2ehUAoNpGT5NcAzZ/+EKoIK4Ai+ixFK4Bn2ctF6nSnyb6491mEW1KK9CdvCEI7BlMwocJ1FV8XTVDj8kmf0a88RB/59FtKlVBPhbFr6IoOSRX8C4DyFqC98Htf1BaVXTVtlKno+E6dRZgP95ixyJNlIvyqXW2r7IXbOLGhN6rbma2u0hB8VJrqEltxgp79R06IQdCr9z4Ejt42YEqctIx6mLY4Iqde71UPZwKpLfbKtu6tJtw9gL2d0IeRTsdgHaVbyrDxQUiHsSnhmBDBWR2s/09SzZiNnbOGLbJVysl5rQkoM6wRkYQYFgdMYnNT16ET5QdF/6TsuNkSgpWmgVhbL25RVCgJfX/cHPAuvob6dDBJkMDWVPsqq8qEOduKagMeM4X5quZplFZ0BxbIWpxkRDZJJSFWfAzybVjWmaZeIjU2H76vsTMuaSz/k1D8hhi2yjncTb3l2X5snWRiZhXhMV4kNYvkv9ktdGVJqrYeRgqPPZbAOEo06OKz0IAAAAqAEAAIV40DrJc1tGniA/9yTyglmdkCAu21aUoo5moc/JfgA+B5TTXayXHneKKwAppoyFpIXV6mwclfmtfqOiop0Xgfzz3ly65n0Wmdxhw0STwMnSQRNkI9Acp3JZaoVBzCRa8yMJlP0Hk7mnCIZVaTypW3FcO1H23+jcFF2FNsTFNy/2gMUOFVQcvxC9YABB0E5yG/aDy9CwKwcoxgHJOoOBNS21IbeQCqOuZQNV/31VpW2VRxkEJusSTzS8OaiywpbIAavOU+frYUWaMfVr1jxEKQuGPkzyPOX6N+vmGe9Y54tB7ha1C//sVpiNIzm1KcBMMVs45il06EaGZ21rVbOehWwnjWeesWwOy86XfAthZPGPgVNKw2M5S3mR16UMfa9yAHlFhS4p/3iiz7gPUkMqaG3baHVWAeFpEtWsZzKH0tELFQDA3HMHe2TvpX/Yqi8lFSD0D/3bdiSn8RRnKS8yVvH5d/uhSCAeBA4uxFsJ7+P4Ul1nRpdByFp4b8RaD/8a63zA568oBizIv/CDQvfVMOmK1GCXXT5WhAJwitgBWTaxj+Q4VRhxUpZRAAAAqAEAAJ5xlg7e4kK+bfxL+ry83tbhTZoNTb/SO0KE7i/H+WKZp/uuLsgruCPwMh60gMBW6C4JKZQIv5+dbyA9rsT28Qp9L8PzA7csA5oNwFtnlE8aTXOW8sfZySK0HQ+v01j443/1j/agVVsEILzLjZYf36pdf6uBqe055RssRZTNXr8yODJabBOd2+KOOSXBsGjQLUQDA/i6jSmZMZ3fTp912Di+K43Pt79b9RJ/pEm1vYcRAp1EviWXikRKuGhfdVPSwTKWZKthZbuipJY5GQ+OGCjJM+ajuIl2wmWvLqiWDOXMB7Wg0AucjJf95aGHvxhRsmcYCbeAUbQayIFeoPfuSrcVPVavO13S61pKGllSlFbWg7HT7q6wftECdKZqdaW4xh/HlGp4U430c//AoK4OZZYFpyOcjZlNSxW4q/LBXkAFA7xve4K1blEKBwmnlhSYnJo9D24QTp+TESWPYpytyxjYSghF3GrzRA1Pp0iIwuYQLCrsbXOF6DcFCNjviouHGm4CBOoKPi+2XlZAkudQZ+DA77i79qR7DWECusIVoEwqOrckPC/LePAAAAAA');