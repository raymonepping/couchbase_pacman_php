<?php
require_once('../../Database/db.php');

if (isset($_GET['userid']) && isset($_GET['score'])) {
    $score = intval($_GET['score']);
    $userid = $_GET['userid'];

    // Generate unique ID for the high score
    $highscore_id = 'highscore::' . uniqid();

    // Insert the high score
    $highscoreDocument = [
        'type' => 'highscore',
        'highscore_id' => $highscore_id,
        'highscore_score' => $score
    ];
    $collection->upsert($highscore_id, $highscoreDocument);

    // Insert the xref document
    $xref_id = 'xref::' . uniqid();
    $xrefDocument = [
        'type' => 'xref',
        'user_id' => $userid,
        'highscore_id' => $highscore_id
    ];
    $collection->upsert($xref_id, $xrefDocument);

    echo "High score added and linked successfully.<br>";
} else {
    echo "Invalid input.<br>";
}
?>
