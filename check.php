<?php
$file = 'online.json';

if(file_exists($file)) {
    echo "$file exists. ";
} else {
    echo "$file does NOT exist. ";
}

if(is_writable($file)) {
    echo "$file is writable.";
} else {
    echo "$file is NOT writable.";
}
?>
