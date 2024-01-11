<?php

require_once "Content.php";

$article1 = new Content("Article", "Titel1", "Lorum ipsum");
$article2 = new Content("Article", "Titel2", "Lorum ipsum", true);
$ad = new Content("Ad", "Titel", "Lorum ipsum");
$vacancy = new Content("Vacancy", "Titel", "Lorum ipsum", true);

$array = [$article1, $article2, $ad , $vacancy];

foreach ($array as $item) {
    echo "<h1>" . $item->getTitle() . "</h1>";
    echo "<p>" . $item->getText() . "</p>";
}