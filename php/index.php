<?php

echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';

$email = '';
$name = '';
$error = [
    'name' => '',
    'lastname' => '',
];

if(isset($_POST['send'])) {
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    if(empty($_POST['lastname'])) {
        $error['lastname'] = 'Lastname is empty';
    }

    $uploads_dir = '/uploads';
    if(!empty($_FILES['photo'])) {
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $name = "./photos/". $_FILES["photo"]["name"] . '.' . explode('/', $_FILES["photo"]["type"])[1];
        if(!move_uploaded_file($_FILES['photo']['tmp_name'], $name)) {
            echo 'Photo not moved';
        }
    }
}
    
    $isMailValid = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); 
}
?>
<form method="POST" action="index.php?name=gename" enctype="multipart/form-data">

    <input type="email" name="email[]" placeholder="email" value="">
    <input type="email" name="email[]" placeholder="email" value="<?= $email ?>">
    <input type="email" name="email[]" placeholder="email" value="<?= $email ?>">

    <input type="text" name="name" placeholder="name" value="<?= htmlentities($name) ?>">
    <input type="number" name="age" placeholder="age">
    <span><?= $error['name'] ?></span>
    <input type="text" name="lastname" placeholder="lastname">
    <span><?= $error['lastname'] ?></span>

    <input type="file" name="photo[]">
    <input type="file" name="photo[]">

    <input type="submit" name="send" value="send">
</form>

<a href="user.php?name=azeazeaz&lastname=adqsd">hack</a>

<p><?= htmlspecialchars($name) ?></p>

<img src="./photo.php?id=1">
