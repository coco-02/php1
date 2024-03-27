
<?php include 'includes/header.php';

?>

    <div class="content">

        <h2>How our League Works</h2>
        <p>10 games played in a season.</p>
        <p>3 points for a win</p>
        <p>1 point for a draw.</p>
        <p>0 points for a loss.</p>
        <p>The team that finishes bottom gets relegated.</p>
    </div>


    <h4>Team League Standings</h4>
    <?php

    $league_data = [
        [
            'team_name' => 'Team 1',
            'pts' => 24,
            'mp' => 12,
            'w' => 8,
            'd' => 0,
            'l' => 4
        ],
        [
            'team_name' => 'Team 2',
            'pts' => 14,
            'mp' => 12,
            'w' => 1,
            'd' => 11,
            'l' => 0
        ],
        [
            'team_name' => 'Team 3',
            'pts' => 13,
            'mp' => 12,
            'w' => 4,
            'd' => 1,
            'l' => 7
        ],
        [
            'team_name' => 'Team 4',
            'pts' => 8,
            'mp' => 12,
            'w' => 2,
            'd' => 2,
            'l' => 8
        ],
        [
            'team_name' => 'Team 5',
            'pts' => 4,
            'mp' => 12,
            'w' => 1,
            'd' => 1,
            'l' => 10
        ],
        [
            'team_name' => 'Team 6',
            'pts' => 0,
            'mp' => 12,
            'w' => 0,
            'd' => 0,
            'l' => 12
        ],
    ];

    echo '<table>
    	<tr>
    		<th>Pos</th>
    		<th>Team</th>
    		<th>Points</th>
            <th>MP</th>
            <th>W</th>
            <th>D</th>
            <th>L</th>
		</tr>
';

    foreach ($league_data as $index => $league_datum) {
        echo '<tr>';
        echo '<td>' . $index + 1 . '</td><td>' . $league_datum['team_name'] . '</td><td>' . $league_datum['pts'] . '</td><td>' . $league_datum['mp'] . '</td><td>' . $league_datum['w'] . '</td><td> ' . $league_datum['d'] . '</td><td>' . $league_datum['l'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    ?>

    <h4>Top Goalscores</h4>
    <?php

    $player_data = [
        [
            'player_name' => 'Player 1',
            'mp' => '12',
            'goals' => '25'
        ],
        [
            'player_name' => 'Player 2',
            'mp' => '12',
            'goals' => '20'
        ],
        [
            'player_name' => 'Player 3',
            'mp' => '12',
            'goals' => '18'
        ],
        [
            'player_name' => 'Player 4',
            'mp' => '12',
            'goals' => '16'
        ],
        [
            'player_name' => 'Player 5',
            'mp' => '12',
            'goals' => '15'
        ],
        [
            'player_name' => 'Player 6',
            'mp' => '12',
            'goals' => '14'
        ],
        [
            'player_name' => 'Player 7',
            'mp' => '12',
            'goals' => '13'
        ],
        [
            'player_name' => 'Player 8',
            'mp' => '12',
            'goals' => '11'
        ],
        [
            'player_name' => 'Player 9',
            'mp' => '12',
            'goals' => '10'
        ],
        [
            'player_name' => 'Player 10',
            'mp' => '12',
            'goals' => '8'
        ],

    ];

    echo '<table>
    	<tr>
    		<th>Pos</th>
    		<th>Player</th>
            <th>MP</th>
           <th>Goals</th>
		</tr>
';

    foreach ($player_data as $index => $player_datum) {
        echo '<tr>';
        echo '<td>' . $index + 1 . '</td><td>' . $player_datum['player_name'] . '</td><td>' . $player_datum['mp'] . '</td><td>' . $player_datum['goals'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    $player_data = [
        'PLayer 1',
        'Player 2',
        'Player 3',
        'Player 4',
        'Player 5',
        'Player 6',
        'Player 7',
        'Player 8',
        'Player 9',
        'Player 10'

    ];

    foreach ($player_data as $index => $player_datum) {
        echo $index + 1 . ' - ' . $player_datum;
        echo "\n";
    }
    ?>
<?php include 'includes/footer.php'
?>
