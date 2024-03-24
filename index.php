<!DOCTYPE html>
<html lang="en">

<head>
    <title> Made up League</title>
</head>
<h1>League Table</h1>
<link href="css/main.css" rel="stylesheet" />
<?php
$username = "Guest";
if (isset($_GET["name"])) {
    $username = $_GET["name"];
}
$title = $_GET['title'] ?? 'bawbag';
?>
<h2> Welcome <?php echo $username; ?>, <?php echo $title; ?></h2>

<main>
    <h2>How our League Works</h2>
    <p>10 games played in a season.</p>
    <p>3 points for a win</p>
    <p>1 point for a draw.</p>
    <p>0 points for a loss.</p>
    <p>The team that finishes bottom gets relegated.</p>


    <h4><u>Team League Standings</u></h4>
    <table>
        <thead>
            <tr>
                <th class="border border-slate-600 ...">POS</th>
                <th class="border border-slate-600 ...">Team</th>
                <th class="border border-slate-600 ...">Pts</th>
                <th class="border border-slate-600 ...">MP</th>
                <th class="border border-slate-600 ...">W</th>
                <th class="border border-slate-600 ...">D</th>
                <th class="border border-slate-600 ...">L</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="border border-slate-600 ...">1(C)</th>
                <td class="border border-slate-700 ...">Team 1</td>
                <td class="border border-slate-700 ...">28</td>
                <td class="border border-slate-700 ...">10</td>
                <td class="border border-slate-700 ...">8</td>
                <td class="border border-slate-700 ...">2</td>
                <td class="border border-slate-700 ...">0</td>
            </tr>
            <tr>
                <th class="border border-slate-600 ...">2</th>
                <td class="border border-slate-700 ...">Team 2</td>
                <td class="border border-slate-700 ...">25</td>
                <td class="border border-slate-700 ...">10</td>
                <td class="border border-slate-700 ...">8</td>
                <td class="border border-slate-700 ...">1</td>
                <td class="border border-slate-700 ...">1</td>
            </tr>
            <tr>
                <th class="border border-slate-600 ...">3</th>
                <td class="border border-slate-700 ...">Team 3</td>
                <td class="border border-slate-700 ...">18</td>
                <td class="border border-slate-700 ...">10</td>
                <td class="border border-slate-700 ...">5</td>
                <td class="border border-slate-700 ...">3</td>
                <td class="border border-slate-700 ...">2</td>
            </tr>
            <tr>
                <th class="border border-slate-600 ...">4</th>
                <td class="border border-slate-700 ...">Team 4</td>
                <td class="border border-slate-700 ...">13</td>
                <td class="border border-slate-700 ...">10</td>
                <td class="border border-slate-700 ...">3</td>
                <td class="border border-slate-700 ...">4</td>
                <td class="border border-slate-700 ...">3</td>
            </tr>
            <tr>
                <th class="border border-slate-600 ...">5</th>
                <td class="border border-slate-700 ...">Team 5</td>
                <td class="border border-slate-700 ...">9</td>
                <td class="border border-slate-700 ...">10</td>
                <td class="border border-slate-700 ...">2</td>
                <td class="border border-slate-700 ...">3</td>
                <td class="border border-slate-700 ...">5</td>
            </tr>
            <tr>
                <th class="border border-slate-600 ...">6(R)</th>
                <td class="border border-slate-700 ...">Team 6</td>
                <td class="border border-slate-700 ...">4</td>
                <td class="border border-slate-700 ...">10</td>
                <td class="border border-slate-700 ...">1</td>
                <td class="border border-slate-700 ...">1</td>
                <td class="border border-slate-700 ...">8</td>
            </tr>
        </tbody>
    </table>

    <h4><u>Top Goalscores</u></h4>

    <table>
        <thead>
            <tr>
                <th class="border border-slate-600 ...">Player</th>
                <th class="border border-slate-600 ...">Goals</th>
                <th class="border border-slate-600 ...">MP</th>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 1</td>
                <td class="border border-slate-600 ...">25</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 2</td>
                <td class="border border-slate-600 ...">22</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 3</td>
                <td class="border border-slate-600 ...">19</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 4</td>
                <td class="border border-slate-600 ...">16</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 5</td>
                <td class="border border-slate-600 ...">15</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 6</td>
                <td class="border border-slate-600 ...">14</td>
                <td class="border border-slate-600 ...">9</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 7</td>
                <td class="border border-slate-600 ...">12</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 8</td>
                <td class="border border-slate-600 ...">9</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 9</td>
                <td class="border border-slate-600 ...">5</td>
                <td class="border border-slate-600 ...">7</td>
            </tr>
            <tr>
                <td class="border border-slate-600 ...">Player 10</td>
                <td class="border border-slate-600 ...">5</td>
                <td class="border border-slate-600 ...">10</td>
            </tr>
            </tbody>
    </table>

    <footer>
        <p>Author: Conor Havelin</p>
    </footer>