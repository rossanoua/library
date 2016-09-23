<?php
foreach (glob("files/*.zip") as $filename) {
    echo "<tr><td class=\"tg-431l first\">" . $size->sizeUnits(filesize($filename)) . "</td><td class=\"tg-431l second\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"><a href=\"$filename\">" . str_replace('files/', '', $filename) . "</a></i></td></tr>";
}