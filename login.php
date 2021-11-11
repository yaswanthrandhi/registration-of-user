
<!DOCTYPE html>
<html>
    <head>
    <title>login</title>
    <style>
        body {
            text-align: center;
        }
    </style>
    </head>
    <body>
        <h2>login</h2>
        <div class="container">
            <form class="login" method="POST">
                <div>
                    <label>username</label>
                    <input type="text" name="username" required>
                </div>
                <br>
                <div>
                    <label>password</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" name="login_user">submit</button>
                <p>not a user?<a href="registration.php"><b>For registration</b></a></p>
            </form>
        </div>
    </body>
</html>