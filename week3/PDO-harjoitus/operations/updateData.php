<?php
global $DBH;
global $SITE_URL;
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . '/../db/dbConnect.php';


if ( !empty($_POST['media_id']) && !empty($_POST['user_id']) ) {

    $userId = $_POST['user_id'];
    $media_id = $_POST['media_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE MediaItems SET title = :title, description = :description WHERE media_id = :media_id AND user_id = :user_id";
    $data = [
        'title' => $title,
        'description' => $description,
        'media_id' => $media_id,
        'user_id' => $userId
    ];
    try{
        $STH = $DBH->prepare($sql);
        $STH->execute($data);
        if ($STH->rowCount() > 0) {
            header('Location: ' . $SITE_URL);
        }
    } catch (PDOException $error) {
        echo "could not update data in the database";
        file_put_contents(__DIR__ . '/../logs/PDOErrors.txt', 'dbConnect.php - ' . $error->getMessage(), FILE_APPEND);
    }
} else {
    exit("no media file");

}

