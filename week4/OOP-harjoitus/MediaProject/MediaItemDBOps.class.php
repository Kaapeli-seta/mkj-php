<?php

namespace MediaProject;

require_once __DIR__ . '/MediaItem.class.php';

class MediaItemDBOps {
    private \PDO $DBH;

    public function __construct($DBH) {
        $this->DBH = $DBH;
    }

    public function getMediaItems(): array {
        $sql = "SELECT `MediaItems`.*, `Users`.`username` FROM `MediaItems` JOIN `Users` ON `MediaItems`.`user_id` = `Users`.`user_id`";
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(\PDO::FETCH_ASSOC);
        $mediaItems = [];
        while ($row = $STH->fetch()) {
            $mediaItems[] = new MediaItem($row);
        }
        return $mediaItems;
    }
}