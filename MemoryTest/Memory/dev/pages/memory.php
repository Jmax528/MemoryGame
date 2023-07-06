<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=3.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Game Home Page</title>
    <link rel="stylesheet" href="../css/memoryStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="../../dev/js/game.js"></script>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h2 class="navbar-brand">Sleepless Games Memory</h2>
            <div class="buttons">
                <a class="buttonHome" href="../index.php" >
                    <button id="homeButton">Home</button>
                </a>
                <?php require '../php/session.php'; logout2(); ?>
            </div>
          </nav>
</head>
<body>
    <button class="Restart">Restart</button>
    <section class="points"><h3>Points: 0</h3></section>
    <div class="board">
            <section class="memory" data-card="card_1">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_1.png">            
            </section>
            <section class="memory" data-card="card_2">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_2.png">
            </section>
            <section class="memory" data-card="card_3">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_3.png">
            </section>
            <section class="memory" data-card="card_4">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_4.png">
            </section>
            <section class="memory" data-card="card_5">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_5.png">
            </section>
            <section class="memory" data-card="card_6">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_6.png">
            </section>
            <section class="memory" data-card="card_7">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_7.png">
            </section>
            <section class="memory" data-card="card_8">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_8.png">
            </section>
            <section class="memory" data-card="card_9">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_9.png">
            </section>
            <section class="memory" data-card="card_10">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_10.png">
            </section>

                <!-- -------------------- -->

            <section class="memory" data-card="card_1">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_1.png">
            </section>
            <section class="memory" data-card="card_2">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_2.png">
            </section>
            <section class="memory" data-card="card_3">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_3.png">
            </section>
            <section class="memory" data-card="card_4">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_4.png">
            </section>
            <section class="memory" data-card="card_5">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_5.png">
            </section>
            <section class="memory" data-card="card_6">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_6.png">
            </section>
            <section class="memory" data-card="card_7">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_7.png">
            </section>
            <section class="memory" data-card="card_8">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_8.png">
            </section>
            <section class="memory" data-card="card_9">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_9.png">
            </section>
            <section class="memory" data-card="card_10">
                <img class="front" src="../img/card_front.png">
                <img class="back" src="../img/card_10.png">
            </section>
    </div>
    <?php session(); ?>
</body>
</html>