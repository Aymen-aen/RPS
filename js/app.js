$(document).ready(function() {
    $("#start-btn").click(function() {
        $(this).toggle();
        $("#game-div").toggle();
        $("#stats-div").toggle();
    });
    $(".play-btn").click(function() {
        var _choice = $(this).attr("choice");
        play(_choice);
    });
});

function play(playerChoice) {
    var cpuScore = parseInt($("#cpu-score").html());
    var playerScore = parseInt($("#player-score").html());
    var tieScore = parseInt($("#tie-score").html());
    var totalPlay = parseInt($("#total-play").html());
    $.getJSON(
        "game.php", {
            playerChoice: playerChoice,
            playerScore: playerScore,
            cpuScore: cpuScore,
            tieScore: tieScore,
            totalPlay: totalPlay,
        },
        function(data) {
            if (typeof data.stats !== "undefined") {
                $("#game-div").toggle();
                $("#start-btn").toggle();
                $("#stats-div").toggle();
                $("#stats-div").html(data.stats);
                //-------
                $("#player-a-choose").html("");
                $("#player-b-choose").html("");

                $("#board").html("");
                $("#player-score").html(0);
                $("#cpu-score").html(0);
                $("#tie-score").html(0);
                $("#total-play").html(data.totalPlay);
            } else {
                $("#board").html(data.msg);
                $("#player-score").html(data.playerScore);
                $("#cpu-score").html(data.cpuScore);
                $("#tie-score").html(data.tieScore);
                $("#total-play").html(data.totalPlay);
                //-------
                $("#player-a-choose").html(data.playerChoice);
                $("#player-b-choose").html(data.cpuChoice);
            }
        }
    );
}
