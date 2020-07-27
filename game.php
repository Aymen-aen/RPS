<?php
// common variables and functions
require_once 'common.php';

// Variables from Get Reequest
$playerChoice = (int) $_GET['playerChoice'];
$playerScore = (int) $_GET['playerScore'];
$cpuScore = (int) $_GET['cpuScore'];
$tieScore = (int) $_GET['tieScore'];
$totalPlay = (int) $_GET['totalPlay'];

$cpuChoice = rand(0, 2);
$result =  playGame($playerChoice, $cpuChoice, $playerScore, $cpuScore, $tieScore);
$totalPlay++;
$result['totalPlay'] = $totalPlay;
// Select Choices
$result['playerChoice'] = $actions[$playerChoice];
$result['cpuChoice'] = $actions[$cpuChoice];
// if we reach the maximun of rounds: display stats and reset the game
if ($totalPlay > MAX_ROUNDS) {
  $stats =  sprintf("Player A won %d of %d games", $result['playerScore'], MAX_ROUNDS);
  $stats .=  sprintf("<br />Player B won %d of %d games", $result['cpuScore'], MAX_ROUNDS);
  $stats .=  sprintf("<br />Tie %d of %d games", $result['tieScore'], MAX_ROUNDS);
  if ($result['playerScore'] > $result['cpuScore']) {
    $winner = 'Player A';
  } else {
    $winner = 'Player B';
  }
  $stats .=  sprintf("<br/>Winner is: %s", $winner, MAX_ROUNDS);
  $result['stats'] = $stats;
  $result['totalPlay'] = 1;
}

//print the result as json object
print json_encode($result);
