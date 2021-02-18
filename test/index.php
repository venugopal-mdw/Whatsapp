<?php
$url = "https://wa.me/+919705335595/?text=urlencodedtext";
//$url = "https://api.whatsapp.com/send?phone=919705335595&text=fdsafsdf&source=&data=";
//https://api.whatsapp.com/send?phone=919880906666&forceIntent=true&load=loadInIOSExternalSafari

//$params = array("phone" => "919705335595", "body"=>"WhatsApp Test");

//$post_data = json_encode($params, JSON_UNESCAPED_SLASHES);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, FALSE);
curl_setopt($ch, CURLOPT_POSTFIELDS);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
$response = curl_exec($ch);
print_r($response); 

// $url = "https://eu60.chat-api.com/instance102751/sendMessage?token=aj3t8uc9696xx6nn";

// $params = array("phone" => "919705335595", "body"=>"WhatsApp Test");

// $post_data = json_encode($params, JSON_UNESCAPED_SLASHES);

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
// curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
// $response = curl_exec($ch);
// print_r($response	);

?>