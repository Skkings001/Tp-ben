<?php
header('Content-Type: application/json');

// API URL
$apiUrl = 'https://raw.githubusercontent.com/ttoor5/tataplay_urls/main/origin.json'; // तुमच्या API URL ने बदलवा

// API कॉल
$response = file_get_contents($apiUrl);
$channels = json_decode($response, true);

echo json_encode($channels);
?>
