<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
global $DBH;
global $SITE_URL;
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . '/../db/dbConnect.php';

$sql = "SELECT `MediaItems`.*, `Users`.`username` FROM `MediaItems` JOIN `Users` ON `MediaItems`.`user_id` = `Users`.`user_id`";

try {
    $STH = $DBH->query($sql);
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    while($row = $STH->fetch()):
        ?>
        <tr>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['created_at']?></td>
            <td><?php echo $row['username']?></td>
            <td><img src="./uploads/<?php echo $row['filename']?>" alt="<?php echo $row['title']?>"></td>

            <td>
                <?php if ($_SESSION['user']['user_id'] == $row['user_id'] || $_SESSION['user']['user_level_id'] === 1) :?>
                <button class="modify-button" data-media_id="<?php echo $row['media_id']; ?>">Modify</button>
                <a href="<?php echo $SITE_URL; ?>./operations/deleteData.php?media_id=<?php echo $row['media_id']; ?>">Delete</a>
                <?php else:?>
                <p>-</p>
                <?php endif;?>
            </td>
        </tr>
<?php
    endwhile;
} catch (PDOException $error) {
    echo "Could not select data from database.";
    file_put_contents(__DIR__ . '/../logs/PDOErrors.txt', 'dbConnect.php - ' . $error->getMessage(), FILE_APPEND);
}

?>

