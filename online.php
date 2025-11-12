<?php
$file = "online.json"; // absolute path
$timeout = 300; // 5 minutes
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

// Read existing data
if (file_exists($file)) {
    $json = @file_get_contents($file);
    if ($json !== false) {
        $decoded = json_decode($json, true);
        if (is_array($decoded)) {
            $data = $decoded;
        }
    }
}

// Update this visitor's timestamp
$data[$ip] = $time;

// Remove expired visitors
foreach ($data as $key => $timestamp) {
    if ($time - $timestamp > $timeout) {
        unset($data[$key]);
    }
}

// Write updated data
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
if (@file_put_contents($file, $jsonData, LOCK_EX) === false) {
    error_log("Failed to write to $file");
}

// Output number of online users
echo count($data);
?>
