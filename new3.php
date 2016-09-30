<?php
function makeHex($st) {
	for ($i=0; $i<strlen($st); $i++)
		$hex[] = sprintf("%02x", ord($st[$i]));
	return join(" ", $hex);
}
$f = fopen(__FILE__, "rb");
echo makeHex(fgets($f, 100));
echo "  -'код*(16-ричный)","<br>\n";
$f = fopen(__FILE__, "rt");
echo makeHex(fgets($f, 100));
echo "  -'код*(16-ричный)","<br>\n";

$path = "c:\\windows\\system32\\drivers\\etc\\hosts";//двойной слеш объязателен (т.к это коментарий)
$fp = fopen($path, "rt");
echo "Вытащил";
?>