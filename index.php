<?php
require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->load('https://www.psychology.org.au/Find-a-Psychologist?distance=5&first-name=uta&last-name=herzog&drop-list-1=5&state=all-states&Page=0');
$href = $dom->find('.fnPsyLs-name')[0];
echo $href->href;