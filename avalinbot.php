<?php

<?php

ob_start();
$content= file_get_contents("php://input");
$update = json_decode($content);
define("API_KEY","5c4e175db3a03c475da96ecad6191c20");

function sendMessage($datas){
    $url = "https://panel.botsaz.com/api/bot/sendMessage";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    $datas["api_key"]=API_KEY;
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($datas));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return json_decode($server_output);
}
sendMessage([
    "text"=>"khodayaaaaaaaaaaaaaaaaaaaaaaashokreeeeeeeeeeeeeeeeeeeeeeeeeeeeet",
    "chat_id"=>"72608783",

]);
file_put_contents("log",ob_get_clean());
?>

?>