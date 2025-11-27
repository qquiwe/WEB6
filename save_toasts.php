<?php
header('Content-Type: text/plain; charset=utf-8');

$file = 'toasts.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo 'Invalid JSON';
        exit;
    }
    
    // Зберігаємо масив тостів
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo 'OK';
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>