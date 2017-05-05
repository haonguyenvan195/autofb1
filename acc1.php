<?php
echo "abc";
$token = 'EAAAAAYsX7TsBAAdlTjY3fu1KOqGOxt2erBh0cCY3UnFv6CXamYp3HK3mzmbYmGBH9y93ABRL2fC6pJZBq9a4IQ5knt0lW4qyaZCLUaYggbKMd9KmyOr18svCSY3Tu7gLxFQIuZBJZAeLuvGwKQrY7Lh5Mmxj5m1CZCZCVCnPFQxOZCXkzQcVgZCy5sNZC4kJeEKv5BFwjq1unxgZDZD'; //
$limitnf=3; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE');
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
