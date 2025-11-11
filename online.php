<?php
$file = "online.json"; // absolute path
$timeout = 300; // 5 minutes
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

// Read existing data
if (file_exists($file)) {
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    if (!is_array($data)) {
        $data = [];
    }
} else {
    $data = [];
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
if (file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT)) === false) {
    echo "Error writing to JSON file!";
    exit;
}

// Output number of online users
echo count($data);
?>
