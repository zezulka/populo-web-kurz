<?php
    require('db.php');
    $matches_db = pg_query(
        $conn, 
        "SELECT 
            h_c.name as host,
            g_c.name as guest,
            match.host_goals,
            match.guest_goals
        FROM match
        JOIN club h_c ON match.host = h_c.id
        JOIN club g_c ON match.guest = g_c.id"
    );

    $headers = array("Host", "Guest", "Score");
    $data_cells = load_matches(pg_fetch_all($matches_db));

    function load_matches($matches_db) {
        $result = array();
        foreach($matches_db as $match_db) {
            array_push($result, load_match($match_db));
        }
        return $result;
    }

    function load_match($match_db) {
        return [
            $match_db["host"],
            $match_db["guest"],
            $match_db["host_goals"] . ":" . $match_db["guest_goals"]
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
    <title>Football League Populo</title>
</head>
<body>
    <h2>Football Matches</h2>
    <table>
        <tr>
            <?php foreach ($headers as $header): ?>
                <th><?php echo $header; ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($data_cells as $data_cell): ?>
            <tr>
            <?php foreach ($data_cell as $data_item): ?>
                <td><?php echo $data_item; ?></td>
            <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
