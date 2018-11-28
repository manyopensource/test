<?php
$subject = file_get_contents('https://www.yell.ru/yellrank/yellrank.js/?cmp=11929740&s=2');
$pattern = "/\<span class\=\"yell-mark\"\>(.*?)\<\/span\>/im";
$result = preg_match($pattern, $subject, $matches);
if ($result === 1) {
    $ratingValue = (float)$matches[1];
}
$pattern = "/\<span\>(.*?)\<\/span\>/im";
$result = preg_match($pattern, $subject, $matches);
if ($result === 1) {
    $reviewCount = (int)$matches[1];
}
?>
<script type='application/ld+json'>
{
    "@context": "http://www.schema.org",
    "@type": "product",
    "name": "Линия жизни",
    "aggregateRating": {
        "@type": "aggregateRating",
        "ratingValue": "<?=$ratingValue;?>",
        "reviewCount": "<?=$reviewCount;?>",
        "bestRating": "5"
    }
}
</script>