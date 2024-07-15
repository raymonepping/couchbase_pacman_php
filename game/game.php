<!DOCTYPE HTML>
<html>
<head>
    <title>Pacman</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: white;
            text-align: center;
        }
        div {
            width: 85vh;
            height: 90%;
            background-size: cover;
            overflow: hidden;
            margin-left: auto;
            margin-right: auto;
        }
        #score, #lives {
            vertical-align: center;
            font-size: 150%;
            font-family: 'Press Start 2P', cursive;
        }
    </style>
    <script src="//cdn.jsdelivr.net/phaser/2.2.2/phaser.min.js"></script>
    <script src="scripts/jquery-1.8.3.min.js"></script>
    <script src="scripts/AJAX.js"></script>
    <script src="scripts/Pacman.js"></script>
    <script src="scripts/Ghost.js"></script>
    <script src="scripts/MainGame.js"></script>
</head>
<body>

    <script type="text/javascript">
        <?php
        session_start();
        $userId = isset($_SESSION['id']) ? $_SESSION['id'] : 'undefined';
        echo "var user_id='" . htmlspecialchars($userId, ENT_QUOTES, 'UTF-8') . "';";
        ?>

        var game = new Phaser.Game(448, 496, Phaser.AUTO, 'pacman');
        game.state.add('Game', MainGame, true);
    </script>

<div>
    <span id="score">Game Loading</span>
    <span id="lives" style="margin-left:10%;"></span>
</div>
    
<div id="pacman"></div>

</body>
</html>