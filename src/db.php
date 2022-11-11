<?php
$db_handle = pg_connect("host=db dbname=soccer_league user=postgres password=postgres")or die("Could not connect");
$res = pg_query($db_handle, "SELECT * FROM match");

while ($row = pg_fetch_row($res)) {
    print_r($row);
    echo '<br/>';
}
?>