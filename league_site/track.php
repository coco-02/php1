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
    // Connect to the database and get the track data for the provided ID.
    $db_connection = f1_get_db_connection();
    $test = $db_connection->query("SELECT * FROM track WHERE id = $track_id");
    $track = $test->fetch();

    // Test code to format the outputted raw data from the database.
    // echo '<pre>';
    // var_dump($track);
    // echo '</pre>';
}
?>

<ul>
    <li><strong>ID: </strong><?php echo $track['id']; ?></li>
    <li><strong>Track name: </strong><?php echo $track['track_name']; ?></li>
    <li><strong>Country: </strong><?php echo $track['country']; ?></li>
    <li><strong>Number of laps: </strong><?php echo $track['number_of_laps']; ?></li>
    <li><strong>Track image: </strong><?php echo $track['track_image']; ?></li>
    <li><strong>Rendered track image: </strong><img src="images/track-maps/<?php echo $track['track_image']; ?>"></li>

    <li><strong>Link: </strong><a href="track.php?id=0<?php echo $track['id']; ?>">View the page for <?php echo $track['track_name']; ?></a></li>
    <li><strong>Link: </strong><a href="track.php?id=1">Bahrian</a></li>
    <li><strong>Link: </strong><a href="track.php?id=2">Jeddah</a></li>
    <li><strong>Link: </strong><a href="track.php?id=3">Melbourne</a></li>
    <li><strong>Link: </strong><a href="track.php?id=4">Suzuka</a></li>
    <li><strong>Link: </strong><a href="track.php?id=5">Shanghi</a></li>
    <li><strong>Link: </strong><a href="track.php?id=6">Miami</a></li>
    <li><strong>Link: </strong><a href="track.php?id=7">Emilia-Romagna</a></li>
    <li><strong>Link: </strong><a href="track.php?id=8">Monaco</a></li>
    <li><strong>Link: </strong><a href="track.php?id=9">Circuit Gilles-Villeneuve</Gilles-Villeneuve></a></li>
    <li><strong>Link: </strong><a href="track.php?id=10">Barcelona</a></li>
    <li><strong>Link: </strong><a href="track.php?id=11">Speilburg</a></li>
    <li><strong>Link: </strong><a href="track.php?id=12">Silverstone</a></li>
    <li><strong>Link: </strong><a href="track.php?id=13">Hungaroring</a></li>
    <li><strong>Link: </strong><a href="track.php?id=14">Spa-Francorchamps</a></li>
    <li><strong>Link: </strong><a href="track.php?id=15">Zandvoort</a></li>
    <li><strong>Link: </strong><a href="track.php?id=16">Monza</a></li>
    <li><strong>Link: </strong><a href="track.php?id=17">Baku</a></li>
    <li><strong>Link: </strong><a href="track.php?id=18">Marina Bay Street Circiut</a></li>
    <li><strong>Link: </strong><a href="track.php?id=19">Texas</a></li>
    <li><strong>Link: </strong><a href="track.php?id=20">Mexico</a></li>
    <li><strong>Link: </strong><a href="track.php?id=21">Interlagos</a></li>
    <li><strong>Link: </strong><a href="track.php?id=22">Las Vegas</a></li>
    <li><strong>Link: </strong><a href="track.php?id=23">Qatar</a></li>
    <li><strong>Link: </strong><a href="track.php?id=24">Yas Marina Circuit</a></li>

</ul>

<?php require_once 'includes/footer.php'; ?>
