<?php
require_once 'formatSizeUnits.php';
    $size = new formatSizeUnits();

foreach (glob("*.rar") as $filename) {
    echo "<a href=\"$filename\">" . $filename . "</a>" . " Размер: " . $size->sizeUnits(filesize($filename)) . "</br>";
}
