<?php
$subject = file_get_contents('https://widget.flamp.ru/?id=282004257891281&type=medium-new');
if ($subject !== false) {
    $pattern = "/\<div class\=\"filial-rating__value filial-rating__value--4\"\>(.*?)\<\/div\>/mis";
    $result = preg_match($pattern, $subject, $matches);
    if ($result === 1) {
        $ratingValue = (float)$matches[1];
    }
    $pattern = "/\<div class=\"medium-new__bottom t-text t-text--bold t-text--small\"\>(.*?)\<\/div\>/mis";
    $result = preg_match($pattern, $subject, $matches);
    if ($result === 1) {
        $reviewCount = (int)$matches[1];
    }
    ?><script type='application/ld+json'>
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
    </script><?
}