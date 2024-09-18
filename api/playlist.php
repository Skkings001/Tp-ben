<?php
header('Content-Type: application/x-mpegURL');
header('Content-Disposition: attachment; filename="playlist.m3u"');

// API URL
$apiUrl = 'http://yuvraj.fun/tp-keys/key.php?id=$id'; // तुमच्या API URL ने बदलवा

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
