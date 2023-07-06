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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h2 class="navbar-brand">Sleepless Games Login</h2>
        <div class="buttons">
            <a class="buttonHome" href="../index.php" >
                <button class="homeButton">Home</button>
            </a>
            <a class="button2" href="registerPage.php">
                <button class="registerButton">Register</button>
            </a>
        </div>
      </nav>
</head>
<body>
    <div class="form">
        <form action="../php/login.php" method="post" class="form-container">

            <h1>Login</h1>
                <label id="emailInput"><b>Email</b></label>
                <input type="text" placeholder="Enter Email or Username" id="email" name="email" required


                <label id="pswInput"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

                <button type="submit" class="btn">Login</button>
                <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
        </form>
    </div>
</body>
</html>

