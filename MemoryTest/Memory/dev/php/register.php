<?php
$pdo = require __DIR__ . "/Database.php";


if (strlen($_POST["psw"]) < 8) {
    die("Password must contain at least 8 characters");
}

//password requirements
if (! preg_match("/[a-z]/i", $_POST["psw"])) {
    die("Password must contain at least one letter");
}
if (! preg_match("/[0-9]/i", $_POST["psw"])) {
    die("Password must contain at least one number");
}

if ($_POST["psw"] !== $_POST["pswRepeat"]) {
    die("Passwords must match");
}

//hashes the password
$passHashed = password_hash($_POST["psw"], PASSWORD_DEFAULT);

//insert user inputs into database
$sql = "INSERT INTO user (username, email, password_hash) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
//
//
//if (!$stmt) {
//    die("SQL error: " . $pdo->errorInfo()[2]);
//}

//if successfull sends you to a page that confirms it was successfull
if ($stmt->execute([$_POST["username"], $_POST["email"], $passHashed])) {
    header("Location: ../pages/loginPage.php");
    exit;
} else {
    if ($pdo->error === 1062) {
        die("Email has already been registered");
    }
}

?>