<?php
echo "nguyen an";
$token = 'EAAAAAYsX7TsBAFoZCnBmQ36Eo4ZCkDFDPsbIrpSmeMZAzmg8S70m4ONDI5ZCJivZAdZAie6tmW15hzXvNGoUWOjyrxwQPXTQNVNrZBsayWde8ipxxhtbpUCzF0CSB0BZAnRkh7co1Bp5gwocIRstM22Abyd6J4PRqR463oD2mLy4YgctsHPF9VH4InzfukoT9WyhvONiwFhlrwZDZD'; //
$limitnf=3; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LIKE' , 'LOVE');
$mess=$camxuc[rand(0,count($camxuc)-1)];
echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');
}
function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>
