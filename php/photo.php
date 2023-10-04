<?php
$id = $_GET['id'];

// get base
$data = [
    [
        'id' => '1',
        'path' => './photos/download.jpeg',
        'name' => 'image1.jpeg',
    ],
    [
        'id' => '2',
        'path' => './photos/download (1).jpeg',
        'name' => 'image1.jpeg',
    ]
];

$photo = array_shift(array_filter($data, function($photo) use ($id) {
    return $photo['id'] === $id;
}));

header('Content-type: image/jpeg');
echo file_get_contents($photo['path']);
