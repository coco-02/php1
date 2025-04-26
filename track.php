<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/header.php'; ?>
<h1>Tracks</h1>

<?php

// Get the track ID from the URL query string. If the ID is not provided, set it to 0.
$track_id = $_GET['id'] ?? 0;
// If the track ID is empty (including 0), display an error message.
if (!$track_id) {
    echo 'No track ID provided';
}
// Otherwise, display the track data.
else {
    // Code gets the next track id.
    $db_connection = f1_get_db_connection();
    $query = $db_connection->query("SELECT id FROM track WHERE id > $track_id ORDER BY id ASC LIMIT 1;");
    $next_track_id = $query->fetchColumn() ?: 1;

    // Connect to the database and get the track data for the provided ID.
    $query = $db_connection->query("SELECT * FROM track WHERE id = $track_id;");
    $track = $query->fetch();
    // Test code to format the outputted raw data from the database.
    echo '<pre>';
    var_dump($track);
    echo '</pre>';
}
// Code below...
$track_id = array("id", "track_name", "country", "number_of_laps", "track_image");

foreach ($track_id as $next_track_id) {
    echo "$next_track_id<br>";
}
?>

<li><strong>Link: </strong><a href="track.php?id=1">Click here for the next track!</a></li>
<?php require_once 'includes/footer.php'; ?>
