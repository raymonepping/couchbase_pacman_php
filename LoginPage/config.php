<?php
require_once '../Database/db.php'; // Assuming db.php is in the Database folder

function connDB() {
    global $cluster, $bucket, $collection;

    if ($cluster && $bucket && $collection) {
        return $collection;
    } else {
        error_log("Connection Failed: Unable to connect to Couchbase cluster.");
        return null;
    }
}
?>
