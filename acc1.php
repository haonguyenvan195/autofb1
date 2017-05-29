<?php
echo "nguyen an";
$token = 'EAAAAAYsX7TsBAKUvkRbPOWjku4Oev7ybqY8XoKIjPGVTGFORzSlPLbN8RbK1rUt1Ypp4TYMeM4CLLoVZBpl46A0dcTZCOmC1ZBJhKvFZBiru4hXNfs6n28uZC1FiN7mb5C7DEaNCDwiF7C7CRvTk2CQMi9LLgZBwZBU4wgK6Jw82hETg8mXBzEfu1NAZAswN5OF88xOsNGlNKwZDZD'; //
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
