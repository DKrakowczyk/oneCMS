<!DOCTYPE html>
<html>

<head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/packery@2/dist/packery.pkgd.js"></script>
    <script src="https://unpkg.com/packery@2/dist/packery.pkgd.min.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio appGrade">
    <meta name="keywords" content="HTML,CSS,Portfolio,JavaScript">
    <meta name="author" content="Dawid Krakowczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>oneCMS</title>
</head>

<body>


    <div class="login-back">

        <div class="login-box" id="warn">

            <img class="dk" src="../panel/logo/oneCMS.png" />

            <div class="form">

                <form action="change.php" method="POST">
                    <input class="s" type="text" name="server" placeholder="Serwer" value="localhost" minlength="0" required>
                    <input type="text" name="database" placeholder="Nazwa bazy danych" minlength="0" required>
                    <input type="text" name="user" placeholder="Użytkownik bazy danych" minlength="0" required>
                    <input type="password" name="password" placeholder="Hasło użytkownik bazy danych" minlength="0" required>
                    <input type="submit" value="Zainstaluj oneCMS!">
                </form>
            </div>
            <p class="cp">&copy; 2018 oneCMS</p>
        </div>
    </div>
    <div style="clear:both"></div>
</body>

</html> 