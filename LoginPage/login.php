<?php
require_once('../Database/db.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["loginUsername"])) {
        $uname = $_POST["loginUsername"];
        $query = 'SELECT `user_id`, `user_username`, `user_password` FROM `demo`.`games`.`pacman` WHERE `user_username` = $uname';
        $options = new Couchbase\QueryOptions();
        $options->namedParameters(['uname' => $uname]);
        $result = $cluster->query($query, $options);

        if (count($result->rows()) > 0) {
            $loginInfo = $result->rows()[0];
            if ($_POST["loginPassword"] == $loginInfo["user_password"]) {
                $_SESSION["username"] = $uname;
                $_SESSION["password"] = $_POST["loginPassword"];
                $_SESSION["id"] = $loginInfo["user_id"];
                echo "Login successful. Session variables set.<br>";
                echo "<script>window.location.href = '../index.php';</script>";
                exit();
            } else {
                echo "<script>window.onload = function () { setMsg(1, 'Invalid password'); document.getElementById('loginForm').style.display = 'block'; document.getElementById('loginUsername').value = '$uname'; }</script>";
            }
        } else {
            echo "<script>window.onload = function () { setMsg(0, 'Username does not exist'); document.getElementById('loginForm').style.display = 'block'; }</script>";
        }
    } else if (isset($_POST["signUpUsername"])) {
        $uname = $_POST["signUpUsername"];
        $pword = $_POST["signUpPassword"];
        $query = 'SELECT `user_id`, `user_username`, `user_password` FROM `demo`.`games`.`pacman` WHERE `user_username` = $uname';
        $options = new Couchbase\QueryOptions();
        $options->namedParameters(['uname' => $uname]);
        $result = $cluster->query($query, $options);

        if (count($result->rows()) > 0) {
            echo "<script>window.onload = function () { setMsg(2, 'Username already exists'); document.getElementById('signUpForm').style.display = 'block'; }</script>";
        } else {
            $docId = 'user::' . $uname;
            $document = ['type' => 'user', 'user_id' => $docId, 'user_username' => $uname, 'user_password' => $pword];
            $collection->upsert($docId, $document);
            $_SESSION["username"] = $uname;
            $_SESSION["password"] = $pword;
            $_SESSION["id"] = $docId;
            echo "Registration successful. Session variables set.<br>";
            echo "<script>window.location.href = '../index.php';</script>";
            exit();
        }
    }
}
?>
