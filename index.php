<?php
// common variables and functions
require_once 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">

  <title>Rock Paper Scissors Game</title>

</head>

<body class="text-center">
  <div>
    <header class="mb-auto w-max">
      <h1>Rock Paper Scissors</h1>
    </header>
    <div class="container" id="container">
      <button class="btn btn-info" id="start-btn">
        Start Game
      </button>
      <div id="stats-div"></div>
      <div id="game-div">
        <div id="round-count">
          ROUND <span id="total-play">1</span>
        </div>

        <div class="clearfix"></div>
       <div id="choose-result-div">
         <table class="table table-bordered result-table">
           <tr>
             <td id="player-a-choose" class="playerA">Choose</td>
             <td id="board" class="score-board"> VS </td>
             <td id="player-b-choose" class="playerB" >Waiting</td>
           </tr>
         </table>
       </div>

        <div class="clearfix"></div>
        <div class="score-div" id="player-a-score">
          Player A (You)
          <div id="player-score">0</div>
        </div>
        <div class="score-div" id="player-b-score">
          Player B
          <div id="cpu-score">0</div>
        </div>
        <div id="tie-score">0</div>
        <div class="clearfix"></div>
        <div class="choices">
          <?php
          foreach ($actions as $key => $value) :
          ?>
            <button class="btn play-btn" id="<?php echo $value ?>" choice="<?php echo $key ?>">
              <img src="img/<?php echo $value ?>.png" alt="<?php echo $value ?>">
            </button>
          <?php
          endforeach; ?>
        </div>
      </div>
    </div>
  </div>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
