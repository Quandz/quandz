<?php
 
/* == ID tài kho?n mu?n tang share == */
$user = 'nhi.lediem.7';
/* == Token tài kho?n ch?a page == */
$token = 'EAAAAAYsX7TsBAAFNvRAI05DcZCsWgZCVBrD4AmwpXlC6xCS8oerRLKNtmIU5Y1GZBHaRYoshSnKX86l8GCYg3yLXfVmBmZBydZCcbB99JgXuG9aUbq1L2KzZBkjJspFh6voYmL9VxiqaYddkcpqJ8cTqHD4CfNWyeuu1rv0WIn7wU5FkkkXUTXus64XizhnJSjRM4CV27A7Uzn4Y5TPwu8';
$accounts = json_decode(cURL('https://graph.facebook.com/me/accounts?access_token=' . $token),true);
 
$feed = json_decode(cURL('https://graph.facebook.com/' . $user . '/feed?access_token='.$token.'&limit=1'),true);
 
foreach ($accounts['data'] as $data) {
    //echo $data['access_token'] . '<br/>';
    echo cURL('https://graph.facebook.com/' . $feed['data'][0]['id'] . '/sharedposts?method=post&access_token='.$data['access_token']) . '<br/><br/><br/>';
}
 
/* == Hàm get == */
function cURL ($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
 
?>
 
<meta http-equiv="refresh" content="0">