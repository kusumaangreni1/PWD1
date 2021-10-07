<?php
$myDir = "C: /xampp/htdocs/PWD/satu/upload_file/";
$dir = opendir($myDir);
echo "Isi folder (klik link untuk download : <br>";
while ($tmp = readdir($dir)) {
    echo "<a href='$tmp' target='blank'>$tmp</a><br>";
}
closedir($dir);