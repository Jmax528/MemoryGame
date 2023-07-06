
<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pdo = require __DIR__ . "/Database.php";
    $sql = "SELECT * FROM user WHERE email = :email OR username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':email' => $_POST["email"],
        ':username' => $_POST["email"]
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($_POST["psw"], $user["password_hash"])) {
            session_start();
            $_SESSION["username"] = $user["username"];
            header("Location: ../index.php");

            exit;
        } else {
            $is_invalid = true;
        }
    } else {
        $is_invalid = true;
    }

    if ($is_invalid) {
        echo '<script>alert("Invalid email or password"); window.location.href = "../pages/loginPage.php";</script>';
        die();
    }
}




?>

