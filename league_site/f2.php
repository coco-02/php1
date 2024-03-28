<?php require_once 'includes/header.php'; ?>

<div class="content">
    <h4>Constructors Standings</h4>
    <p></p>
    <?php
    $league_data = [
        [
            'team_name' => 'Art Grand Prix',
            'pts' => 0,
        ],
        [
            'team_name' => 'Prema Racing',
            'pts' => 0,
        ],
        [
            'team_name' => 'RODIN Motorsport',
            'pts' => 0,
        ],
        [
            'team_name' => 'Dams Lucas Oil',
            'pts' => 0,
        ],
        [
            'team_name' => 'Invicta Racing',
            'pts' => 0,
        ],
        [
            'team_name' => 'MP Motorsport',
            'pts' => 0,
        ],
        [
            'team_name' => 'Van Amersfoort Racing',
            'pts' => 0,
        ],
        [
            'team_name' => 'Campos Racing',
            'pts' => 0,
        ],
        [
            'team_name' => 'Trident',
            'pts' => 0,
        ],
        [
            'team_name' => 'PHM AIX Racing',
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

    <h4>Drivers Chaptsionship</h4>
    <?php

    $driver_data = [
        [
            'driver_name' => 'Driver 1',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 2',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 3',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 4',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 5',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 6',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 7',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 8',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 9',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 10',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 11',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 12',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 13',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 14',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 15',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 16',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 17',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 18',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 19',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],
        [
            'driver_name' => 'Driver 20',
            'dpts' => '0',
            'sprintwins'=>'0',
            'racewins' => '0'
        ],

    ];

    echo '<table>
    	<tr>
    		<th>Pos</th>
    		<th>Driver</th>
            <th>Points</th>
            <th>Sprint Race Wins</th>
           <th>Feature Race Wins</th>
		</tr>
';

    foreach ($driver_data as $index => $driver_datum) {
        echo '<tr>';
        echo '<td>' . $index + 1 . '</td><td>' . $driver_datum['driver_name'] . '</td><td>' . $driver_datum['dpts'] . '</td><td>' . $driver_datum['racewins'] . '</td><td>' . $driver_datum['sprintwins'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    ?>

</div>

<?php require_once 'includes/footer.php'; ?>