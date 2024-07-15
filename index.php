<!-- start: php -S localhost:8000 -->
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Pacman</title>
    <link href="LoginPage/style.css" rel="stylesheet" type="text/css">
    <style>
        .sideArea {
            background-color: white;
            margin: 3vw;
            color: black;
            padding: 1vw;
        }

        iframe#highScore {
            float: right;
            width: 20vw;
            height: 50vh;
            background-color: black;
            border: none;
        }

        div#signOut {
            float: left;
            width: 10vw;
            padding: 0;
            background-color: black;
        }

        iframe#game {
            width: 50vw;
            height: 50vw;
            margin: auto;
            position: fixed;
            right: 25%;
            border: none;
        }
    </style>
    <script>
        function focusGame() {
            document.getElementById("game").focus();
        }
    </script>
</head>

<body>
    <!-- High Score area -->
    <iframe id="highScore" class="sideArea" src="Database/highscoreScript.php"></iframe>

    <!-- Sign Out Area Here -->
    <div id="signOut" class="sideArea">
        <form method='post' action='LoginPage/index.php'>
            <input type='submit' value='Sign Out' />
        </form>
    </div>

    <!-- Main Game Iframe here -->
    <iframe id="game" src="game/game.php" onload="focusGame();"></iframe>
</body>
</html>
