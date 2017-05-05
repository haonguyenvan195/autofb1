<?php
echo "abc";
$token = 'EAAAAAYsX7TsBANzMMJuN7tjSKDmKj8I2ZB8V2dqKU8qSnKm8cdjsJSAdZCS1LLHQZBnnuvtIBgnivp4KZBmLuBDydBn7QdNyfWOOZCLFMK96SOtETzlDN6UStCtlMmmmitACXT3x4ysdKH4bGtFRfqbxHXlu3jHSJm1IIlB4uyQUuMxW0GPYLBRfJMsxFRa2APNPUYxE2pIwkuonp9IIx'; //
$limitnf=5; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE' , 'LIKE');
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
