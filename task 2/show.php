<?php
$text = $_POST['text'];
echo "Ваш текст: " . $text;
$path = 'uploads/' . $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], $path);
