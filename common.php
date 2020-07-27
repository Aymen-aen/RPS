<?php

const MAX_ROUNDS = 5; // We choose 10 Insteade of 100 Round

$actions = [
    '0' => 'Rock',
    '1' => 'Paper',
    '2' => 'Scissors'
];


function playGame($player, $cpu, $playerScore, $cpuScore, $tieScore)
{
  $order = [0, 1, 2, 0];
  $gameResult = [];

  if ($order[$player] === $order[$cpu]) {
    $gameResult['msg'] =  'The game is tied!';
    $tieScore++;
  }
  elseif ($order[$player] === $order[$cpu + 1]) {
    $playerScore++;
    $gameResult['msg'] =  'You won!';
  } else {
    $cpuScore++;
    $gameResult['msg'] = 'You lost :(';
  }
  $gameResult['playerScore'] = $playerScore;
  $gameResult['cpuScore'] = $cpuScore;
  $gameResult['tieScore'] = $tieScore;
  return $gameResult;
}
