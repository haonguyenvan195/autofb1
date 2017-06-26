<?php
echo "an nguyen";
$token = 'EAAAAAYsX7TsBACsTNDxla285eIHNqG8whOYDjdls3b3HfpalazWmj26fPOQ6zSjVRpxlj9yjQPnUO0l2GrPeqoBqtUmXZAinK1UnNASVXBY8mPuo7VnWMbn3HBdNkeUhBTuGwhY2sChSNvLWuPw86FqiJjwZCKREGbSbIET6o3Bei1iZCtdKPmqVpdgn1ycfCZAtxURa2i120xLQJWfe'; //
$limitnf=2; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
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
