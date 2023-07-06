<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: ../dev/index.php");
}

if (isset($_POST["logout2"])) {
    session_destroy();
    header("Location: ../index.php");
}

session_start();
function session() {
    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
        echo "Welcome " . $username;
        echo '<script>
            window.addEventListener("DOMContentLoaded", () => {
                document.getElementById("loginButton").style.display = "none";
                document.getElementById("registerButton").style.display = "none";
                document.getElementById("logoutButton").style.display = "inline-block";
            });
        </script>';
    }
}


if (isset($_POST["logout"])) {
    if (isset($_SESSION["username"])) {
        session_destroy();
        if (!isset($_SESSION["username"])) {
            header("Location: ../index.php");
            exit();
        }
    }
}

if (isset($_POST["logout2"])) {
    if (isset($_SESSION["username"])) {
        session_destroy();
        if (!isset($_SESSION["username"])) {
            header("Location: ../index.php");
            exit();
        }
    }
}

function logout(){
    if (isset($_SESSION["username"])) {
        echo '
                    <form action="" method="post">
                        <button class="logoutButton" name="logout" id="logoutButton">Logout</button>
                    </form>';
    }
}

function logout2(){
    if (isset($_SESSION["username"])) {
        echo '
                    <form action="" method="post">
                        <button class="logoutButton" name="logout2" id="logoutButton">Logout</button>
                    </form>';
    }
}