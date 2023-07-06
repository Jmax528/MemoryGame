<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Game Home Page</title>
    <link rel="stylesheet" href="../css/form.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <script defer src="/Memory/design/js/form.js"></script> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h2 class="navbar-brand">Sleepless Games Register</h2>
        <div class="buttons">
            <a class="buttonHome" href="../index.php" >
                <button class="homeButton">Home</button>
            </a>
            <a class="button2" href="loginPage.php">
                <button class="registerButton">Login</button>
            </a>
        </div>
      </nav>
</head>
<body>
    <div class="form"  >
        <form action="../../dev/php/register.php" method="post" class="form-container" novalidate>
            <h1>Register</h1>
                <label id="usernameInput"><b>Username</b></label>
                <input type="text" placeholder="Enter a Username" id="username" name="username" required>

                <label id="emailInput"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" id="email" name="email" required>

                <label id="pswInput"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
                <label id="pswRepeatInput"><b>Password</b></label>
                <input type="password" placeholder="Re-enter Your Password" id="pswRepeat" name="pswRepeat" required>

                <button type="submit" class="btn">Register</button>
                <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
        </form>
    </div>
</body>
</html>