<?php
$characters="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";function encodeText($code,$key){$enbs=base64_encode($code);
$tractadd=explode("=",$enbs);$result=str_repeat("//e//lai//na//",count($tractadd)-1);
$enbs=str_replace("=",$result,$enbs);$diff=explode("//e//lai//na//",$enbs);$genarr=genArrCode($key);$enCode="";for($i=0;$i<=strlen($diff[0])-1;$i++){
$enCode.=$genarr[$diff[0][$i]]."\/\/\/";}global$lastIndex;$enCode.=$lastIndex;return base64_encode("//-----------//".base64_encode($key)."//----------//".base64_encode($enCode));}
function genKey(){global$characters;$key="";$keyLength=strlen($characters);for($i=1;$i<=$keyLength;$i++){$key.=randomString($keyLength)."|/|";}
return$key;}function genArrCode($key){global$characters;$code=[];$eLore=explode("|/|",$key);for($i=0;$i<=count($eLore);$i++){
$code[$characters[$i]]=$eLore[$i];}return$code;}function randomString($length=10){
$characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';$charactersLength=strlen($characters);
$randomString='';for($i=0;$i<=$length;$i++){$randomString.=$characters[rand(0,$charactersLength-1)];}
return$randomString;}$lastIndex="//e//lai//na//";
