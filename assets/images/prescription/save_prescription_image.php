<?php
if (isset($_POST['image']) && isset($_POST['filename'])) {
    $img = $_POST['image'];
    $img = str_replace('data:image/jpeg;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = __DIR__ . '/' . basename($_POST['filename']);
    if (file_put_contents($file, $data)) {
        echo "Saved";
    } else {
        echo "Failed";
    }
} else {
    echo "No data";
}
