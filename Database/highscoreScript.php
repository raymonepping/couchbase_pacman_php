<html>
<head>
    <meta charset="utf-8" />
    <style>
        table {
            margin: 0;
            margin-top: 30px;
            color: yellow;
            font-size: 1.5em;
        }
        legend {
            color: yellow;
            font-size: 2.5em;
            margin-bottom: 0.75em;
        }
        td {
            padding-right: 40px;
        }
    </style>
</head>
<body>
    <?php
    // Require database configuration file
    require_once('../Database/db.php');

    // Declare the Couchbase query
    $query = '
        SELECT u.user_username, MAX(h.highscore_score) as highscore_score
        FROM `demo`.`games`.`pacman` AS u
        JOIN `demo`.`games`.`pacman` AS x ON u.user_id = x.user_id
        JOIN `demo`.`games`.`pacman` AS h ON x.highscore_id = h.highscore_id
        WHERE u.type = "user" AND x.type = "xref" AND h.type = "highscore"
        GROUP BY u.user_username
        ORDER BY highscore_score DESC
        LIMIT 10';

    // Run the Couchbase query
    try {
        $result = $cluster->query($query);

        if ($result->metaData()->status() == "success") {
            echo "<table><legend>Top Scores</legend>";
            foreach ($result->rows() as $row) {
                echo "<tr><td>" . htmlspecialchars($row["user_username"]) . "</td><td>" . htmlspecialchars($row["highscore_score"]) . "</td></tr>";
            }
            echo "</table>";
        } else {
            error_log("Couchbase query error: " . $result->metaData()->errors()[0]->message());
        }
    } catch (Exception $e) {
        error_log("Query failed: " . $e->getMessage());
    }
    ?>
</body>
</html>
