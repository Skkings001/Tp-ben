<?php
header('Content-Type: application/x-mpegURL');
header('Content-Disposition: attachment; filename="playlist.m3u"');

// API URL
$apiUrl = 'https://example.com/api/channels'; // तुमच्या API URL ने बदलवा

// API कॉल
$response = file_get_contents($apiUrl);
$channels = json_decode($response, true);

echo "#EXTM3U\n";

foreach ($channels['channels'] as $channel) {
    $name = $channel['name'];
    $mpd = $channel['mpd'];
    $key = $channel['key'];
    echo "#EXTINF:-1, $name\n";
    echo "$mpd|key=$key\n";
}
?>
