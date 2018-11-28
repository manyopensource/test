<?php

$html = <<< HTML
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Compression</h1>
	<pre>
		<code>
		/*$array = [false, 'true', true, false, 'false', true, false, true];

		foreach ($array as $key => $value) {
			if (sizeof($array) - 1 === $key) {
				var_export($value); echo '<br>';
			}
		}*/

		// $a = ['1,2,3', null, '4,5', null, null, '6'];

		// $b = array_unique($a);

		// var_dump($b);</code>
	</pre>
</body>
</html>
HTML;

// header('Content-Type: text/plain');
header('Content-Encoding: gzip');
//echo mb_strlen($html), '<br>';
$gzip = gzencode($html);
//echo mb_strlen($gzip), '<br>';
//echo gzdecode($gzip);
echo $gzip;