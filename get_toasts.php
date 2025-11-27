<?php
header('Content-Type: application/json; charset=utf-8');

$file = 'toasts.json';

if (file_exists($file)) {
    $content = file_get_contents($file);
    echo $content ?: '[]';
} else {
    echo '[]';
}
?>