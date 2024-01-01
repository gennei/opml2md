<?php

$path = './example.opml';
$xml = simplexml_load_file($path);
$feeds = $xml->body->outline->outline;
foreach ($feeds as $feed) {
    $title = $feed['text'];
    $xmlUrl = $feed['xmlUrl'];
    echo "- [$title]($xmlUrl)" . PHP_EOL;
}
