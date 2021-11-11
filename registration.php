
<!DOCTYPE html>
<html>
    <head>
    <title style="text-align: center;">registration</title>
    <style>
        body {
            text-align: center;
        }
    </style>
    </head>
    <body>
        <h2>registration</h2>
        <div class="container">
            <form class="registration" method="POST">
                
                <div>
                    <label>username</label>
                    <input type="text" name="username" required>
                </div>
                <br>
                <div>
                    <label>email</label>
                    <input type="email" name="email" required>
                </div>
                <br>
                <div>
                    <label>password</label>
                    <input type="password" name="passwor_1" required>
                </div>
                <br>
                <div>
                    <label>confirm pasword</label>
                    <input type="password" name="password_2" required>
                </div>
                <button type="submit" name="reg_user">submit</button>
                <p>Already a user?<a href="login.php"><b>login</b></a></p>
            </form>
        </div>
    </body>
</html>