<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAACoBQAA3vSkdBdm9bLQenZxjz+HLnUdOTK8vAyuC/TqPK1CI+p6B3pRZnuq9xmvQIyr//rMr/s/VoEnZnKcCUiov7Hj32H0d9B5fAOw5XjqVtD3PDoQ+zwMgs4uphwqA9GyH3bE4vaSakM/oK4qX57L8di1lSYIIl+daIEExYV/WATjSncmDxP8y6hqHHj6SQOLoEAV9ry4J/GQxixQJq5mfzp604uyGztkp0cDu4IJxZr28xI1CTbQ6F4Po0RDTawOoCDvFCB+PGe9IsHaOQBfjqo9VVz7WFi54KhU/2vXLMkA7hVVLtX/HTJy5Jvj0sCcDSAA5Kv/qFsoyG7F8RVvRakJ93f4NeArKCVdsg3+Evs0QFFgrU+NsZ0HtICHX8xJUCxEnAeG9pE/RjDSaqGcE1VshRvMmeV92gZqAoqN2C2ljTq42uxk21asdqmId6x87f7/VNU/mj9yVRONhlZh1iV10tDvzbb7ElH06n+hCoJyI2qrLG6SX8zn8IRHbhc4IQ+8qOBBPnwQcMpTOQhRA45UT5q3GpPldYRMmPHuOVKt2IQbQ2MZ5W/tfp4qdTpH0cldD1R4NBQhG62Avmvz45CkK/P7i2x9xqzhSX1zLeRdYUTuebNxCMnEdJgXtXUwmvbGZjYfSO2b0m0zDvB+hdHjEu1aYlM2iCvOr9TdUg6YBbHgpqMf8ZCUpuZ0cq74bgfiE0fLq3Pv3VH06i8JDiMQfEoyp7hGsDv5ZMKLmmQh00grTYMNCGaV65UMQE2dr7+5eqJQTZHCY3LuMF8wf5/xf4eGoB9SMQjf5eBS/ghyLPtfzXhWn0JnF2jUPNVWqF+/zEhlpXiHRau7wyxMurT+asWRrRiad1WVQa1jegoS3f7F1N/l90EQWAI/148yEsRC34a5JKC1CQz9X4l5QtxjoTQ44A3zCL7VAZdPZBrw5CLvuDODSZWE18xKyMIjuD9Znb5zIflk05Txg/jaZzxIEeVifFAuAqScX8ozpfZdkCvkiWSjjFovVBdZWAwqjvHStMTuyApjzSKfAT2Ngg/4VtV3lxHxHgdCz1aDXngOgYYWA3zFohNa4ktSt6TWBtZLJii38YQl77s1dU0aHg3d371LI3PbntEPioPZTFDH39/QAKdwP2C5pVLoEmz++Op+yQ2FZT7nBNdh6VP2yoFSgazZYG5UpvrEY+5vWb3Yl/wsygUbPMuu/JEx8/s2vi1gdRUtvO66HHgdJnjjl+/6Bm2GDy+wZAj7q0RD5aL163Ff6e7fFxOcESZYjLbMu4m35sSc+M2SRNmy6MszH91L9uPQFYjYz8TPuAS/i1jV5qDD5wDM5wR3wqzEfKiRmUSuT/ddar31SIWwo9x71g/w1lV9Fsf3xl8vvdjkkOZn2FYbmsUUcPRlzHP05Oa5M4YViRivkyMo82OVvB6XJm+zT3L/3X8cnfWKfCU2WkK1+KHxveGcK+UL0S4BOjd3/izmawdOqb1J3lDsIsBOI7nC5M9ImM0hEZiU3X5rUa8/bRkw40qoUerbRYqb8F5sEu+fuq9WrU9gDc/2Yis8ugD7Um8PoA7+wSKydLB02jCjsF9LEbgo6yk/5SLObmwitIbVJtWCtvJ7JbLUXBIYb/qmoiY6oJHsm5rDb6joToPVl/Z8t2Fq6Ba+0hZScXDIK8UveDevCJy9XstlieZEBV/FizybE6Ngv9hlKsG/rau1PFMgfz8epmm4QVkH03LIqIsow1nJ6Iz5XRrqpK9h9xmQrfBwcSbh09iI1OFVtzcV7FluWmile5R/KqHzc0VPIig+Ll5TzTRbEb+/RgnNgxi3zsepHt6B9lE3OT4C2e9wEhrWpx8/sU/P3oS2lZpWsm/IAo4Ak1Kz51SbAWOIzAyW4C1PWPEyRCKUvon6udvIQUdUvjeaBjEO6gzctVvdRH9mJ0W7RcjWOW0IAAAAqAUAANjcqYHTjY94XE6s6dNrbH6AYwQhuYM8/QHwwampZCeonX9e2qGxxHt+xlK2Ew6/JnYr+Kas8bYZqiA2K7C+Q1fLGMF09jAHe/R/e0srzSQxyvMq5YkRoKVhisvGb+Pl16s2C/UhrNHeKiZh2F+30cy3UvDsrxVm01SqQWfft9oy03f+tTNgHmE7wmnizJyL1pKYg9dMSksZmIzrUdeHAhcUefjryefDJ8Wcm4hO7TvMddXSq8sr3tL8coTSN3TrgMA0fwLpQTVCFgZxejdVbqwabAWH0ouIRTaUKhQpVWQmMyT+VFa7MS+UxM9/DyqtQmJsAlwWcMf1Oop6N5paANyaCaFbzmoQbNThhTWVlXIzR8hz30Yh0kVvOcW9upZptAl6Dh8zwg/mPSmuLhWSS8dXz3ubzBwBMLGLgSHiK0HGRTpY405ojFafpevfLemO/ITZf7M6i4z4d8EGEFsrYkFB0dvzdvsXzNbQINJyC93dNoHuFXfIlPKdnXwvxIlejSacC4Zfx5ZXnWoEhGfMCq6pJJmPIYU6UR7Hz+KE2UCK5/EKSdR+3vuu/ovaDx18wJlcTx+LvFB2nXT8pRQ8zGtw1o1pAzUXUFv5ZcMbrU4OnMJLkS4cI2AaWBgweJ0hDJeFBtWZtD7bbaS32uF6/NayqrKWUG26ThJLCKTCThLef8433Y5fjYdcpzBP4yCv1DtNG9kScHdMprwKV4/o6XUm5MaSwqd++WZq9nrl0vIODo+/YXTePCOxt59azBEWpk6U5TQG/eCEpP/jRLDl2EQ8TJYn9zGMb3dpvQ/S0poBWcXV+R7+1s4abp5WZIaKBI47c+0uwHKxUWbr7ney9wu3rEVGr+cIwCg+4OG+kWHVpNgTLxzPN1sNEXgnJJa3wipsDQ//uUIVELJ7wuilXi8Kx15lgoSRSKG2Ps6Qb/pE8hXVqX3UQIz7CpVhRTc2Y30hYTnebhlgUzkIbFNaHK6gaWxQ8yc4pjMxMqs0ZjU4B7WxHB76QyPUJk+/8ELDRgkWKODVWg7P7C/NtOAlVlbtCLU0njVY14GYqQZGh1hsEmsSvS+Qx3dtm/vJakG03dlOh7OCt5eVVT1eGryKt0aH1LJQWtH2xc7a6Ni8NeO50x0krS56/Ce03IW912W3WfWdqDQbXGnW9/vFP++phRd1M66Mjml0x9jCsSvHcJ5WnMZlW2SJAGfW8gCgObngs0FegAm686bAazqObvVDbT2oht/Y+YIjhgVjR4+lQypQW9G4m7ATgXSQpS291MLWZLr78WQ+Ht+vX65882KCe+oOVfLs5+PdFpMFllIYRnMn4DBptpqGIUrFAMKTrJXCRpm7fF6w9tFvusG+SFSk5jqnYc4d4w27GvwYHq7dLIuT/XQ/WSvAHjF9/xdpSNDKFKnVTlA1dz61t0U4Y1wf6DXkgyhlQdN6fz51gqHY7jaQiPm9x/U9bGsnF4I5XwL+MMPG5CL+eFOnvk0AOhy4HUG87C4v+I2U7NNzCKxB2yfSwcSTTtQwL6laNbJLX2P2i6e0QaX2qx1WzAnsZeLCIjLmROx2bx39Zr9HgPKG4STsRizG1PljA2c64CmlqgGlOYVb+nolk+8LlqqbxqPj6GzNafSE1mdYjW1swAYW9d75tQ9HvctwKePEehHy3U8mxzLYgZFsgYfTmKXa9isBNgd6MPAJyjPWUM+t8HHwIdFbjc9tMCEwMPbj98X4bMCUva48FchyESR2N2NUHDl9o1LRAAGIe6DeDs5BXEYV+rs0VWEEmKr92Qjg2MvS31CCwC9gqs5PG0P0MQZIz0YVX6o6cc01IwjfMRUZhJbgqSYUUwvhjrUep1Rd3LJK2ST6+LA69WZD/owDYe2XnUw7tI6pKyb9IxFBhRaqpBZ0aqLCtc2SyInBFPX3o6dNl31eGbfGQ8tCsWiwUQAAAKAFAABWBBlelQaJ/dR55T1sMTEZdfQDg7u025fHewTq2jvUiQrsnyBqsQ1w79woYtR8IUoP0EykP1OhpyXL3eO0yL8S1Yh6Y76kvVHAkHiSmIBs3nMtixit0sI2RAp50EEUfESjVbS4W655jrNu2fZeeBGXTcf8q6b+QaHbuuOcS35ruFn+/0jqR9XcOWLXOFD9SZA1aWI0tNt87FB/VrmyWq+ahGtTvDWO3/WwGJ/o9t4UHyIiGHtqYtu7RQunegu2UFnytAFd+NzzG+aT9CigTSOpEiDeghCbSeu6HBUqIXMN8yGEAndkdJzUewNDmzVL5HO0w2g0JCRNx4LBnGd3RLUlvq9OEto4kIt5TV5pA3iUXZHVgc8YwRPUpSq7YWrlFTd47CDAt/VxLmwLNXFGOXH9VOyVaLrFUXJlI3+B+KTejU28Iiw4zNDwUTUSKhkaCJz5PYffK1PZEkeDFUZY1nStODv6beBb+Mr090KfwqF5KgRcWMWxRNzN2AiA9vCFKh28nwl8MgtEXK8crl1ch+2xI9PWcH5kZ3E5Gf4OCUPIQnHsHakOriG6PZn+mpx+eIcpm3fDkiloX3p04VBR8bTRkqrSBL5BCIPG/OHsnLcgnl58fpdATi+cdJyg7CMFnuzX4Bny4IeOBwJgG4VepGdxfwWfpKQFBz6j2WNtIGnf3YTJ7bZS9WaxzJRptP6B3ziT4NuPdIg/CVPgqpmogqfeHqsVThn9rMN4VxzG4mYDS8xX3J75MHdBM7JZuDYiqp38VqwPm4tTaa97xtvRECw2YqYyltHJPFcLZonDJQzzul+bHqzbTA+LxndazaPyDmqe39+I/v/j9GI+ib900UUYpyt/kRZ3+XIjn2IisWuIaucIkVyK3AZZkqkGbLEMGmdMFYmQDGI9A3Q5LCtdnITXpMSyt9mwFfain9Z56QldREqAQNlP2lpIFSt/2Xz6fk5R7WYq/t/YzA76vFKrMnPlt9ESuKHiusQ2lRGpBHEvaKINgFgjAdNpz+Ykko71LmYwNfllrbfz1GzwstwfDBOm1iAO86Ch21X6HERBbIfBkjPyoLfYPuYCTBLkeH+S4/yt9I84PqNoZePZ9V+sjTC2dO2cZwFji31XsZFJ2kYeoo/BDP7AIQqvl190hZBa+vtDpo1oyoFG+aEauXsk6kFdj7ajkQ+cFMlq0rxJF9XSl5HqEWOkHtqygR5XuhWzAI7Z44HbcDIj2jrMBvDVNM8NgmlgeCqLtRIYjsTOZ04nSXgKmcfg6a/RK7Pt3gvI1bZSgHu+gkskTE5iLUU5BNu0irzD+5MZj31ICA5QStMcBzlHqnqRk6JWze3hjGul7AySfMIdyuv5Ekyfij07LO6PS/+ih1ZBgs2+e4CAxM023DISVOoSXKbHjoGG+8COWhCsEZRRdyXh6lexZ0KfnDOvqkHuCiQjY8+Axj4+cWtCT7DBOf++Qk8fl5f/i0ChCT9mAnHSEgPkDgxfa3gaENmRiLTU+Ifw9dfCBDIhHqygyulGV3fsD3f71Zu4upQzmTsOHijcMW3nMdFHFM8RDO02iH1K5Bm/bk2ntVuKN8uJo1ZqSyAR07Mrl08nwpDtDVu3RGA2V8JQkgcQXAKDIodShmggT5nNO+8zQ8JQKB/ymOQUhuH5gjdPQuvFfJDCLtiIDlie4fuobQhPQtCr/LSEBPEt/2mI008hX8NKZ5PWJFNKVeIl3HA31MmNER/5QIAxD/dv8PrHiJUs+ReML3LwytYamDlcIha3RqE2yYOBUqC8Vxzp8NQ/ffudW469wLYowS6QYPeCTM46VUS1ulV5hkSlYf01y2KxuD77ezZ78kNjH+n08T/aglI6sPRvMNfhoo0Qm95Hb2cfOa21YvaHYxdJw9Aalw/2Bo/no71awRaRGZ0oqZShTSQr5LWzng4AAAAA');