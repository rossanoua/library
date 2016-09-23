<?php
foreach (glob("files/*.fb2") as $filename) {
    echo "<tr><td class=\"tg-431l first\">" . $size->sizeUnits(filesize($filename)) . "</td><td class=\"tg-431l second\"><abbr title=" . preg_replace('/\s+/', '_', str_replace('files/', '', $filename)) .  " rel=\"tooltip\"> <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> </abbr><a href=\"$filename\">" . str_replace('files/', '', $filename) . "</a></td></tr>";
}