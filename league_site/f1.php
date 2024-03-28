<?php require_once 'includes/header.php'; ?>

<div class="content">
    <h4>Constructors Standings</h4>
    <p></p>
    <?php
    $league_data = [
        [
            'team_name' => 'Red Bull Racing',
            'pts' => 24,
        ],
        [
            'team_name' => 'Ferrari',
            'pts' => 14,
        ],
        [
            'team_name' => 'Mercedes',
            'pts' => 13,
        ],
        [
            'team_name' => 'McLaren',
            'pts' => 8,
            'pts' => 12
        ],
        [
            'team_name' => 'Aston Martin',
            'pts' => 4,
        ],
        [
            'team_name' => 'Racing Bulls Visa Cashapp',
            'pts' => 0,
        ],
        [
            'team_name' => 'Hass',
            'pts' => 0,
        ],
        [
            'team_name' => 'Williams',
            'pts' => 0,
        ],
        [
            'team_name' => 'Kick Sauber',
            'pts' => 0,
        ],
        [
            'team_name' => 'Alpine',
            'pts' => 0,
        ],
    ];

    echo '<table>
    	<tr>
    		<th>Pos</th>
    		<th>Team</th>
    		<th>Points</th>
		</tr>
';

    foreach ($league_data as $index => $league_datum) {
        echo '<tr>';
        echo '<td>' . $index + 1 . '</td><td>' . $league_datum['team_name'] . '</td><td>' . $league_datum['pts'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    ?>

    <h4>Drivers Champsionship</h4>
    <?php

    $driver_data = [
        [
            'driver_name' => 'Driver 1',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 2',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 3',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 4',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 5',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 6',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 7',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 8',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 9',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 10',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 11',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 12',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 13',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 14',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 15',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 16',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 17',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 18',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 19',
            'dpts' => '0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 20',
            'dpts' => '0',
            'racewins' => '0'
        ],

    ];

    echo '<table>
    	<tr>
    		<th>Pos</th>
    		<th>Driver</th>
            <th>Points</th>
           <th>Race Wins</th>
		</tr>
';

    foreach ($driver_data as $index => $driver_datum) {
        echo '<tr>';
        echo '<td>' . $index + 1 . '</td><td>' . $driver_datum['driver_name'] . '</td><td>' . $driver_datum['dpts'] . '</td><td>' . $driver_datum['racewins'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    ?>

</div>

<?php require_once 'includes/footer.php'; ?>
