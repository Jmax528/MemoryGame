<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Game Home Page</title>
    <link rel="stylesheet" href="../design/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h2 class="navbar-brand">Sleepless Games</h2>
        <div class="buttons">
            <?php require '../dev/php/session.php';logout(); ?>
            <a class="button1" href="pages/loginPage.php" >
                <button id="loginButton">Login</button>
            </a>
            <a class="button2" href="pages/registerPage.php">
                <button id="registerButton">Register</button>
            </a>
        </div>
      </nav>
</head>
<body>
    <div class="grid-container">
        <a class="memory" href="<?php echo isset($_SESSION["username"]) ? './pages/memory.php' : 'javascript:void(0)'; ?>"  >
            <section id="memory" data-game="Memory">
                <img src="./img/memory-game.jpg">
                <div class="grid-item1"><h2>Memory</h2></div>
            </section>
            <div class="description"><h4>A game of memory</h4></div>
         </a>
         <a class="TTT" href="#">
            <section class="TTT" data-game="TTT">
                <img src="./img/tic-tac-toe.jpg">
                <div class="grid-item2"><h2>TicTacToe</h2></div>
            </section>
            <div class="description"><h4>A game of TicTacToe</h4></div>
         </a>
         <a class="snake" href="#"> 
            <section class="snake" data-game="Snake">
                <img src="./img/snake-game.jpg">
                <div class="grid-item3"><h2>Snake</h2></div>
            </section>
            <div class="description"><h4>A game of Snake</h4></div>
         </a>
      </div>
    <?php session(); ?>
</body>
</html>