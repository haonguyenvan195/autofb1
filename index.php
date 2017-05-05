<?php
echo "A Linh";
$token = 'EAAAAAYsX7TsBAHsYrz58USkL8rROK8a7J2yFkhnjBj5KozYZAIRaexigSzEVBxQg4w6rh9MypHLwswbqxIsONVQpiTKzZBXbBZC4UzuBF7p7t6aMsrjkSTjtxGH5Xai2BKUpUhaB4XmRzJZA1i2fZCWqInhz6IkrWzzWSK6QLNX1t3shr492RvZA2iZAILZAA5yDOH3CZAk9A2QZDZD'; //
$limitnf=10; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LIKE');
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
